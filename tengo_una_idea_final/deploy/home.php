<?php
session_start();
if(!isset($_SESSION["id_user"]) || $_SESSION["id_user"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
	}
?>

<html>
	<head>

        <title>.: HOME :.</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
    </head>
	<body>
        <div class="container-g-home">
            <div class="container-chat">
                <div class="container-g-chat">
                    <div class="wel">
                        <div class="container-img-user">
                            <img src="img/perfil/userAdmon.png" alt="" width>
                        </div>
                        <div id="login" align="left">
                            <p>ID de Cuenta: 
                                <b><?php

                                    echo $_SESSION["id_user"];
                                   
                                    
                                ?></b>
                            .</p> 
                        </div>
                    </div>
                </div>
                <div class="container-chats-ideas">	
                    <button><a href="php/todos.php">Todos los usuarios registrados</a></button>
                </div>
            </div>
            <div class="container-board-home">
                <section>
                    <div class="container container-ideas">
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col-lg">
                                <div class="container-write-idea">
                                    <div class="container-idea-general">
                                        <div class="container-title-idea">
                                            <input type="text" name="" id="" placeholder="Titulo Idea" class="title-idea">
                                            <textarea name="" id="" cols="30" rows="10" class="space-whrite-idea"></textarea>
                                        </div>
                                        <button class="btn btn-plus-idea">
                                            <i class="fas fa-plus-square plus-add-idea"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1">
                                <i class="fas fa-power-off logout-icon"></i>
                                <div class="btn-logout">
                                    <button class="btn-i-logout"><a href="./php/logout.php">Salir</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="container container-post-it">
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col-lg">
                                <div class="box">
                                    <div class="owl-carousel owl-cards owl-theme">
                                        <div class="item item-cards"><h4>1</h4></div>
                                        <div class="item item-cards"><h4>2</h4></div>
                                        <div class="item item-cards"><h4>3</h4></div>
                                        <div class="item item-cards"><h4>4</h4></div>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="owl-carousel owl-cards owl-theme">
                                        <div class="item item-cards"><h4>1</h4></div>
                                        <div class="item item-cards"><h4>2</h4></div>
                                        <div class="item item-cards"><h4>3</h4></div>
                                        <div class="item item-cards"><h4>4</h4></div>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="owl-carousel owl-cards owl-theme">
                                        <div class="item item-cards"><h4>1</h4></div>
                                        <div class="item item-cards"><h4>2</h4></div>
                                        <div class="item item-cards"><h4>3</h4></div>
                                        <div class="item item-cards"><h4>4</h4></div>
                                    </div>
                                </div>
                                <div class="box-links">
                                    <div class="link-i-finish box-links-i">
                                        <div class="i-finish i-id-board">
                                            <a href="" class="ideas-finish">Ideas finalizadas</a>
                                        </div>
                                    </div>
                                    <div class="link-i-dead box-links-i">
                                        <div class="i-dead i-id-board">
                                            <a href="" class="ideas-dead">Ideas muertas</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1"></div>
                        </div>
                    </div>
                </section>
            </div>
        </div> 
    </div>
    <div id="output"></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/owl.carousel.min.js"></script>
  </body>
</html>