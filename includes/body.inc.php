<?php
include_once("config.inc.php");
$con = mysqli_connect(HOST, USER, PWD, DATABASE);
$con->set_charset("utf8");
function top()
{
    ?>
    <!--
    author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Olha a Bola!!</title>
        <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
        <!-- custom-theme -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="keywords" content="Goal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
        <script type="application/x-javascript"> addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            } </script>
        <!-- //custom-theme -->
        <script src="https://kit.fontawesome.com/90ff2770af.js" crossorigin="anonymous"></script>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/JiSlider.css" rel="stylesheet">
        <!-- light-box -->
        <link rel="stylesheet" href="css/lightbox.css">
        <!-- //light-box -->

        <!-- Owl-carousel-CSS -->
        <link href="css/owl.carousel.css" rel="stylesheet">

        <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
        <!-- font-awesome-icons -->
        <link href="css/font-awesome.css" rel="stylesheet">
        <!-- //font-awesome-icons -->
        <link href="//fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
              rel='stylesheet' type='text/css'>

        <link href="css/common.css" rel="stylesheet">
        <link href="css/plantel.css" rel="stylesheet">
    </head>

    <body>
    <!-- banner -->
    <div class="main_section_agile">

        <div class="agileits_w3layouts_banner_nav">
            <nav class="navbar navbar-default">
                <div class="navbar-header navbar-left">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h3><a class="navbar-brand" href="index.php">OLHA A B<i class="fas fa-futbol-o"
                                                                            aria-hidden="true"></i>LA</a></h3>

                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <nav class="menu--iris">
                        <ul class="nav navbar-nav menu__list">
                            <li class="menu__item"><a href="index.php">Home</a></li>
                            <li class="menu__item"><a href="classificacao.php">Classificação</a></li>
                            <li class="menu__item"><a href="noticias.php">Noticias</a></li>
                            <li class="menu__item"><a href="clubes.php">Clubes</a></li>

                            <li class="menu__item"><a href="login.php">Registar/Entrar</a></li>
                        </ul>
                    </nav>
                </div>
            </nav>
        </div>
    </div>

    <?php
}

?>

<?php
function bot()
{
    ?>
    <div class="clearfix"></div>
    <!-- /contact bottom -->
    <!-- Footer Section -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 w3-footer-nav">
                    <div class="links">
                        <a href="index.php">Home</a>
                        <a href="classificacao.php">Classificação</a>
                        <a href="noticias.php">Noticias</a>
                        <a href="clubes.php">Clubes</a>
                        <a href="login.php">Registar/Entrar</a>
                    </div>
                </div>
                <div class="col-md-6 w3-footer-copy">
                    <div class="copyright">
                        <p>&copy; 2017 Goal. All Rights Reserved | Design by <a href="http://w3layouts.com/">
                                W3layouts </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Footer Section -->

    <!-- start-smoth-scrolling -->
    <!-- js -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <script src="js/JiSlider.js"></script>
    <script>
        $(window).load(function () {
            $('#JiSlider').JiSlider({color: '#fff', start: 1, reverse: false}).addClass('ff')
        })
    </script>

    <!-- //footer -->
    <!-- stats -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();
    </script>
    <!-- //stats -->
    <!-- Custom-JavaScript-File-Links -->
    <script type="text/javascript" src="js/moment.js"></script>
    <script type="text/javascript" src="js/moment-timezone-with-data.js"></script>
    <script type="text/javascript" src="js/timer.js"></script>
    <!-- //Custom-JavaScript-File-Links -->

    <!-- requried-jsfiles-for owl -->
    <script src="js/owl.carousel.js"></script>
    <script>
        $(document).ready(function () {
            $("#owl-demo2").owlCarousel({
                items: 1,
                lazyLoad: false,
                autoPlay: true,
                navigation: false,
                navigationText: false,
                pagination: true,
            });
        });
    </script>
    <!-- //requried-jsfiles-for owl -->
    <script src="js/index.js"></script>
    <script src="js/scrolling-nav.js"></script>

    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <!-- for bootstrap working -->
    <script src="js/bootstrap.js"></script>
    <!-- //for bootstrap working -->
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function () {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
                };
            */

            $().UItoTop({easingType: 'easeOutQuart'});

        });
    </script>
    <!-- //here ends scrolling icon -->
    </body>
    </html>

    <?php
}

