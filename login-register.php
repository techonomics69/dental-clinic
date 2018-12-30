<?php
session_start();
include ("db_config.php");
include ("functions/functions.php");
?>
<html>
<head>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/dental.png"/>

    <!-- Material Design -->
    <link href="MaterialDesign/css/materialdesignicons.css" type="text/css" rel="stylesheet">

    <!-- Bootstrap -->

    <link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.css" type="text/css" rel="stylesheet">

    <!-- CSS -->
    <link href="css/login.css" type="text/css" rel="stylesheet">

    <!-- Title -->
    <title>
        Dental Clinic - Login / Register
    </title>

</head>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if (isset($_POST['login'])) { //user logging in

        require 'login.php';

    }

    elseif (isset($_POST['register'])) { //user registering

        require 'register.php';

    }
}
?>
<body>
<!-- Global -->
<div class="global">
    <!-- Header -->
    <header>
        <!-- Logo -->
        <div id="cd-logo">
            <a href="index.php">
                <img src="assets/dental.png" alt="Logo">
            </a>
            Dental-C</div>
    </header>

    <div id="cd-nav">
        <a href="#0" class="cd-nav-trigger">Menu<span></span></a>

        <!-- Header Tabs -->
        <nav id="cd-main-nav">
            <ul>
                <li><a id="header-tabs" href="index.php">HOME</a></li>
                <li><a id="header-tabs" href="appointments.php">APPOINTMENTS</a></li>
                <li><a id="header-tabs" href="#">GALLERY</a></li>
                <li><a id="header-tabs" href="team.php">TEAM</a></li>
                <li><a id="header-tabs" href="about.php">ABOUT</a></li>
                <li><a id="header-tabs" href="#">CONTACT</a></li>
                <?php
                if(isset($_SESSION['email'])) {
                    echo "<li><a id=\"header-tabs\" href='user_profile.php'>{$_SESSION['first_name']}</a></li>";
                    echo "<li><a id='header-tabs' href='logout.php'><i class=\"fas fa-sign-out-alt\"></i></a>";
                }
                else
                {
                    echo "<li><a id=\"header-tabs\" href=\"login-register.php\">LOGIN</a></li>";
                }
                ?>
            </ul>
        </nav>
    </div>
    <div class="background-image-1">
        <!-- Color over background image-->
        <div class="color-over-image">

            <!-- About title -->
            <div class="col-xs-12 col-sm-offset-2 col-sm-10 col-md-offset-2 col-md-10  col-lg-offset-2 col-lg-10  about-1">
                <h4 id="title-1">LOGIN / REGISTER</h4>

                <ul class="list-inline list-inline-arrows">
                    <li><a href="index.php" class="text-white">Home</a></li>
                    <li><a class="text-white">Login / Register</a></li>
                </ul>
            </div>

        </div>
    </div>

    <?php if(isset($_SESSION['email'])){
        checkIfUserIsLogged();
    } else {
        IfUserNotLogged();
    } ?>


<!--    <noscript><h3> You must have JavaScript enabled in order to use this order form. Please-->
<!--        enable JavaScript and then reload this page in order to continue. </h3>-->
<!--    <meta HTTP-EQUIV="refresh" content=0;url="javascriptNotEnabled.php"></noscript>-->


    <!-- JAVASCRIPT -->
    <script src="jquery/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="javascript/login.js" type="text/javascript"></script>
    <script src="javascript/modernizer.js"></script>
    <script src="javascript/validate-login-register-form.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="validation/jquery.validate.js" type="text/javascript"></script>

</div>

</body>
</html>