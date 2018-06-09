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
        <link href="fixture.css" rel="stylesheet" type="text/css"/>
        
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
        
    </head>
    <body>
        
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
                        <a href="../Home/index.php">
                            <i class="fa fa-home"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#" class="activeMenu">
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
            <ul class="nav nav-tabs nav-justified" style="padding-left: 65px; display: block;">
                <li class="active"><a data-toggle="tab" href="#actualFixture" style="background-color: #cccccc;">Actual Fixture</a></li>
                <li><a data-toggle="tab" href="#allFixture" style="background-color: #cccccc;">All Fixtures</a></li>
            </ul>
            
            <div class="tab-content">
            
            <div id="actualFixture" class="tab-pane fade in active">
            
                <div class="row" style="padding-left: 65px; margin-top: 50px;">

<?php

//echo "[".__DIR__."]";

require_once("../includes/constants.php");
require_once("../includes/dbFunctions.php");
require_once("../includes/phplib-football-data-master/FootBallData.php");

function getLeagueFromTournament($id_tournament) {
	$mysqli = connectToDB();
	$resultat = $mysqli->query("select id_league from tournament where id=".$id_tournament);
	$id_league = $resultat->fetch_assoc();
	$resultat->free();
	disconnectDB();
	return $id_league["id_league"];
}

function getLeagueTeams($id_league) {
	// Try to get data locally (from DB)
	$teams = getTableData("teams", "where id_league=".$id_league);
	
	// If successful, convert array to Soccerseason object
	if (!empty($teams)) {
		$teamsObject = array();
		for($i=0; $i<count($teams); $i++) {
			$teamsObject[$i] = new stdClass();
			$teamsObject[$i]->_links =  new stdClass();
			$teamsObject[$i]->_links->self =  new stdClass();
			$teamsObject[$i]->_links->self->href = "http://api.football-data.org/v1/teams/".$teams[$i]["id"];
			$teamsObject[$i]->name = utf8_encode($teams[$i]["name"]);
			$teamsObject[$i]->name = utf8_encode($teams[$i]["name"]);
		}
	// DB contains no teams information => get data online
	} else {
		// Get all teams for league
		$league = new Soccerseason();
		//$league->payload = $currLeague;
		$league->payload->_links = new stdClass();
		$league->payload->_links->self = new stdClass();
		$league->payload->_links->teams = new stdClass();
		$league->payload->_links->teams->href = "http://api.football-data.org/v1/competitions/".$id_league."/teams";
		$league->payload->_links->fixtures = new stdClass();
		$league->payload->_links->leagueTable = new stdClass();


		$teamsObject = $league->getTeams();
		// For each team returned, insert into DB
		foreach($teamsObject as $team) {
			execQuery("teams", "id, name, id_league", getId($team).", '".utf8_decode($team->name)."', ".$id_league);
		}
	}
	
	return $teamsObject;
}

