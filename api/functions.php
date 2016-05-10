<?php

$api_key=<your-key>

function getPlatformId($region)
{
    switch($region)
    {
        case "br" : return "BR1"; 
        case "eune" : return "EUN1"; 
        case "euw" : return "EUW1"; 
        case "jp" : return "JP1"; 
        case "kr" : return "KR"; 
        case "lan" :return "LA1"; 
        case "las" : return "LA2"; 
        case "na" : return "NA1"; 
        case "oce" : return "OC1"; 
        case "ru" : return "RU"; 
        case "tr" : return "TR1"; 
    }
}

function getRegionLongName($region)
{
    switch($region)
    {
        case "br" : return "Brazil"; 
        case "eune" : return "EU Nordic & East"; 
        case "euw" : return "EU West"; 
        case "jp" : return "Japan"; 
        case "kr" : return "Korea"; 
        case "lan" :return "Latin America North"; 
        case "las" : return "Latin America South"; 
        case "na" : return "North America"; 
        case "oce" : return "Oceania"; 
        case "ru" : return "Russia"; 
        case "tr" : return "Turkey"; 
    }
    
}

function getSummonerData($name, $region)
{
    global $api_key;
    
    
    //Get summoner data
    $api_url = "https://$region.api.pvp.net/api/lol/$region";
    $url_summoner = "$api_url/v1.4/summoner/by-name/$name?$api_key";
    $json_summoner = file_get_contents($url_summoner);
    $obj_summoner = json_decode($json_summoner, true);
    $id = $obj_summoner[$name][id];

    //Get division data
    $url_division = "$api_url/v2.5/league/by-summoner/$id/entry?$api_key";
    $json = file_get_contents($url_division);
    $obj_division= json_decode($json, true);
    $division = array();

    foreach($obj_division[$id] as $ranked)
        if($ranked[queue]=="RANKED_SOLO_5x5")
        {
            $division = $ranked;
            break;
        }

    $obj_summoner[$name][tier] = $division[tier];
    $obj_summoner[$name][division] = $division[entries][0][division];
    $obj_summoner[$name][region] = getRegionLongName($region);
    $obj_summoner[$name][version] = getVersion($region);
    
    
    return $obj_summoner;
}

function getMasteriesStats($obj_summoner, $playerNum, $region)
{
    global $api_key;
    $id = $obj_summoner['players'][$playerNum][id];
    $platformId = getPlatformId($region);
    
    //Get stats
    $api_url = "https://$region.api.pvp.net/api/lol/$region";
    $stats = "$api_url/v1.3/stats/by-summoner/$id/ranked?$api_key";
    $json_stats = file_get_contents($stats);
    $obj_stats = json_decode($json_stats, true);

    //Get champion masteries
    $api_url_mastery = "https://$region.api.pvp.net/championmastery/location/$platformId/player/$id/champions?$api_key";
    $json_CM = file_get_contents($api_url_mastery);
    $obj_CM = json_decode($json_CM, true);
    
    //Get champions names
    
    $champions = getChampionsName($region);

    //Mixing masteries with stats
    foreach($obj_CM as $key_CM => $mastery)
    {
        foreach($obj_stats[champions] as $key_stats => $champion)
        {
            $isChamp = false;
            if($mastery["championId"] == $champion["id"])
            {
                $obj_CM[$key_CM]["averageChampionsKilled"] = number_format($champion["stats"]["totalChampionKills"]/$champion["stats"]["totalSessionsPlayed"], 1);
                $obj_CM[$key_CM]["averageNumDeaths"] = number_format($champion["stats"]["totalDeathsPerSession"]/$champion["stats"]["totalSessionsPlayed"], 1);
                $obj_CM[$key_CM]["averageAssists"] = number_format($champion["stats"]["totalAssists"]/$champion["stats"]["totalSessionsPlayed"], 1);
                $obj_CM[$key_CM]["averageMinionsKilled"] = number_format(($champion["stats"]["totalMinionKills"]+$champion["stats"]["totalNeutralMinionsKilled"])/$champion["stats"]["totalSessionsPlayed"], 1);
                $obj_CM[$key_CM]["totalSessionsWon"] = $champion["stats"]["totalSessionsWon"];
                $obj_CM[$key_CM]["totalSessionsLost"] = $champion["stats"]["totalSessionsLost"];
                $obj_CM['grades'][$mastery["highestGrade"]]++;
                $obj_CM[$key_CM]["name"] = $champions["data"][$mastery["championId"]]["key"];
                $obj_CM[$key_CM]["title"] = $champions["data"][$mastery["championId"]]["title"];
                $isChamp = true;
                break;
            }
            
        }
        //If the player has no played with the champ this season 
        if(!$isChamp)
        {
            $obj_CM[$key_CM]["name"] = $champions["data"][$mastery["championId"]]["key"];
            $obj_CM[$key_CM]["title"] = $champions["data"][$mastery["championId"]]["title"];
            $obj_CM[$key_CM]["championLevel"] = $mastery["championLevel"];
        }
    }
    
    $obj_CM['grades'] = sortGrades($obj_CM['grades']);
    return $obj_CM;
}

function sortChampions($champions1, $champions2)
{
    $sortedChampions = array();
    //sort champions from both player to be alike
    foreach($champions1 as $key1 => $item1)
    {
        $isChamp = false;
        foreach($champions2 as $key2 => $item2)
        {
            if($item1['championId'] == $item2['championId'])
            {
                $sortedChampions[$key1] = $item2;
                $isChamp = true;
                break;
            }
        }
        if(!$isChamp && isset($item1['championId']))
        {
            $sortedChampions[$key1]['name'] = $item1['name'];
            $sortedChampions[$key1]['title'] = $item1['title'];
            $sortedChampions[$key1]['championLevel'] = $item1['championLevel'];
        }
        
    }
    //For remaining champs
    foreach($champions2 as $key2 => $item2)
    {
        $isChamp = false;
        foreach($sortedChampions as $keySorted => $itemSorted)
            if(isset($itemSorted['championId']) && $item2['championId'] == $itemSorted['championId'])
            {
                $isChamp = true;
                break;
            }
        if(!$isChamp && isset($item2['championId']))
            $sortedChampions[] = $item2;
    }
    
    $sortedChampions['grades'] = $champions2['grades'];
    return $sortedChampions;
    
}

function getChampionsName($region)
{
    global $api_key;
    $championData = "https://global.api.pvp.net/api/lol/static-data/$region/v1.2/champion/?dataById=true&locale=en_US&$api_key";
    $json_champion = file_get_contents($championData);
    $champions = json_decode($json_champion, true);
    
    return $champions;
}

function getVersion($region)
{
    global $api_key;
    $version_data = "https://global.api.pvp.net/api/lol/static-data/$region/v1.2/versions?$api_key";
    $json_version = file_get_contents($version_data);
    $versions = json_decode($json_version, true);
    
    return $versions[0];
}

function sortGrades($grades)
{
    $sortedGrades = array('S+' => 0, 'S' => 0, 'S-' => 0,
                          'A+' => 0, 'A' => 0, 'A-' => 0,
                          'B+' => 0, 'B' => 0, 'B-' => 0,
                          'C+' => 0, 'C' => 0, 'C-' => 0,
                          'D+' => 0, 'D' => 0, 'D-' => 0);
    foreach($grades as $key => $value)
        $sortedGrades[$key] = $value;
    
    return $sortedGrades;    
}

?>
