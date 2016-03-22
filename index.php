<?php

    error_reporting(0);

    define('ROOT', __DIR__);
    require_once 'core/init.php';

    $user = new User();

    if(!$user->isLoggedIn()) {

        Redirect::to('login.php');
    }
    ob_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="pt-br"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="pt-br"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="pt-br"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="pt-br"> <!--<![endif]-->
<head>
	<!-- META CONTENT -->
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- TITLE NAME -->
    <title>Consultoria - Roberto Santiago</title>
    
    <!-- FAVICON  -->
    <link rel="icon" href="images/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
    <!-- DEMO COLORS  -->
    <link href="#" class="css-color" rel="stylesheet">
    
    <!-- CSS STYLESHEET -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    
    <?php require "modules/login_modal.php"; ?>

	<!-- HEADER -->
    <section id="home" class="image-bg">
    	<nav class="navbar navbar-inverse" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Title</a>
                </div>
        
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="logout.php">Sair</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
    </section>
     
     
    <!-- ABOUT -->
    <section class="about">
    	<div class="container">
        	<div class="row">
            	<div class="col-sm-10 col-sm-offset-1">
                	<!-- <h2>"Nos trabalhamos com o marketing pessoal a anos. Ja temos muita experiência nesse mercado"
                                        <br><small>Silvio Souza</small></h2> -->
                </div>
            </div>
        </div>
    </section>
    
    
    <!-- FOOTER -->
    <footer class="footer">
    	<div class="container">
        	<div class="row">
            	<div class="col-sm-12">
                	<img class="img-responsive" src="images/logo.png" alt="logo"/>
                    <p>&copy; Copyright 2016. Todos os direitos reservados.</p>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- PRELOADER -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    
        <!-- JS SCRIPTS FILE -->
	<script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.form.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/jquery.countdown.js"></script>
    <script src="js/ajaxchimp.min.js"></script>
    <script src="js/lettering.js"></script>
    <script src="js/jquery.textillate.js"></script>
    <script src="js/modernizr-custom.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
