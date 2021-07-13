<?php
include_once("config.php");
$con = mysqli_connect(HOST, USER, PWD, DATABASE);
$con->set_charset("utf8");
function top($page = HOME)
{
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Site Metas -->
    <title>Olha a Bola</title>
    <link rel="icon" type="image/png" href="images/favicon.ico"/>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Site Icons -->
    <link rel="shortcut icon" href="" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="css/colors.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <!-- font family -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">
    <!-- end font family -->
    <link rel="stylesheet" href="css/3dslider.css"/>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <script src="js/3dslider.js"></script>
    </head>
    <body class="game_info" data-spy="scroll" data-target=".header">
    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="images/loading-img.gif" alt="">
    </div>
    <!-- END LOADER -->
    <section id="top">
        <header>
            <div class="container">
                <div class="header-top">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="full">
                                <div class="logo">
                                    <a href="index.php"><img src="images/icon1.png" alt="#"/></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="right_top_section">
                                <!-- social icon -->
                                <ul class="social-icons pull-left">
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                                <!-- end social icon -->
                                <!-- button section -->
                                <ul class="login">
                                    <li class="login-modal">
                                        <a href="#" class="login"><i class="fa fa-user"></i>Login</a>
                                    </li>
                                    <li>
                                        <div class="cart-option">
                                            <a href="#"><i class="fa fa-shopping-cart"></i>Register</a>
                                        </div>
                                    </li>
                                </ul>
                                <!-- end button section -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="full">
                                <div class="main-menu-section">
                                    <div class="menu">
                                        <nav class="navbar navbar-inverse">
                                            <div class="navbar-header">
                                                <button class="navbar-toggle" type="button" data-toggle="collapse"
                                                        data-target=".js-navbar-collapse">
                                                    <span class="sr-only">Toggle navigation</span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>
                                                <a class="navbar-brand" href="#">Menu</a>
                                            </div>
                                            <div class="collapse navbar-collapse js-navbar-collapse">
                                                <ul class="nav navbar-nav">
                                                    <li class="active"><a href="index.php">Home</a></li>
                                                    <li><a href="classificação.php">Classificação</a></li>
                                                    <li><a href="equipas.php">Equipas</a></li>
                                                    <li><a href="noticias.php">Noticias</a></li>

                                                    <li class="dropdown mega-dropdown">
                                                        <!--   <a href="match" class="dropdown-toggle" data-toggle="dropdown">Match<span
                                                                       class="caret"></span></a>-->
                                                        <ul class="dropdown-menu mega-dropdown-menu">
                                                            <!--    <li class="col-sm-8">
                                                                    <ul>
                                                                        <li class="dropdown-header">Men Collection</li>
                                                                        <div id="menCollection" class="carousel slide"
                                                                             data-ride="carousel">
                                                                            <div class="carousel-inner">
                                                                                <div class="item active">
                                                                                    <div class="banner-for-match"><a
                                                                                                href="#"><img
                                                                                                    class="img-responsive"
                                                                                                    src="images/match-banner1.jpg"
                                                                                                    alt="#"/></a></div>
                                                                                </div>
                                                                                 End Item
                                                                              <div class="item">
                                                                                  <div class="banner-for-match"><a
                                                                                              href="#"><img
                                                                                                  class="img-responsive"
                                                                                                  src="images/match-banner1.jpg"
                                                                                                  alt="#"/></a></div>
                                                                              </div>

                                                                              <div class="item">
                                                                                  <div class="banner-for-match"><a
                                                                                              href="#"><img
                                                                                                  class="img-responsive"
                                                                                                  src="images/match-banner1.jpg"
                                                                                                  alt="#"/></a></div>
                                                                              </div>

                                                                          </div>

                                                                          <a class="left carousel-control"
                                                                             href="#menCollection" role="button"
                                                                             data-slide="prev">
                                                                              <span class="glyphicon glyphicon-chevron-left"
                                                                                    aria-hidden="true"></span>
                                                                              <span class="sr-only">Previous</span>
                                                                          </a>
                                                                          <a class="right carousel-control"
                                                                             href="#menCollection" role="button"
                                                                             data-slide="next">
                                                                              <span class="glyphicon glyphicon-chevron-right"
                                                                                    aria-hidden="true"></span>
                                                                              <span class="sr-only">Next</span>
                                                                          </a>
                                                                      </div>

                                                                  </ul>
                                                              </li>

                                                              <li class="col-sm-4">
                                                                  <ul class="menu-inner">
                                                                      <li class="dropdown-header">Next Matchs</li>
                                                                      <li><a href="#">Contrary vs classical</a></li>
                                                                      <li><a href="#">Discovered vs undoubtable</a></li>
                                                                      <li><a href="#">Contrary vs classical</a></li>
                                                                      <li><a href="#">Discovered vs undoubtable</a></li>
                                                                      <li><a href="#">Contrary vs classical</a></li>
                                                                      <li><a href="#">Discovered vs undoubtable</a></li>
                                                                      <li><a href="#">Contrary vs classical</a></li>
                                                                      <li><a href="#">Discovered vs undoubtable</a></li>
                                                                  </ul>
                                                              </li>
                                                              -->
                                                        </ul>
                                                    </li>
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="contact.html">Contact</a></li>
                                                </ul>
                                            </div>
                                            <!-- /.nav-collapse -->
                                        </nav>
                                        <!--
                                        <div class="search-bar">
                                            <div id="imaginary_container">
                                                <div class="input-group stylish-input-group">
                                                    <input type="text" class="form-control" placeholder="Search">
                                                    <span class="input-group-addon">
                                          <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                          </span>
                                                </div>
                                            </div>
                                        </div>
                                        -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <?php
        if ($page == HOME){
        ?>
        <div class="full-slider">
            <div id="carousel-example-generic" class="carousel slide">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <!-- First slide -->
                    <div class="item active deepskyblue" data-ride="carousel" data-interval="5000">
                        <div class="carousel-caption">
                            <div class="col-lg-2 col-md-7 col-sm-12 col-xs-12"></div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="slider-contant" data-animation="animated fadeInRight">

                                    <h3>“Se achas que já és <br> perfeito, <span class="color-yellow">então<br>nunca vais ser”</span><br><span
                                                style="color: #000000">- Cristiano Ronaldo</span></h3>
                                    <!-- <p>If you use this site regularly and would like to help keep the site on the Internet,<br>
                                         please consider donating a small sum to help pay..
                                     </p>
                                      <button class="btn btn-primary btn-lg">Read More</button>
                                      -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.item -->
                    <!-- Second slide -->
                    <div class="item skyblue" data-ride="carousel" data-interval="5000">
                        <div class="carousel-caption">
                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="slider-contant" data-animation="animated fadeInRight">
                                    <h3>If you Don?t Practice<br>You <span
                                                class="color-yellow">Don?t Derserve</span><br>to win!</h3>
                                    <p>You can make a case for several potential winners of<br>the expanded European
                                        Championships.</p>
                                    <button class="btn btn-primary btn-lg">Button</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.item -->
                    <!-- Third slide -->
                    <div class="item darkerskyblue" data-ride="carousel" data-interval="5000">
                        <div class="carousel-caption">
                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="slider-contant" data-animation="animated fadeInRight">
                                    <h3>If you Don?t Practice<br>You <span
                                                class="color-yellow">Don?t Derserve</span><br>to win!</h3>
                                    <p>You can make a case for several potential winners of<br>the expanded European
                                        Championships.</p>
                                    <button class="btn btn-primary btn-lg">Button</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.item -->
                </div>
                <!-- /.carousel-inner -->
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- /.carousel -->
        </div>
    </section>
<?php
}
?>

<?php
if ($page == TEAMS){
?>
    <div class="inner-page-banner">
        <div class="container">
        </div>
    </div>
    <div class="inner-information-text">
        <div class="container">
            <h3>Equipas</h3>
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Equipas</li>
            </ul>
        </div>
    </div>
    </section>
<?php
}
?>
<?php
if ($page == NEWS){
?>
    <div class="inner-page-banner">
        <div class="container">
        </div>
    </div>
    <div class="inner-information-text">
        <div class="container">
            <h3>Noticias</h3>
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Noticias</li>
            </ul>
        </div>
    </div>
    </section>
<?php
}
?>

<?php
if ($page == CLASSIFICACAO){
?>
    <div class="inner-page-banner">
        <div class="container">
        </div>
    </div>
    </section>
    <?php
}
    ?>

    <?php
}

