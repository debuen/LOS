<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>LOS - LeagueOfSigns</title>
        <link rel="shortcut icon" href="../img/Fab_icon.png" />
        
        <link href="../Bootstrap-3.3.7/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="../Bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css"/> 
        <link href="../Bootstrap4/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
               
        <link href="../css/global.css" rel="stylesheet" type="text/css"/>        
        <link href="home.css" rel="stylesheet" type="text/css"/>
        
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
        
    </head>
    <body>
<?php
        $id_user = $_GET["id"];	// id = ID user
?>
        <div id="navbar">
            <i class="fa fa-bars fa-3x" style="float: left; color: white; padding: 23px;"></i>
            <img src="../img/Logo blanc petit.png" alt="" style="width: 125px; margin-top: 15px; margin-left: 8%;"/>
            <div id="userMenu">
                <img src="../img/usuario.jpg" alt="" href="#" onclick="showMenu(event)" onblur="hideMenu()" id="imgProfile"/>
                <ul id="menu">
                    <div style="display: block;     margin-top: 4px;">
                        <i class="fa fa-user" style="display: inline-block; margin-top: 3px; float: left;"></i>
                        <a style="display: inline-block; margin-bottom: 8px;">Profile</a>
                    </div>
                    <div style="display: block;">
                        <i class="fa fa-sign-in-alt" style="display: inline-block; margin-top: 3px; float: left;"></i>
                        <a style="display: inline-block; margin-bottom: 8px;">Log out</a>
                    </div>
                </ul>
            </div>  
        </div>
        
        <nav id="sidebar" class="active">   
            <ul class="list-unstyled components fa-1x">
                    <li>
                        <a href="#" data-toggle="collapse" class="activeMenu">
                            <i class="fa fa-home"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="../Fixture/index.php">
                            <i class="fa fa-futbol"></i>
                            Fixture
                        </a>
                    </li>
                    <li>
                        <a href="../League/index.php">
                            <i class="fa fa-trophy"></i> 
                            League
                        </a>
                    </li>
                    <li>
                        <a href="../Stats/index.php">
                            <i class="fa fa-chart-bar"></i>
                            Stats
                        </a>
                    </li>
                    <li>
                        <a href="../Settings/index.php">
                            <i class="fa fa-cog"></i>
                            Settings
                        </a>
                    </li>
                    <li>
                        <a href="../Information/index.php">
                            <i class="fa fa-info"></i>
                            Information
                        </a>
                    </li>
                </ul>
        </nav>
        
        <div class="container-fluid" style="width: 100%; height: 100%; font-size: 15px; padding-top: 100px;">
            <div class="row" style="margin-left: 65px; margin-top: 50px;">
                
                <div class="col-4">
                    <div class="targetLeague" id="t1" style="display: table;" data-toggle="modal" data-target="#myModal">
                        <div class="alignLeague">
                            <i class="fas fa-plus fa-6x"></i>
                            <p style="color: white; margin-top: 15px;">CREATE A LEAGUE</p>
                        </div>
                    </div>
                   
                    <div id="myModal2" class="modal fade" role="dialog">
                        <div class="modal-dialog" style="margin-top: 175px;">

                          <div class="modal-content">
                            <div class="modal-header">
                                
                                <h4 class="modal-title"><img src="../img/Fab_icon.png" style="width: 40px; margin-right: 15px;"/>LEAGUE SEARCHER</h4>
                                <button type="button" class="close" data-dismiss="modal" id="btnClose">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class=”ui-widget”>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1" style="padding-right: 25px; height: 34px;"><i class="fa fa-search" style="margin-top: 3px;"></i></span>
                                        <p style="width: 90%;"><input id="searcher" type="text" class="form-control" placeholder="search here the league" aria-describedby="basic-addon1" style="font-size: 14px;"></p>
                                        <div class="container-fluid" style="margin-top: 20px;">
                                            <div class="row">
                                                <div class="item col-6" style="text-align: center;"> 
                                                    <p style="margin-bottom: 0px;"><label class="names">Royal League </label></p>
                                                    <button class="btnJoin">JOIN</button>
                                                </div>
                                                <div class="item col-6" style="text-align: center;"> 
                                                    <p style="margin-bottom: 0px;"><label class="names">Messi League </label></p>
                                                    <button class="btnJoin">JOIN</button>
                                                </div>
                                                <div class="item col-6" style="text-align: center;"> 
                                                    <p style="margin-bottom: 0px;"><label class="names">Spanish League </label></p>
                                                    <button class="btnJoin">JOIN</button>
                                                </div>
                                                <div class="item col-6" style="text-align: center;"> 
                                                    <p style="margin-bottom: 0px;"><label class="names">Tigers </label></p>
                                                    <button class="btnJoin">JOIN</button>
                                                </div>
                                                <div class="item col-6" style="text-align: center;"> 
                                                    <p style="margin-bottom: 0px;"><label class="names">Qwerty </label></p>
                                                    <button class="btnJoin">JOIN</button>
                                                </div>
                                            </div>
                                        </div>    
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>

                        </div>
                    </div>
                    
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog" style="margin-top: 175px;">

                          <div class="modal-content">
                            <div class="modal-header">

                                <h4 class="modal-title"><img src="../img/Fab_icon.png" style="width: 40px; margin-right: 15px;"/>CREATE THE LEAGUE</h4>
                                <button type="button" class="close" data-dismiss="modal" id="btnClose">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="ui-widget">
                                    <div class="input-group" style="font-size: 15px;">   
                                        <div style="display: block; width: 100%; text-align: center; margin-top: 20px;">
                                            <span style="margin-right: 30px;">Name League</span>
                                            <input type="text" style="font-size: 14px; width: 50%; border: 1px solid #b5b5b5;">
                                        </div>
                                        <div style="display: block; width: 100%; text-align: center; margin-top: 30px;">
                                            <span style="margin-right: 40px;">Competition</span>
                                            <select style="font-size: 14px; width: 50%;">
                                              <option value="">Volvo</option>
                                              <option value="">Saab</option>
                                              <option value="">Mercedes</option>
                                              <option value="">Audi</option>
                                            </select>
                                        </div>
                                        <div style="text-align: center; width: 100%; margin-top: 40px;">
                                            <button class="btnJoin">CREATE</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>

                        </div>
                    </div>
             
                </div>
                
                <div class="col-4">  
                    <div class="targetLeague" id="t1" style="display: table;" data-toggle="modal" data-target="#myModal2">
                        <div class="alignLeague">
                            <i class="fas fa-sign-in-alt fa-6x"></i>
                            <p style="color: white; margin-top: 15px;">JOIN A LEAGUE</p>
                        </div>
                    </div>
                    
                </div>     
                