?>
<?php
function top_login()
{
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <!--===============================================================================================-->
        <head>
            <title>Olha a Bola!!</title>
            <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
            <!-- custom-theme -->
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
            <meta name="keywords" content="Goal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
        Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
            <script type="application/x-javascript"> addEventListener("load", function () {
                    setTimeout(hideURLbar, 0);
                }, false);

                function hideURLbar() {
                    window.scrollTo(0, 1);
                } </script>
            <!-- //custom-theme -->
            <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
            <link href="css/JiSlider.css" rel="stylesheet">
            <!-- light-box -->
            <link rel="stylesheet" href="css/lightbox.css">
            <!-- //light-box -->

            <!-- Owl-carousel-CSS -->
            <link href="css/owl.carousel.css" rel="stylesheet">

            <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
            <!-- font-awesome-icons -->
            <link href="css/font-awesome.css" rel="stylesheet">
            <!-- //font-awesome-icons -->
            <link href="//fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800"
                  rel="stylesheet">
            <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
                  rel='stylesheet' type='text/css'>

            <link href="css/common.css" rel="stylesheet">
        </head>
    </head>
    <body>
    <div class="main_section_agile">
        <div class="agileits_w3layouts_banner_nav">
            <nav class="navbar navbar-default">
                <div class="navbar-header navbar-left">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h3><a class="navbar-brand" href="index.php">Olha a B<i class="fa fa-futbol-o"
                                                                            aria-hidden="true"></i>la!!</a></h3>

                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <nav class="menu--iris">
                        <ul class="nav navbar-nav menu__list">
                            <li class="menu__item menu__item--current"><a href="index.php">Home</a></li>
                            <li class="menu__item"><a href="classificacao.php">Classificação</a></li>
                            <li class="menu__item"><a href="noticias.php">Noticias</a></li>
                            <li class="menu__item"><a href="clubes.php">Clubes</a></li>

                            <li class="menu__item"><a href="login.php">Registar/Entrar</a></li>
                        </ul>

                    </nav>
                </div>
            </nav>
        </div>
    </div>

    <?php
}

?>
<?php
function bot_login()
{
    ?>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 w3-footer-nav">
                    <div class="links">
                        <a href="index.php">Home</a>
                        <a href="classificacao.php">Classificação</a>
                        <a href="noticias.php">Noticias</a>
                        <a href="clubes.php">Clubes</a>
                        <a href="login.php">Registar/Entrar</a>
                    </div>
                </div>
                <div class="col-md-6 w3-footer-copy">
                    <div class="copyright">
                        <p>&copy; 2017 Goal. All Rights Reserved | Design by <a href="http://w3layouts.com/">
                                W3layouts </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Footer Section -->

    <!-- start-smoth-scrolling -->
    <!-- js -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <script src="js/JiSlider.js"></script>
    <script>
        $(window).load(function () {
            $('#JiSlider').JiSlider({color: '#fff', start: 1, reverse: false}).addClass('ff')
        })
    </script>

    <!-- //footer -->
    <!-- stats -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();
    </script>
    <!-- //stats -->
    <!-- Custom-JavaScript-File-Links -->
    <script type="text/javascript" src="js/moment.js"></script>
    <script type="text/javascript" src="js/moment-timezone-with-data.js"></script>
    <script type="text/javascript" src="js/timer.js"></script>
    <!-- //Custom-JavaScript-File-Links -->

    <!-- requried-jsfiles-for owl -->
    <script src="js/owl.carousel.js"></script>
    <script>
        $(document).ready(function () {
            $("#owl-demo2").owlCarousel({
                items: 1,
                lazyLoad: false,
                autoPlay: true,
                navigation: false,
                navigationText: false,
                pagination: true,
            });
        });
    </script>
    <!-- //requried-jsfiles-for owl -->
    <script src="js/index.js"></script>
    <script src="js/scrolling-nav.js"></script>

    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <!-- for bootstrap working -->
    <script src="js/bootstrap.js"></script>
    <!-- //for bootstrap working -->
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function () {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
                };
            */

            $().UItoTop({easingType: 'easeOutQuart'});

        });
    </script>
    <!-- //here ends scrolling icon -->

    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

    </body>
    </html>

    <?php
}

?>