function bottom($menu = HOME)
{
    ?>


    <footer id="footer" class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="full">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.php"><img src="images/icon1.png" alt="#"/></a>
                            </div>
                            <p>Bought a pool, can't even swim</p>
                            <ul class="social-icons style-4 pull-left">
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="full">
                        <div class="footer-widget">
                            <h3>Menu</h3>
                            <ul class="footer-menu">
                                <li><a href="classificacao.html">Classificação</a></li>
                                <li><a href="equipas.php">Equipas</a></li>
                                <li><a href="noticias.php">Noticias</a></li>
                                <li><a href="jogadores.php">Jogadores</a></li>
                                <li><a href="contactos.php">Contactos</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="full">
                        <div class="footer-widget">
                            <h3>Contacte-nos</h3>
                            <ul class="address-list">
                                <li><i class="fa fa-map-marker"></i>Rua do Alfredo, nº43, lote 5, Leria, Africa
                                </li>
                                <li><i class="fa fa-phone"></i>911111112</li>
                                <li><i style="font-size:20px;top:5px;" class="fa fa-envelope"></i> exemplo@gmail.com
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="full">
                        <div class="contact-footer">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d120615.72236587871!2d73.07890527988283!3d19.140910987164396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1527759905404"
                                    width="600" height="350" frameborder="0" style=" border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p>Copyright © 2018 Distributed by <a href="https://themewagon.com/" target="_blank">ThemeWagon</a></p>
            </div>
        </div>
    </footer>
    <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <script src="js/common.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script>
        $('document').ready(function () {
            <?php

            if ($menu == NOTICIAS){
            ?>
            $('#search').keyup(function () {
                fillTableNoticia(this.value);
            });
            fillTableNoticia();
            <?php
            }
            ?>
        })
    </script>
    </body>
    </html>

    <?php
}

