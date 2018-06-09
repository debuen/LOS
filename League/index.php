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
        <link href="league.css" rel="stylesheet" type="text/css"/>
        
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
                        <a href="../League/index.php" class="activeMenu">
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
                        <a href="../Settings/index.php"  >
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
            
                <div class="row" style="padding-left: 65px; display: block; text-align: center; margin-top: 50px; text-transform: uppercase; font-size: 20px;">
                    <p>Tigers league</p>
                </div>
                
                <table style="margin: 0 auto; text-align: center; margin-top: 10px; margin-bottom: 50px;">
                    <thead>
                        <tr>
                            <th style="width: 1px;"></th>
                            <th style="width: 1px;"></th>
                            <th style="width: 1px;"></th>
                            <th style="width: 80px;">Points</th>
                            <th style="width: 80px;">Join Date</th>
                            
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><img src="../img/usuario.jpg" alt="" style="width: 35px; border-radius: 100%;"/></td>
                            <td>Manchester City</td>
                            <td>38</td>
                            <td>32</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><img src="../img/usuario.jpg" alt="" style="width: 35px; border-radius: 100%;"/></td>
                            <td>Manchester City</td>
                            <td>38</td>
                            <td>32</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><img src="../img/usuario.jpg" alt="" style="width: 35px; border-radius: 100%;"/></td>
                            <td>Manchester City</td>
                            <td>38</td>
                            <td>32</td>
                        </tr><tr>
                            <td>4</td>
                            <td><img src="../img/usuario.jpg" alt="" style="width: 35px; border-radius: 100%;"/></td>
                            <td>Manchester City</td>
                            <td>38</td>
                            <td>32</td>
                        </tr>                        
                    </thead>
                </table>
                
            </div>
            
            <div id="allFixture" class="tab-pane fade">
                
            </div>
                
            </div> 
                
        </div>
        
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="../Bootstrap-3.3.7/js/bootstrap.js" type="text/javascript"></script>
        <script src="../js/all.js" type="text/javascript"></script>
    </body>
    
</html>