<?php
function top_utilizador()
{
    ?>
    <!--
    author: W3layouts
    author URL: http://w3layouts.com
    License: Creative Commons Attribution 3.0 Unported
    License URL: http://creativecommons.org/licenses/by/3.0/
    -->
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Olha a Bola!!</title>
        <link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
        <!-- custom-theme -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="keywords" content="Goal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
        <script type="application/x-javascript"> addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            } </script>
        <!-- //custom-theme -->
        <script src="https://kit.fontawesome.com/90ff2770af.js" crossorigin="anonymous"></script>
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="../css/JiSlider.css" rel="stylesheet">
        <!-- light-box -->
        <link rel="stylesheet" href="../css/lightbox.css">
        <!-- //light-box -->

        <!-- Owl-carousel-CSS -->
        <link href="../css/owl.carousel.css" rel="stylesheet">

        <link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
        <!-- font-awesome-icons -->
        <link href="../css/font-awesome.css" rel="stylesheet">
        <!-- //font-awesome-icons -->
        <link href="//fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
              rel='stylesheet' type='text/css'>

        <link href="../css/common.css" rel="stylesheet">
    </head>

    <body>
    <!-- banner -->
    <div class="main_section_agile">


        <div class="agileits_w3layouts_banner_nav">
            <nav class="navbar navbar-default">
                <div class="navbar-header navbar-left">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h3><a class="navbar-brand" href="index.php">Olha a B<i class="fas fa-futbol-o"
                                                                            aria-hidden="true"></i>la!!</a></h3>

                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <nav class="menu--iris">
                        <ul class="nav navbar-nav menu__list">
                            <li class="menu__item menu__item--current"><a href="index.php">Home</a></li>
                            <li class="menu__item"><a href="classificacao.php">Classificação</a></li>
                            <li class="menu__item"><a href="noticias.php">Noticias</a></li>
                            <li class="menu__item"><a href="clubes.php">Clubes</a></li>
                            <li class="menu__item"><a href="estatisticas.php">Estatísticas</a></li>

                            <li class="menu__item">
                                <a href="perfil.php"><img class="perfil-imagem" src="../images/a1.jpg" width="40"></a>
                            </li>

                        </ul>

                    </nav>
                </div>
            </nav>
        </div>
    </div>
    <?php
}

?>
<?php
function bot_utilizador()
{
    ?>
    <div class="clearfix"></div>
    <!-- /contact bottom -->
    <!-- Footer Section -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 w3-footer-nav">
                    <div class="links">
                        <a href="index.php">Home</a>
                        <a href="classificacao.php">Classificação</a>
                        <a href="noticias.php">Noticias</a>
                        <a href="clubes.php">Clubes</a>
                        <a href="perfil.php">Perfil</a>
                    </div>
                </div>
                <div class="col-md-6 w3-footer-copy">
                    <div class="copyright">
                        <p>&copy; 2017 Goal. All Rights Reserved | Design by <a href="http://w3layouts.com/">
                                W3layouts </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Footer Section -->

    <!-- start-smoth-scrolling -->
    <!-- js -->
    <script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <script src="../js/JiSlider.js"></script>
    <script>
        $(window).load(function () {
            $('#JiSlider').JiSlider({color: '#fff', start: 1, reverse: false}).addClass('ff')
        })
    </script>

    <!-- //footer -->
    <!-- stats -->
    <script src="../js/jquery.waypoints.min.js"></script>
    <script src="../js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();
    </script>
    <!-- //stats -->
    <!-- Custom-JavaScript-File-Links -->
    <script type="text/javascript" src="../js/moment.js"></script>
    <script type="text/javascript" src="../js/moment-timezone-with-data.js"></script>
    <script type="text/javascript" src="../js/timer.js"></script>
    <!-- //Custom-JavaScript-File-Links -->

    <!-- requried-jsfiles-for owl -->
    <script src="../js/owl.carousel.js"></script>
    <script>
        $(document).ready(function () {
            $("#owl-demo2").owlCarousel({
                items: 1,
                lazyLoad: false,
                autoPlay: true,
                navigation: false,
                navigationText: false,
                pagination: true,
            });
        });
    </script>
    <!-- //requried-jsfiles-for owl -->
    <script src="../js/index.js"></script>
    <script src="../js/scrolling-nav.js"></script>

    <script type="text/javascript" src="../js/move-top.js"></script>
    <script type="text/javascript" src="../js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <!-- for bootstrap working -->
    <script src="../js/bootstrap.js"></script>
    <!-- //for bootstrap working -->
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function () {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
                };
            */

            $().UItoTop({easingType: 'easeOutQuart'});

        });
    </script>
    <!-- //here ends scrolling icon -->
    </body>
    </html>

    <?php
}

?>


