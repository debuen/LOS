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
        <link href="information.css" rel="stylesheet" type="text/css"/>
        
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
                        <a href="../Information/index.php" class="activeMenu">
                            <i class="fa fa-info"></i>
                            Information
                        </a>
                    </li>
                </ul>
        </nav>
        
        <div class="container-fluid" style="width: 100%; height: 100%; font-size: 15px; padding-top: 100px;">
            <ul class="nav nav-tabs nav-justified" style="padding-left: 65px; display: block;">
                <li class="active nav1"><a data-toggle="tab" href="#rules" style="background-color: #cccccc;">Rules</a></li>
                <li class="nav2"><a data-toggle="tab" href="#faq" style="background-color: #cccccc;">FAQ</a></li>
            </ul>
            
            <div class="tab-content" style="margin-left: 65px;">
            
                <div id="rules" class="tab-pane fade in active">
                    <div style="margin-bottom: 50px;">
                        <div>
                            <i class="fa fa-info-circle fa-2x generalIcon"></i>
                            <h1 class="generalTitle">GENERAL RULES</h1>
                        </div>
                        <div class="tagP">
                            <p><b class="clr">1.</b> Each user can participate in a maximum of 4 leagues.</p>
                            <p><b class="clr">2.</b> Every league between users will be only of a competition (for example Premier League).</p>
                        </div>
                    </div>
                        
                    
                    <div>
                        <i class="glyphicon glyphicon-stats generalIcon"></i>
                        <h1 class="generalTitle">MARK RULES</h1>
                    </div>
                    <div class="tagP">
                        <p><b class="clr">1.</b> The winner will be who has the highest number of points at the end of the season. In case of a tie, the user who scored more in the last day will be named champion.</p>
                        <p><b class="clr">2.</b> Before the start of each game the system will record the prediction made, once the match started, the forecast can not be modified.</p>
                        <p><b class="clr">3.</b> Only predicted matches can receive points.</p>
                        <p><b class="clr">4.</b> For each successful game the user will receive 5 points.</p>
                        <p><b class="clr">5.</b> If the user hits more than 60% of the matches of the day, 10 points will be awarded to the total score obtained. And if the success is 100%, 25 points will be added.</p>
                    </div>
                </div>

                <div id="faq" class="tab-pane fade">
                    <div class="panel-group" id="desplegable">
                        <div class="panel panel-default">
                            
                            <div class="panel-heading"> <h4 class="panel-title">
                                <a href="#panel1" data-toggle="collapse" data-parent="#desplegable">
                                    1.   ¿Cuántas ligas puedo tener en una misma cuenta de usuario?</a></h4>
                            </div>
                            <div id="panel1" class="panel-collapse collapse">
                                <ul id="faq1" class="panel-body"></ul>
                            </div>
                            </br>
                            
                            <div class="panel-heading"> <h4 class="panel-title">
                                <a href="#panel2" data-toggle="collapse" data-parent="#desplegable">
                                    2.   ¿Hay limite de usuarios en una comunidad?</a></h4>
                            </div>
                            <div id="panel2" class="panel-collapse collapse">
                                <ul id="faq2" class="panel-body"></ul>
                            </div>
                            </br>

                            <div class="panel-heading"> <h4 class="panel-title">
                                <a href="#panel3" data-toggle="collapse" data-parent="#desplegable">
                                    3.   ¿Como puedo salir de una liga?</a></h4>
                            </div>
                            <div id="panel3" class="panel-collapse collapse">
                                <ul id="faq3" class="panel-body"></ul>
                            </div>
                            </br>
                            
                            <div class="panel-heading"> <h4 class="panel-title">
                                <a href="#panel4" data-toggle="collapse" data-parent="#desplegable">
                                    4.   He perdido mi contraseña, ¿cómo puedo recuperarla?</a></h4>
                            </div>
                            <div id="panel4" class="panel-collapse collapse">
                                <ul id="faq4" class="panel-body"></ul>
                            </div>
                            </br>
                            
                            <div class="panel-heading"> <h4 class="panel-title">
                                <a href="#panel5" data-toggle="collapse" data-parent="#desplegable">
                                    5.   ¿Cuándo recibo la puntuación de la jornada?</a></h4>
                            </div>
                            <div id="panel5" class="panel-collapse collapse">
                                <ul id="faq5" class="panel-body"></ul>
                            </div>
                            </br>
                            
                            <div class="panel-heading"> <h4 class="panel-title">
                                <a href="#panel6" data-toggle="collapse" data-parent="#desplegable">
                                    6.   ¿Puedo mofificar el pronostico una vez empezado el partido?</a></h4>
                            </div>
                            <div id="panel6" class="panel-collapse collapse">
                                <ul id="faq6" class="panel-body"></ul>
                            </div>
                            </br>
                            
                            <div class="panel-heading"> <h4 class="panel-title">
                                <a href="#panel7" data-toggle="collapse" data-parent="#desplegable">
                                    7.   ¿Que pasa si se me ha olvidado pronosticar algún partido?</a></h4>
                            </div>
                            <div id="panel7" class="panel-collapse collapse">
                                <ul id="faq7" class="panel-body"></ul>
                            </div>
                            </br>
                            
                            <div class="panel-heading"> <h4 class="panel-title">
                                <a href="#panel8" data-toggle="collapse" data-parent="#desplegable">
                                    8.   ¿Cómo puedo saber si un jugador tiene dos cuentas en una misma liga?</a></h4>
                            </div>
                            <div id="panel8" class="panel-collapse collapse">
                                <ul id="faq8" class="panel-body"></ul>
                            </div>
                            </br>
                            
                            <div class="panel-heading"> <h4 class="panel-title">
                                <a href="#panel9" data-toggle="collapse" data-parent="#desplegable">
                                    9.   ¿Cuanto tiempo puede estar inactiva una liga?</a></h4>
                            </div>
                            <div id="panel9" class="panel-collapse collapse">
                                <ul id="faq9" class="panel-body"></ul>
                            </div>
                            </br>
                        </div>

                    </div>
                </div>
                
            </div> 
                
        </div>
        
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="../Bootstrap-3.3.7/js/bootstrap.js" type="text/javascript"></script>
        <script src="../js/all.js" type="text/javascript"></script>
    </body>
    
</html>


