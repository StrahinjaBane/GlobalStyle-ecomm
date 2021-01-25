<?php
  session_start();
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="https://kit.fontawesome.com/21a1fb3fe1.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,800&display=swap" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

     <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">

        <a href="index.php" class="navbar-brand logo-container"><img src="img/gs-logo.png" alt="" style="width: 50px;"></a>
        <span class="navbar-text">GlobalStyle</span>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
            <span class="navbar-toggler-icon"></span>
        </button>
       
        <div class="collapse navbar-collapse menu-links-container" id="collapse_target">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">HOME</a>
                   </li>
                <li class="nav-item">
                    <a href="" class="nav-link">SHOP</a>
                   </li>
                <li class="nav-item">
                    <a href="registry.php" class="nav-link">REGISTER</a>
                   </li>
            </ul>
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
        <?php
          if(isset($_SESSION['userId'])) {
            echo '<a href="shopping-cart.php"><i class="fas fa-shopping-cart" style="margin: 20px;
            color: cadetblue;
            font-size: 34px;
            border: 5px solid whitesmoke;
            padding: 5px;"></i></a>';
          }
          else {
            
          }
        ?>
        
        </li>
        <li class="nav-item">
        <?php
          if(isset($_SESSION['userId'])) {
            echo '<i class="far fa-user" style="background-color: floralwhite; padding: 10px;"> Hello customer </i><form action="logout.inc.php" method="post">
            <li class="nav-item">
              <input type="submit" name="logout-button" value="Logout" class="btn btn-info btn-block">
            </li>
            </form>';
          }
          else {
            echo '<i class="fas fa-user-times" style="background-color: floralwhite; padding: 10px;"> You are not logged in </i>';
          }
        ?>
      </li>
      </ul>
        </div>
         
     </nav>
<!-- Login/registry form-->

<div class="container">
    <div class="row centered-form">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                    <h3 class="panel-title">Sign up for GlobalStyle <small>It's free!</small></h3>
                     </div>
                     <div class="panel-body">
                    <form role="form" action="login.inc.php" method="post">
                        
                        <div class="form-group">
                            <input type="text" name="useruid" id="user" class="form-control input-sm" placeholder="User name" style="margin:5px 5px 5px">
                            <input type="password" name="pwd" id="password" class="form-control input-sm" placeholder="Password" style="margin:5px 5px 5px">
                        </div>

                                                
                        <input type="submit" name="login-button" value="Login" class="btn btn-info btn-block">
                        <div class="extra-form-container" style="text-align: center; margin-top: 20px;">
                            <div class="col-md-12">
                            
                            <p>forgot your password?<a href="#">Click here</a></p>
                            <p>a new user?<a href="registry.php">Click here</a></p>
                        
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




     
      <!-- Footer -->
<footer class="page-footer font-small bg-secondary pt-4 fixed-bottom" style="margin-top: 50px; filter: drop-shadow(2px 4px 6px black);">
  <div class="container">
    <ul class="list-unstyled list-inline text-center py-2">
      <li class="list-inline-item">
        <h5 class="mb-1 text-white">Register for free and receive a special discount</h5>
      </li>
      <li class="list-inline-item">
        <a href="#!" class="btn btn-outline-primary">Sign up!</a>
      </li>
    </ul>
  </div>
  <div class="footer-copyright text-center bg-dark py-3">© 2020 Copyright:
    <a href="http://banedev.startmeup.co.rs/" class="text-white"> BaneDev</a>
  </div>
</footer>
<!-- Footer -->
        

        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/main.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
