<?php

include "functions.php";

$name1 = str_replace(" ", "", strtolower($_GET['summoner1']));
$name2 = str_replace(" ", "", strtolower($_GET['summoner2']));
$region1 = strtolower($_GET['region1']);
$region2 = strtolower($_GET['region2']);

$summoner1 = getSummonerData($name1, $region1);
$summoner2 = getSummonerData($name2, $region2);


//Put data on aux array to improve json format
foreach($summoner1[$name1] as $key => $value)
    $array_aux['players'][0][$key] = $value;

foreach($summoner2[$name2] as $key => $value)
    $array_aux['players'][1][$key] = $value;

$masteryStats1 = getMasteriesStats($array_aux, 0, $region1);
$masteryStats2 = getMasteriesStats($array_aux, 1, $region2);

//Sort champions from second player to be like first player
$masteryStats2 = sortChampions($masteryStats1, $masteryStats2);

foreach($masteryStats1 as $key => $value)
    $array_aux2['champs'][0][$key] = $value;

foreach($masteryStats2 as $key => $value)
    $array_aux2['champs'][1][$key] = $value;

echo json_encode(array_merge($array_aux, $array_aux2));

    
?>