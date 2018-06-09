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
        <link href="join.css" rel="stylesheet" type="text/css"/>
        <link href="../Home/home.css" rel="stylesheet" type="text/css"/>
        
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
        
    </head>
    <body>
        <div style="text-align: center; margin-top: 50px;">
            <img src="../img/logo blanc.png" alt="" style="width: 20%;"/>
        </div>
        <div style="margin-top: 80px;"> 
            <div style="display: inline-block; width: 50%; text-align: right;">
                <div id="create" class="box" style="float: right; margin-right: 40px;" data-toggle="modal" data-target="#myModal2">
                    <i class="fas fa-plus fa-7x" style="color: white; margin-top: 75px;"></i>
                    <p style="color: white; margin-top: 15px; font-size: 20px;">CREATE A LEAGUE</p>
                </div>
            </div>
            <div style="display: inline-block; width: 49%; text-align: left;">
                <div id="join" class="box" style="float:left; margin-left: 40px;" data-toggle="modal" data-target="#myModal">
                    <i class="fas fa-sign-in-alt fa-7x" style="color: white; margin-top: 75px;"></i>
                    <p style="color: white; margin-top: 15px; font-size: 20px;">JOIN A LEAGUE</p>
                </div>
            </div>
        </div>
        
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog" style="margin-top: 175px;">

              <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title"><img src="../img/Fab_icon.png" style="width: 40px; margin-right: 15px;"/>LEAGUE SEARCHER</h4>
                    <button type="button" class="close" data-dismiss="modal" id="btnClose">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="ui-widget">
                        <div class="input-group" style="font-size: 15px;">
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
        
        <div id="myModal2" class="modal fade" role="dialog">
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
        
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="../Bootstrap-3.3.7/js/bootstrap.js" type="text/javascript"></script>
        <script src="../js/all.js" type="text/javascript"></script>
    </body>
</html>    