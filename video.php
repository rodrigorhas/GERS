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
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5&appId=178362485577477";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>



	<!-- HEADER -->
    <section id="home" class="image-bg section-padding-40">
    	<div class="container">
        	<div class="row">
                <div class="col-md-6">LOGO</div>
            	<div class="col-md-2">
                    <div class="videobox">
                        <img src="images/video1.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="videobox darken">
                        <img src="images/video2.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="videobox">
                        <img src="images/video3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
     
     
    <!-- ABOUT -->
    <section class="about">
    	<div class="container">
        	<div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="embed-responsive embed-responsive-16by9 video-border">
                        <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/weaKV1EFVsg?autoplay=1&showinfo=0&controls=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
    
   <?php
        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
   ?> 
    <!--INSVESTORS-->
    <section class="servkces section-padding">
    	<div class="container">
        	<div class="row">
            	<div class="col-sm-12 ">
                    Clique em <strong>Curtir</strong> abaixo e recomende aos seus amigos no facebook!<br>
                    <div class="fb-like" data-href="https://www.facebook.com/melissasapeca/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                </div>
                <div class="col-sm-12 ">
                	<div class="fb-comments" data-href="<?php echo $actual_link; ?>" data-numposts="100"></div>
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