function getLeagueMatches($id_league, $name_teams, $id_teams) {
	// Try to get data locally (from DB)
	//$matches = getTableData("matches", "where id_league=".$id_league." order by game desc, date desc");
	
	$mysqli = connectToDB();
	$resultat = $mysqli->query("select * from matches where id_league=".$id_league." order by game desc, date desc");
	$res = array();
	while ($dades = $resultat->fetch_assoc()) {
		$matches[] = $dades;
	}
	$resultat->free();
	disconnectDB();
	
	// If successful, convert array to Soccerseason object

	if (!empty($matches)) {
		$matchesObject = new stdClass();
		$matchesObject->_links =  new stdClass();
		$matchesObject->_links->competition =  new stdClass();
		$matchesObject->_links->self =  new stdClass();
		$matchesObject->_links->competition->href = "http://api.football-data.org/v1/competitions/".$id_league;
		$matchesObject->_links->self->href = $matchesObject->_links->competition->href."/fixtures";
		$matchesObject->count = count($matches);
		$matchesObject->fixtures = array();
		for($i=0; $i<$matchesObject->count; $i++) {
			$matchesObject->fixtures[$i] = new stdClass();
			$matchesObject->fixtures[$i]->date = $matches[$i]["date"];
			$matchesObject->fixtures[$i]->date = $matches[$i]["date"];
			$matchesObject->fixtures[$i]->matchday = $matches[$i]["game"];
			// Get Name of teams
			$matchesObject->fixtures[$i]->homeTeamName = $name_teams[$matches[$i]["id_localTeam"]];
			$matchesObject->fixtures[$i]->awayTeamName = $name_teams[$matches[$i]["id_visitorTeam"]];
			// Assign a fake result (if score = 1 => 1-0; else if score = X => 1-1, else if score = 2 => 1-2)
			$matchesObject->fixtures[$i]->result = new stdClass();
			$matchesObject->fixtures[$i]->result->goalsHomeTeam = "";
			$matchesObject->fixtures[$i]->result->goalsAwayTeam = "";
			if ($matches[$i]["score"] != "") {
				$matchesObject->fixtures[$i]->result->goalsHomeTeam = 1;
				switch($matches[$i]["score"]) {
					case "1":
						$matchesObject->fixtures[$i]->result->goalsAwayTeam = 0;
						break;
					case "X":
						$matchesObject->fixtures[$i]->result->goalsAwayTeam = 1;
						break;
					case "2":
						$matchesObject->fixtures[$i]->result->goalsAwayTeam = 2;
						break;
				}
			}
		}
	// DB contains no league information => get data online
	} else {
		// Get all leagues for SEASON
		global $api;
		$matchesObject = $api->getFixturesBySeasonID($id_league);
		// For each team returned, insert into DB
		foreach($matchesObject->fixtures as $match) {
			if ($match->homeTeamName == "") continue;	// Alguns cops retorna partits que encara no estan definits
			if ($match->result->goalsHomeTeam == "") $score = "";
			else if ($match->result->goalsHomeTeam - $match->result->goalsAwayTeam > 0) $score = "1";
			else if ($match->result->goalsHomeTeam - $match->result->goalsAwayTeam == 0) $score = "X";
			else $score = "2";
			execQuery("matches", "id, id_league, game, date, id_localTeam, id_visitorTeam, score", getId($match).", ".$id_league.", ".$match->matchday.", '".$match->date."', ".$id_teams[$match->homeTeamName].", ".$id_teams[$match->awayTeamName].", '".$score."'");
		}
		// Enlloc de retornar el que ens ha retornat la web, tornem a demanar els equips a la BBDD per a que ens els retorni en ordre
		$matchesObject = getLeagueMatches($id_league, $name_teams, $id_teams);
	}
	
	return $matchesObject;
}

function getId($object) {
	return substr($object->_links->self->href, strrpos($object->_links->self->href,"/")+1);
}


// MAIN ------------------------------------------------------------------------------------------------------------------------------------------------------------
ini_set('max_execution_time', 0);	// To prevent a query fail due to timeout (which is normal for queries affecting many rows)

$api = new FootballData();

$id_tournament = $_GET["id"];	// id = ID tournament

$id_league = getLeagueFromTournament($id_tournament);

$teams = getLeagueTeams($id_league);

// For each team
foreach($teams as $team) {
	// Build hashmap indexed by team name in order to get its ID quickly
	$id_teams[$team->name] = getId($team);
	// Build hashmap indexed by team id in order to get its name quickly
	$name_teams[getId($team)] = $team->name;
}

// Get all matches for the season
$matches = getLeagueMatches($id_league, $name_teams, $id_teams);

for ($i=0; $i<count($matches->fixtures); $i++) {
	if ($matches->fixtures[$i]->date < date('Y-m-d H:m:s', time()))	{
		break;		
	}
}

