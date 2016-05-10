<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ChampVersus</title>

  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Icon -->
  <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/theme2.min.css">

</head>
<body>
  <!-- Main Content -->
  <section class="content-wrap">
      
       <!-- MENU -->
       <div class="nav-menu" style="max-width: 1400px; */">
            <a href="index.html">Home</a>
            <a>About Us</a>
            <span id="patch-LoL"></span>
        </div>
      
        <!-- TOP INFORMATION SUMMONERS -->
        <div class="youplay-banner banner-top youplay-banner-parallax small" style="background-image: none; background-attachment: scroll; background-size: auto;border-bottom: 5px solid #D92B4C;">
            <div id="jarallax-container-0" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; transition: transform linear -1ms, -webkit-transform linear -1ms; visibility: hidden; z-index: -100;">
                <div style="position: fixed; top: 0px; left: 0px; width: 994px; height: 994px; overflow: hidden; pointer-events: none; transition: transform linear -1ms, -webkit-transform linear -1ms; margin-left: 0px; margin-top: -97.5px; visibility: visible; background-image: url(&quot;data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7&quot;); background-size: 100% 100%; background-position: 50% 50%; background-repeat: no-repeat;"></div>
            </div>
          <div class="image" style="transform: translate3d(0px, 0px, 0px);background: url('img/versus.jpg') 53% 47% no-repeat;"></div>

          <div class="info" style="opacity: 1; transform: translate3d(0px, 0px, 0px);">
            <div>
              <div id="content-profile" class="container youplay-user" style="display:none;">

                <!-- SUMMONER IMAGE 1 -->
                <a  class="angled-img image-popup">
                  <div class="img">
                    <img id="icon1"  alt="">
                  </div>
                  <i class="fa fa-search-plus icon"></i>
                </a>

                <div class="user-data">
                  <h2 class="summoner-name1" style="font-size:20px;"></h2> <!-- SUMMONER NAME 1 -->
                  <div class="location"><i class="fa fa-map-marker"></i><span id="sum-reg-1"></span></div> <!-- SUMMONER REGION 1 -->
                  <div class="activity">
                    <div>
                      <div id="levelfive1" class="num">0</div> <!-- SUMMONER 1 LVL 5 MASTERY CHAMPIONS-->
                      <div class="title">LvL 5+</div>
                    </div>
                    <div>
                      <div id="totalS1" class="num">0</div> <!-- SUMMONER 1 RANK S S+ S- MASTERY CHAMPIONS-->
                      <div class="title">Rank S</div>
                    </div>
                    <div>
                      <div id="totalSplus1"class="num">0</div> <!-- SUMMONER 1 ONLY S+ MASTERY CHAMPIONS-->
                      <div class="title">Rank S+</div>
                    </div>
                  </div>
                </div>

                <!-- SUMMONER IMAGE 2 -->
                <a  class="angled-img image-popup float-right-u">
                  <div class="img">
                    <img id="icon2"  alt="">
                  </div>
                  <i class="fa fa-search-plus icon"></i>
                </a>

                <div class="user-data float-right-u">
                  <h2 class="summoner-name2" style="font-size:20px;"></h2>
                  <div class="location"><i class="fa fa-map-marker"></i><span id="sum-reg-2"></span></div>
                  <div class="activity">
                    <div>
                      <div id="levelfive2" class="num">0</div> <!-- SUMMONER 2 LVL 5 MASTERY CHAMPIONS-->
                      <div class="title">LvL 5+</div>
                    </div>
                    <div>
                      <div id="totalS2" class="num">0</div> <!-- SUMMONER 2 RANK S S+ S- MASTERY CHAMPIONS-->
                      <div class="title">Rank S</div>
                    </div>
                    <div>
                      <div id="totalSplus2" class="num">0</div> <!-- SUMMONER 2 ONLY S+ MASTERY CHAMPIONS-->
                      <div class="title">Rank S+</div>
                    </div>
                  </div>
                </div>   
              </div>

              <div id="content-tiers" class="container mt-20" style="display:none;">
                <!-- SUMMONER 1 TIER DIVISION MATCH HISTORY -->
                <a id="tier-division1" class="btn btn-sm btn-default ml-0 active"></a>
                <!-- SUMMONER 2 TIER DIVISION MATCH HISTORY -->
                <a id="tier-division2" class="btn btn-sm btn-default ml-0 float-right-u active"></a>
              </div>
            </div>
          </div>
        </div>
        <!-- /TOP INFORMATION SUMMONERS -->
 
        <!-- CHAMPIONS DATA -->
        <div class="container youplay-content">
        <div class="row">
          
          <!-- LOADING -->
          <div class="loader" style="display: table;margin: auto;"> 
            <img src="img/loading1.gif" style="width: 80px;"/>  
          </div>
          <div class="loader" style="display: table;margin: auto;">
            <img src="img/loading2.gif" />  
          </div>    
            
          <div id="content-name" style="display:none;">
              <div class="summoner-name1 players1"></div> <!-- SUMMONER NAME 1 -->
              <div class="summoner-name2 players2"></div> <!-- SUMMONER NAME 2 -->
          </div>
            
          <div style="clear: both;"></div>
          <div id="content-stats"  class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="display:none;">
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Champions Mastery Stats <span class="icon-plus"></span>
                    </a>
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                    
                  <!-- STATS SUMMONER 1 -->    
                  <div id="Stats0" class="wrapper-chart">
                      <strong style="float:left;">Rank</strong><strong style="float:right;"><span id="totalChamps1"></span></strong>
                      <div style="clear: both;"></div>
                  </div>
                    
                  <div id="Stats1" class="wrapper-chart">
                      <strong style="float:left;">Rank</strong><strong style="float:right;"><span id="totalChamps2"></span></strong>
                      <div style="clear: both;"></div>
                                          
                  </div>
                    
                </div>
              </div>
            </div>
          </div>
          
        <div class="col-md-12" style="padding-top: 10px;">
            <div class="youplay-timeline">
                <div class="youplay-timeline-block">
                    <div id="content-champions-data0" class="col-md-6"></div> <!-- CHAMPIONS DATA SUMMONER 1 -->
                    <div id="content-champions-data1" class="col-md-6"></div> <!-- CHAMPIONS DATA SUMMONER 2 -->
                </div>
            </div>
        </div>
            
      </div>

    </div>
    
  </section>
  <!-- /Main Content -->

 <div class="footer-n"> ChampVersus by Jucezt & Mancarv</div>  
    
  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- youplay -->
  <script type="text/javascript" src="js/versus.min.js"></script>
  <!-- AJAX QUE CONSULTA A LA API LA INFORMACION DE LOS INVODACORES -->
  <script>
        $(document).ready(function(){

                $.ajax({
                   type: "GET",
                    dataType: 'json',
                    data: { <?php echo "summoner1: '".$_GET['summoner1']."', summoner2: '".$_GET['summoner2']."', region1: '".$_GET['region1']."', region2: '".$_GET['region2']."'"; ?> },
                   url:"api/ajax.php",
                   beforeSend: function() {
                     
                   },
                   success:getID,
                   complete: function(){
                     $('.loader').hide();
                     $('#content-profile').show();
                     $('#content-tiers').show();
                     $('#content-name').show();
                     $('#content-stats').show();
                   },
                    error: function(){
                        alert("The usernames or regions are wrong.");
                        window.history.back();
                    }
                 }); 
             return false;
            
        });
      
       function getID(data){ 
           
            //SummonerName
            $(".summoner-name1").html(data['players'][0].name);
            $(".summoner-name2").html(data['players'][1].name);
           
            //Region
            $("#sum-reg-1").html(data['players'][0].region);
            $("#sum-reg-2").html(data['players'][1].region);
           
            //Tier & Division
            $("#tier-division1").html(data['players'][0].tier+' '+data['players'][0].division);
            $("#tier-division2").html(data['players'][1].tier+' '+data['players'][1].division);
            
            //Icon Profile
            $("#icon1").attr('src', 'http://ddragon.leagueoflegends.com/cdn/'+data['players'][0].version+'/img/profileicon/'+data['players'][0].profileIconId+'.png');
            $("#icon2").attr('src', 'http://ddragon.leagueoflegends.com/cdn/'+data['players'][1].version+'/img/profileicon/'+data['players'][1].profileIconId+'.png');
           
            //PATCH
            $("#patch-LoL").html('Patch '+data['players'][0].version);
           
            //Total champs per player
            var totalChamps1 = Object.keys(data['champs'][0]).length-1;
            $("#totalChamps1").text("Total Champions: "+totalChamps1);
            var totalChamps2 = Object.keys(data['champs'][1]).length-1;
            $("#totalChamps2").text("Total Champions: "+totalChamps2);
           
           
           //S Ranks
           var S=0, Splus=0;
           $.each(data['champs'][0].grades, function(index,item) {
               
               setStats(0,index,item, totalChamps1);   
                  
               if(index=='S' || index=='S+' || index=='S-')
                 S+=item;
               if(index=='S+')
                 Splus+=item;
           });
           $("#totalS1").html(S);
           $("#totalSplus1").html(Splus);
           
           S=0, Splus=0; i=0;
           $.each(data['champs'][1].grades, function(index,item) {
               
               setStats(1,index,item, totalChamps2); 
               
               if(index=='S' || index=='S+' || index=='S-')
                 S+=item;
               if(index=='S+')
                 Splus+=item;
           });
           $("#totalS2").html(S);
           $("#totalSplus2").html(Splus);
           
           
           
           //Level 5+
           var levelfive1 = 0;
           var levelfive2 = 0;

           
           for(var i=0; i<2; i++)
           {
                $.each(data['champs'][i], function(index,item) {
                    if(index=="grades")
                       return false;
                    
                    contentChampionsData = $('#content-champions-data'+i).html();

                    if(index%2==0)
                        bg = '<div class="classWithPad youplay-bg">';
                    else
                        bg = '<div class="classWithPad">';
                    
                    var grade;
                    if(item.hasOwnProperty('highestGrade')) grade = item.highestGrade; else grade = '?';
                       
                    if(item.hasOwnProperty('averageChampionsKilled'))
                    {
                        var progressBar = (item.championPoints * 100)/(item.championPoints + item.championPointsUntilNextLevel);
                        progressBar = Math.round(progressBar);
                        
                        var colorBar;
                        if(item.championLevel==1)
                            colorBar='progress-bar-danger';
                        else if(item.championLevel==5)
                            colorBar='progress-bar-success';
                        else if(item.championLevel>5)
                            colorBar='progress-bar-info';
                        else
                            colorBar='progress-bar-primary';
                        
                        $("#content-champions-data"+i).html(contentChampionsData+''+bg+''+
                              '<div class="youplay-timeline-icon bg-primary">'+
                                '<img src="http://ddragon.leagueoflegends.com/cdn/'+data['players'][i].version+'/img/champion/'+item.name+'.png" alt="'+item.name+'" title="'+item.name+'">'+
                              '</div>'+
                              '<div>'+
                                '<span class="icon-avg"><img src="img/icon_kills.png" alt="kill">'+item.averageChampionsKilled+'</span>'+
                                '<span class="icon-avg"><img src="img/icon_deaths.png" alt="death">'+item.averageNumDeaths+'</span>'+
                                '<span class="icon-avg"><img src="img/icon_assists.png" alt="assits">'+item.averageAssists+'</span>'+
                                '<span class="icon-avg"><img src="img/icon_minions.png" alt="minions">'+item.averageMinionsKilled+' cs</span>'+
                                '<span class="icon-avg"><span class="win-avg">W</span> '+item.totalSessionsWon+'</span>'+
                                '<span class="icon-avg"><span class="loss-avg">L</span> '+item.totalSessionsLost+'</span>'+
                                '<span class="icon-avg rank-mastery">'+
                                    '<div>highest<br>Grade</div>'+
                                    grade +
                                '</span>'+
                              '</div>'+
                              '<div class="lvl-mastery">LVL '+item.championLevel+'</div>'+
                              '<div class="progress youplay-progress">'+
                                '<div class="progress-bar '+colorBar+' progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: '+progressBar+'%"></div>'+
                              '</div>'+
                              '<div>'+
                                  '<div class="point-mastery-left">'+
                                    item.championPoints+
                                    '<span class="title-mastery">'+item.name+' - '+item.title+'</span>'+
                                  '</div>'+
                                  '<div class="point-mastery-right">'+(item.championPointsUntilNextLevel + item.championPoints)+'</div>'+
                              '</div>'+
                          '</div>');
                            
                          //TOOLTIP STATS CHAMPS
                          setTooltipGrade(i,item.highestGrade,item.name);
                    }else{
                        
                        if(!item.hasOwnProperty('championLevel'))
                            lvl=0;
                        else
                            lvl=item.championLevel;
                        
                        var progressBar = (item.championPoints * 100)/(item.championPoints + item.championPointsUntilNextLevel);
                        progressBar = Math.round(progressBar);
                        
                        championsPoints = 0; TotalChampionsPoints = 0;
                        if(item.hasOwnProperty('championPoints')){
                            TotalChampionsPoints = item.championPointsUntilNextLevel + item.championPoints;
                            championsPoints = item.championPoints;
                        }
                        
                        var colorBar;
                        if(item.championLevel==1)
                            colorBar='progress-bar-danger';
                        else if(item.championLevel==5)
                            colorBar='progress-bar-success';
                        else if(item.championLevel>5)
                            colorBar='progress-bar-info';
                        else
                            colorBar='progress-bar-primary';
                        
                        $("#content-champions-data"+i).html(contentChampionsData+''+bg+''+
                              '<div class="youplay-timeline-icon bg-primary">'+
                                '<img src="http://ddragon.leagueoflegends.com/cdn/'+data['players'][i].version+'/img/champion/'+item.name+'.png" alt="'+item.name+'" title="'+item.name+'">'+
                              '</div>'+
                              '<div>'+
                                '<span class="icon-avg"><span class="no-ranked">NO RANKED STATS</span>'+
                                '<span class="icon-avg rank-mastery">'+
                                    '<div>highest<br>Grade</div>'+
                                    grade +
                                '</span>'+
                              '</div>'+
                              '<div class="lvl-mastery">LVL '+lvl+'</div>'+
                              '<div class="progress youplay-progress">'+
                                '<div class="progress-bar '+colorBar+' progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: '+progressBar+'%"></div>'+
                              '</div>'+
                              '<div>'+
                                  '<div class="point-mastery-left">'+
                                    championsPoints+
                                    '<span class="title-mastery">'+item.name+' - '+item.title+'</span>'+
                                  '</div>'+
                                  '<div class="point-mastery-right">'+(TotalChampionsPoints)+'</div>'+
                              '</div>'+
                            '</div>');
                            //TOOLTIP STATS CHAMPS
                            setTooltipGrade(i,item.highestGrade,item.name);
                    }
                    if(i==0 && item.championLevel > 4)
                        levelfive1++;
                    else if(i==1 && item.championLevel > 4)
                        levelfive2++;
                });
                
                $("#levelfive1").html(levelfive1);
                $("#levelfive2").html(levelfive2);
           }
           
           //Active Tooltip
           $('[data-toggle="tooltip"]').tooltip(); 
       }
        
      function setStats(index, cat, count, numChamps){
          if(cat){
              var progressBar = Math.round((count*100)/numChamps);
              var ident = cat;
              if (ident.indexOf('+') != -1) 
                  ident = ident[0]+'plus';    
              $("#Stats"+index).html($("#Stats"+index).html()+'<div style="clear: both;"></div>'+
                                                                    '<div class="chart-rank">'+cat+' <span style="color: #F75070;">['+count+']</span></div>'+
                                                                    '<a id="'+index+'Bar'+ident+'" data-toggle="tooltip" data-placement="top" title=""><div class="progress" style="margin-top:0px;">'+
                                                                        '<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: '+progressBar+'%"></div>'+
                                                                    '</div></a>');
          }
      }
      
      function setTooltipGrade(index,grade,name){
          if(grade){
              var ident = grade;
              if (ident.indexOf('+') != -1) 
                  ident = ident[0]+'plus';  
              $('#'+index+'Bar'+ident).attr('title', $('#'+index+'Bar'+ident).attr('title')+' '+name); 
          }
      }
      
  </script>
    <div style="clear: both;"></div>
</body>
</html>