function top_admin($page = HOME)
{
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Site Metas -->
    <title>Olha a Bola</title>
    <link rel="icon" type="image/png" href="../images/favicon.ico"/>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Site Icons -->
    <link rel="shortcut icon" href="" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="../style.css">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="../css/colors.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="../css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/custom.css">
    <!-- font family -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">
    <!-- end font family -->
    <link rel="stylesheet" href="../css/3dslider.css"/>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <script src="../js/3dslider.js"></script>
    </head>
    <body class="game_info" data-spy="scroll" data-target=".header">
    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="../images/loading-img.gif" alt="">
    </div>
    <!-- END LOADER -->
    <section id="top">
        <header>
            <div class="container">
                <div class="header-top">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="full">
                                <div class="logo">
                                    <a href="index.php"><img src="../images/icon1.png" alt="#"/></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="right_top_section">
                                <!-- social icon -->
                                <ul class="social-icons pull-left">
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                                <!-- end social icon -->
                                <!-- button section -->
                                <ul class="login">
                                    <li class="login-modal">
                                        <a href="#" class="login"><i class="fa fa-user"></i>Login</a>
                                    </li>
                                    <li>
                                        <div class="cart-option">
                                            <a href="#"><i class="fa fa-shopping-cart"></i>Register</a>
                                        </div>
                                    </li>
                                </ul>
                                <!-- end button section -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="full">
                                <div class="main-menu-section">
                                    <div class="menu">
                                        <nav class="navbar navbar-inverse">
                                            <div class="navbar-header">
                                                <button class="navbar-toggle" type="button" data-toggle="collapse"
                                                        data-target=".js-navbar-collapse">
                                                    <span class="sr-only">Toggle navigation</span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>
                                                <a class="navbar-brand" href="#">Menu</a>
                                            </div>
                                            <div class="collapse navbar-collapse js-navbar-collapse">
                                                <ul class="nav navbar-nav">
                                                    <li class="active"><a href="index.php">Home</a></li>
                                                    <li><a href="classificação.php">Classificação</a></li>
                                                    <li><a href="equipas.php">Equipas</a></li>
                                                    <li><a href="noticias.php">Noticias</a></li>

                                                    <li class="dropdown mega-dropdown">
                                                        <!--   <a href="match" class="dropdown-toggle" data-toggle="dropdown">Match<span
                                                                       class="caret"></span></a>-->
                                                        <ul class="dropdown-menu mega-dropdown-menu">
                                                            <!--    <li class="col-sm-8">
                                                                    <ul>
                                                                        <li class="dropdown-header">Men Collection</li>
                                                                        <div id="menCollection" class="carousel slide"
                                                                             data-ride="carousel">
                                                                            <div class="carousel-inner">
                                                                                <div class="item active">
                                                                                    <div class="banner-for-match"><a
                                                                                                href="#"><img
                                                                                                    class="img-responsive"
                                                                                                    src="images/match-banner1.jpg"
                                                                                                    alt="#"/></a></div>
                                                                                </div>
                                                                                 End Item
                                                                              <div class="item">
                                                                                  <div class="banner-for-match"><a
                                                                                              href="#"><img
                                                                                                  class="img-responsive"
                                                                                                  src="images/match-banner1.jpg"
                                                                                                  alt="#"/></a></div>
                                                                              </div>

                                                                              <div class="item">
                                                                                  <div class="banner-for-match"><a
                                                                                              href="#"><img
                                                                                                  class="img-responsive"
                                                                                                  src="images/match-banner1.jpg"
                                                                                                  alt="#"/></a></div>
                                                                              </div>

                                                                          </div>

                                                                          <a class="left carousel-control"
                                                                             href="#menCollection" role="button"
                                                                             data-slide="prev">
                                                                              <span class="glyphicon glyphicon-chevron-left"
                                                                                    aria-hidden="true"></span>
                                                                              <span class="sr-only">Previous</span>
                                                                          </a>
                                                                          <a class="right carousel-control"
                                                                             href="#menCollection" role="button"
                                                                             data-slide="next">
                                                                              <span class="glyphicon glyphicon-chevron-right"
                                                                                    aria-hidden="true"></span>
                                                                              <span class="sr-only">Next</span>
                                                                          </a>
                                                                      </div>

                                                                  </ul>
                                                              </li>

                                                              <li class="col-sm-4">
                                                                  <ul class="menu-inner">
                                                                      <li class="dropdown-header">Next Matchs</li>
                                                                      <li><a href="#">Contrary vs classical</a></li>
                                                                      <li><a href="#">Discovered vs undoubtable</a></li>
                                                                      <li><a href="#">Contrary vs classical</a></li>
                                                                      <li><a href="#">Discovered vs undoubtable</a></li>
                                                                      <li><a href="#">Contrary vs classical</a></li>
                                                                      <li><a href="#">Discovered vs undoubtable</a></li>
                                                                      <li><a href="#">Contrary vs classical</a></li>
                                                                      <li><a href="#">Discovered vs undoubtable</a></li>
                                                                  </ul>
                                                              </li>
                                                              -->
                                                        </ul>
                                                    </li>
                                                    <li><a href="jogadores.php">Jogadores</a></li>
                                                    <li><a href="posicoes.php">Posições</a></li>
                                                </ul>
                                            </div>
                                            <!-- /.nav-collapse -->
                                        </nav>
                                        <!--
                                        <div class="search-bar">
                                            <div id="imaginary_container">
                                                <div class="input-group stylish-input-group">
                                                    <input type="text" class="form-control" placeholder="Search">
                                                    <span class="input-group-addon">
                                          <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                          </span>
                                                </div>
                                            </div>
                                        </div>
                                        -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <?php
        if ($page == HOME){
        ?>
        <div class="full-slider">
            <div id="carousel-example-generic" class="carousel slide">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <!-- First slide -->
                    <div class="item active deepskyblue" data-ride="carousel" data-interval="5000">
                        <div class="carousel-caption">
                            <div class="col-lg-2 col-md-7 col-sm-12 col-xs-12"></div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="slider-contant" data-animation="animated fadeInRight">

                                    <h3>“Se achas que já és <br> perfeito, <span class="color-yellow">então<br>nunca vais ser”</span><br><span
                                                style="color: #000000">- Cristiano Ronaldo</span></h3>
                                    <!-- <p>If you use this site regularly and would like to help keep the site on the Internet,<br>
                                         please consider donating a small sum to help pay..
                                     </p>
                                      <button class="btn btn-primary btn-lg">Read More</button>
                                      -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.item -->
                    <!-- Second slide -->
                    <div class="item skyblue" data-ride="carousel" data-interval="5000">
                        <div class="carousel-caption">
                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="slider-contant" data-animation="animated fadeInRight">
                                    <h3>If you Don?t Practice<br>You <span
                                                class="color-yellow">Don?t Derserve</span><br>to win!</h3>
                                    <p>You can make a case for several potential winners of<br>the expanded European
                                        Championships.</p>
                                    <button class="btn btn-primary btn-lg">Button</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.item -->
                    <!-- Third slide -->
                    <div class="item darkerskyblue" data-ride="carousel" data-interval="5000">
                        <div class="carousel-caption">
                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="slider-contant" data-animation="animated fadeInRight">
                                    <h3>If you Don?t Practice<br>You <span
                                                class="color-yellow">Don?t Derserve</span><br>to win!</h3>
                                    <p>You can make a case for several potential winners of<br>the expanded European
                                        Championships.</p>
                                    <button class="btn btn-primary btn-lg">Button</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.item -->
                </div>
                <!-- /.carousel-inner -->
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- /.carousel -->
        </div>
    </section>
<?php
}
?>

<?php
if ($page == TEAMS){
?>
    <div class="inner-page-banner">
        <div class="container">
        </div>
    </div>
    <div class="inner-information-text">
        <div class="container">
            <h3>Equipas</h3>
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Equipas</li>
            </ul>
        </div>
    </div>
    </section>
<?php
}
?>
<?php
if ($page == NEWS){
?>
    <div class="inner-page-banner">
        <div class="container">
        </div>
    </div>
    <div class="inner-information-text">
        <div class="container">
            <h3>Noticias</h3>
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Noticias</li>
            </ul>
        </div>
    </div>
    </section>
<?php
}
?>
<?php
if ($page == TRAINER){
?>
    <div class="inner-page-banner">
        <div class="container">
        </div>
    </div>
    <div class="inner-information-text">
        <div class="container">
            <h3>Treinadores</h3>
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li><a href="equipas.php">Equipas</a></li>
                <li class="active">Treinadores</li>
            </ul>
        </div>
    </div>
    </section>
<?php
}
?>
<?php
if ($page == PLAYERS){
?>
    <div class="inner-page-banner">
        <div class="container">
        </div>
    </div>
    <div class="inner-information-text">
        <div class="container">
            <h3>Jogadores</h3>
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Jogadores</li>
            </ul>
        </div>
    </div>
    </section>
<?php
}
?>
<?php
if ($page == COUNTRYS){
?>
    <div class="inner-page-banner">
        <div class="container">
        </div>
    </div>
    <div class="inner-information-text">
        <div class="container">
            <h3>Paises</h3>
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li><a href="jogadores.php">Jogadores</a></li>
                <li class="active">Paises</li>
            </ul>
        </div>
    </div>
    </section>
<?php
}
?>
<?php
if ($page == SQUAD){
?>
    <div class="inner-page-banner">
        <div class="container">
        </div>
    </div>
    <div class="inner-information-text">
        <div class="container">
            <h3>Plantel</h3>
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li><a href="equipas.php">Equipas</a></li>
                <li class="active">Plantel</li>
            </ul>
        </div>
    </div>
    </section>
<?php
}
?>
<?php
if ($page == POSITIONS){
?>
    <div class="inner-page-banner">
        <div class="container">
        </div>
    </div>
    <div class="inner-information-text">
        <div class="container">
            <h3>Plantel</h3>
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Posicoes</li>
            </ul>
        </div>
    </div>
    </section>
<?php
}
?>

<?php
if ($page == CLASSIFICACAO){
?>
    <div class="inner-page-banner">
        <div class="container">
        </div>
    </div>
    </section>
    <?php
}
    ?>

    <?php
}