$jornada = $matches->fixtures[$i-1]->matchday;
?>
				</div>
				<div class="row" style="padding-left: 65px; margin-top: 50px;"><?php echo "Jornada $jornada"; ?></div>
				<div class="row" style="padding-left: 65px; margin-top: 50px;">
<?php
		
for ($j=$i-1; $j>=0 && $matches->fixtures[$j]->matchday == $jornada; $j--) {
	$homeTeamName = $matches->fixtures[$j]->homeTeamName;
	$awayTeamName = $matches->fixtures[$j]->awayTeamName;

	?>
	            <div class="col-6" style="text-align: center; margin-bottom: 25px;">
                    <div class="row">
                        <div class="col-4 home">
                            <p class="colorAwayHome"><?php echo $homeTeamName; ?></p>
                        </div>
                        <div class="col-3">
                            <button class="btn1x2">1</button>
                            <button class="btn1x2">X</button>
                            <button class="btn1x2">2</button>
                        </div>
                        <div class="col-4 away">
                            <p class="colorAwayHome"><?php echo $awayTeamName; ?></p>
                        </div>
                    </div>
                </div>

	<?php
}

?>


                <div class="row" style="padding-left: 65px; padding-top: 30px;">
                    <div class="col-12"style="text-align: center;">
                        <button class="btnSave">SAVE  FIXTURE</button>
                    </div>
                </div>
                
            </div>
            </div>                    
            
            <div id="allFixture" class="tab-pane fade">
                <div class="row" style="padding-left: 65px; margin-top: 50px;">

<?php

$jornada = 0;
for ($i=count($matches->fixtures)-1; $i>=0; $i--) {
	if ($matches->fixtures[$i]->date >= date('Y-m-d H:m:s', time()))	{
		continue;		
	}
	$homeTeamName = $matches->fixtures[$i]->homeTeamName;
	$awayTeamName = $matches->fixtures[$i]->awayTeamName;
	if ($matches->fixtures[$i]->result->goalsHomeTeam == "") $score = "";
	else if ($matches->fixtures[$i]->result->goalsHomeTeam - $matches->fixtures[$i]->result->goalsAwayTeam > 0) $score = "1";
	else if ($matches->fixtures[$i]->result->goalsHomeTeam - $matches->fixtures[$i]->result->goalsAwayTeam == 0) $score = "X";
	else $score = "2";
	
	if ($matches->fixtures[$i]->matchday != $jornada) {
		$jornada = $matches->fixtures[$i]->matchday;
		?>
		</div>
                    <div class="row" style="padding-left: 65px; margin-top: 50px;">
                        <p style="margin: 0 auto; font-size: 22px;"><?php echo "Jornada $jornada"; ?></p>
                    </div>
                <div class="row" style="padding-left: 65px; margin-top: 50px;">
		<?php
	}
	?>
                    <div class="col-6" style="text-align: center; margin-bottom: 25px;">
                        <div class="row">
                            <div class="col-4 home">
                                <p class="colorAwayHome"><?php echo $homeTeamName; ?></p>
                            </div>
                            <div class="col-3">
                                <button class="btn1x2" <?php if ($score == "1") echo "style='border: 2px green solid';" ?>>1</button>
                                <button class="btn1x2" <?php if ($score == "X") echo "style='border: 2px green solid';" ?>>X</button>
                                <button class="btn1x2" <?php if ($score == "2") echo "style='border: 2px green solid';" ?>>2</button>
                            </div>
                            <div class="col-4 away">
                                <p class="colorAwayHome"><?php echo $awayTeamName; ?></p>
                            </div>
                        </div>
                    </div>
	<?php
}
	?>

                
                
                </div>
                
            </div> 
                
        </div>
        
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="../Bootstrap-3.3.7/js/bootstrap.js" type="text/javascript"></script>
        <script src="../js/all.js" type="text/javascript"></script>
    </body>
    
</html>