<?php
function top_admin()
{
    ?>
    <!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Olha a Bola!!</title>
        <link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
        <!-- custom-theme -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="keywords" content="Goal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
        <script type="application/x-javascript"> addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            } </script>
        <!-- //custom-theme -->
        <script src="../js/jquery.min.js"></script>
        <script src="../js/common.js"></script>
        <script src="https://kit.fontawesome.com/90ff2770af.js" crossorigin="anonymous"></script>
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="../css/JiSlider.css" rel="stylesheet">
        <!-- light-box -->
        <link rel="stylesheet" href="../css/lightbox.css">
        <!-- //light-box -->

        <!-- Owl-carousel-CSS -->
        <link href="../css/owl.carousel.css" rel="stylesheet">

        <link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
        <!-- font-awesome-icons -->
        <link href="../css/font-awesome.css" rel="stylesheet">
        <!-- //font-awesome-icons -->
        <link href="//fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
              rel='stylesheet' type='text/css'>

        <link href="../css/common.css" rel="stylesheet">

    </head>

    <body>
    <!-- banner -->
    <div class="main_section_agile">


        <div class="agileits_w3layouts_banner_nav">
            <nav class="navbar navbar-default">
                <div class="navbar-header navbar-left">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h3><a class="navbar-brand" href="index.php">Olha a B<i class="fa fa-futbol-o"
                                                                            aria-hidden="true"></i>la!! - Admin</a></h3>

                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <nav class="menu--iris">
                        <ul class="nav navbar-nav menu__list">
                            <li class="menu__item menu__item--current"><a href="index.php">Home</a></li>
                            <li class="menu__item"><a href="admin_jogos.php">Jogos</a></li>
                            <li class="menu__item"><a href="admin_equipas.php">Equipas</a></li>
                            <li class="menu__item"><a href="admin_jogadores.php">Jogadores</a></li>
                            <li class="menu__item"><a href="admin_noticias.php">Noticias</a></li>
                        </ul>

                    </nav>
                </div>
            </nav>
        </div>
    </div>


    <?php
}

?>

<?php
function bot_admin($menu = HOME)
{
    ?>
    <div class="clearfix"></div>
    <!-- /contact bottom -->
    <!-- Footer Section -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 w3-footer-nav">
                    <div class="links">
                        <a href="index.php">Home</a>
                        <a href="admin_jogos.php">Jogos</a>
                        <a href="admin_equipas.php">Equipas</a>
                        <a href="admin_jogadores.php">Jogadores</a>
                        <a href="admin_noticias.php">Noticias</a>
                    </div>
                </div>
                <div class="col-md-6 w3-footer-copy">
                    <div class="copyright">
                        <p>&copy; 2017 Goal. All Rights Reserved | Design by <a href="http://w3layouts.com/">
                                W3layouts </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Footer Section -->

    <!-- start-smoth-scrolling -->
    <!-- js -->
    <script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <script src="../js/JiSlider.js"></script>
    <script>
        $(window).load(function () {
            $('#JiSlider').JiSlider({color: '#fff', start: 1, reverse: false}).addClass('ff')
        })
    </script>

    <!-- //footer -->
    <!-- stats -->
    <script src="../js/jquery.waypoints.min.js"></script>
    <script src="../js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();
    </script>
    <!-- //stats -->
    <!-- Custom-JavaScript-File-Links -->
    <script type="text/javascript" src="../js/moment.js"></script>
    <script type="text/javascript" src="../js/moment-timezone-with-data.js"></script>
    <script type="text/javascript" src="../js/timer.js"></script>
    <!-- //Custom-JavaScript-File-Links -->

    <!-- requried-jsfiles-for owl -->
    <script src="../js/owl.carousel.js"></script>
    <script>
        $(document).ready(function () {
            $("#owl-demo2").owlCarousel({
                items: 1,
                lazyLoad: false,
                autoPlay: true,
                navigation: false,
                navigationText: false,
                pagination: true,
            });
        });
    </script>
    <!-- //requried-jsfiles-for owl -->
    <script src="../js/index.js"></script>
    <script src="../js/scrolling-nav.js"></script>

    <script type="text/javascript" src="../js/move-top.js"></script>
    <script type="text/javascript" src="../js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <!-- for bootstrap working -->
    <script src="../js/bootstrap.js"></script>
    <!-- //for bootstrap working -->
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function () {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
                };
            */

            $().UItoTop({easingType: 'easeOutQuart'});

        });

    </script>
    <script>
        $('document').ready(function () {

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
            if ($menu == TREINADORES){
            ?>
            $('#search').keyup(function () {
                fillTableTreinadores(this.value);
            });
            fillTableTreinadores();
            <?php
            }
            ?>
        })


    </script>

    <!-- //here ends scrolling icon -->
    </body>
    </html>


    <?php
}

?>