<?php
        require_once("../includes/constants.php");
		require_once("../includes/dbFunctions.php");

        function getUserTournaments($id_user) {
        	$mysqli = connectToDB();
			$resultat = $mysqli->query("select * from tournament_users where id_user=".$id_user);
			while ($tournament = $resultat->fetch_assoc()) {
				$user_tournaments[] = $tournament;
			}
			$resultat->free();
			disconnectDB();
			return $user_tournaments;	
        }
        
        function getTournamentData($id_tournament) {
        	$mysqli = connectToDB();
			$resultat = $mysqli->query("select * from tournament where id=".$id_tournament);
			$tournamentData = $resultat->fetch_assoc();
			$resultat->free();
			disconnectDB();
			//print_r($tournamentData); exit;
			return $tournamentData;	
        }
        
        function getLeagueData($id_league) {
			$mysqli = connectToDB();
			$resultat = $mysqli->query("select name from league where id=".$id_league);
			$league = $resultat->fetch_assoc();
			$resultat->free();
			disconnectDB();
			return $league["name"];
		}

        $user_tournaments = getUserTournaments($id_user);
        //print_r($user_tournaments); exit;
    	foreach($user_tournaments as $tournament) {
    		$tournamentData = getTournamentData($tournament["id_tournament"]);

    		$league_name = getLeagueData($tournamentData["id_league"]);
    		?>
                <div class="col-4" style="margin-bottom: 35px;">
                    <div class="targetLeague league" id="t1" style="display: table;" id="t2">
                        <div class="alignLeague" onclick="javascript:location.href='../Fixture/index.php?id=<?php echo $tournament["id_tournament"]; ?>';">
                            <i class="fas fa-trophy fa-5x"></i>
                            <p class="infoLeague infoLeague1"><?php echo $tournamentData["name"]; ?></p>
                            <p class="infoLeague infoLeague2"><?php echo utf8_encode($league_name); ?></p>
                            <p class="infoLeague infoLeague2"><?php echo $tournament["totalPoints"]; ?> points</p>
                        </div>
                    </div>
                </div>
    		
    		<?php
    	}

        ?>


                
                
            </div>
        </div>
        
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="../Bootstrap-3.3.7/js/bootstrap.js" type="text/javascript"></script>
        <script src="../js/all.js" type="text/javascript"></script>
    </body>
    
</html>