function bottom_admin($menu = HOME)
{
    ?>


    <footer id="footer" class="footer">

        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <!--
                <div class="col-md-4">
                    <div class="full">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="#"><img src="../images/footer-logo.png" alt="#"/></a>
                            </div>
                            <p>Most of our events have hard and easy route choices as we are always keen to encourage
                                new riders.</p>
                            <ul class="social-icons style-4 pull-left">
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                -->
                <div class="col-md-4" align="center">
                    <div class="full">
                        <div class="footer-widget">
                            <h3>Menu</h3>
                            <ul class="footer-menu">
                                <li><a href="classificacao.html">Classificação</a></li>
                                <li><a href="equipas.php">Equipas</a></li>
                                <li><a href="noticias.php">Noticias</a></li>
                                <li><a href="jogadores.php">Jogadores</a></li>
                                <li><a href="posicoes.php">Posições</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--
                        <div class="col-md-3">
                            <div class="full">
                                <div class="footer-widget">
                                    <h3>Contact us</h3>
                                    <ul class="address-list">
                                        <li><i class="fa fa-map-marker"></i> Lorem Ipsum is simply dummy text of the printing..
                                        </li>
                                        <li><i class="fa fa-phone"></i> 123 456 7890</li>
                                        <li><i style="font-size:20px;top:5px;" class="fa fa-envelope"></i> demo@gmail.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="full">
                                <div class="contact-footer">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d120615.72236587871!2d73.07890527988283!3d19.140910987164396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1527759905404"
                                            width="600" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    -->
                <div class="footer-bottom">
                    <div class="container">
                        <p>Copyright © 2018 Distributed by <a href="https://themewagon.com/"
                                                              target="_blank">ThemeWagon</a></p>
                    </div>
                </div>
    </footer>
    <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
    <!-- ALL JS FILES -->
    <script src="../js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="../js/custom.js"></script>
    <script src="../js/admin.js"></script>
    <script>
        $('document').ready(function () {

            <?php
            if ($menu == NOTICIAS){
            ?>
            $('#search').keyup(function () {
                fillTableNoticias(this.value);
            });
            fillTableNoticias();
            <?php
            }
            ?>
            <?php
            if ($menu == EQUIPAS){
            ?>
            $('#search').keyup(function () {
                fillTableEquipas(this.value);
            });
            fillTableEquipas();
            <?php
            }
            ?>
            <?php
            if ($menu == TREINADORES){
            ?>
            $('#search').keyup(function () {
                fillTableTreinadores(this.value);
            });
            fillTableTreinadores();
            <?php
            }
            ?>
            <?php
            if ($menu == JOGADORES){
            ?>
            $('#search').keyup(function () {
                fillTableJogadores(this.value);
            });
            fillTableJogadores();
            <?php
            }
            ?>

            <?php
            if ($menu == PAISES){
            ?>
            $('#search').keyup(function () {
                fillTablePaises(this.value);
            });
            fillTablePaises();
            <?php
            }
            ?>
            <?php
            if ($menu == PLANTEL){
            ?>
            $('#search').keyup(function () {
                fillTablePlantel(this.value, $('#idPlantel').val());
            });
            fillTablePlantel('', $('#idPlantel').val());
            <?php
            }
            ?>
            <?php
            if ($menu == POSICOES){
            ?>
            $('#search').keyup(function () {
                fillTablePosicao(this.value);
            });
            fillTablePosicao();
            <?php
            }
            ?>

        })
    </script>
    </body>
    </html>

    <?php
}

?>