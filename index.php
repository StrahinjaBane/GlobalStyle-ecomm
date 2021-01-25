<?php
  session_start();
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Welcome to GlobalStyle</title>
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
          <a href="cart.php" class="nav-link">SHOP</a>
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
            echo '<a href="login.php" type="button" class="btn btn-info btn-block">LOG IN</a>';
          }
        ?>
      </li>
      
      
      </ul>
    </div>

  </nav>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/carousel-images/woman.jpg" alt="First slide">
        <div class="carousel-caption d-flex flex-column">
          <h1 class="d-none d-sm-block">Welcome to GlobalStyle</h1>
          <a href="index.html" class="logo-container flex-shrink-3"><img src="img/gs-logo.png" alt=""
              style="width: 120px;"></a>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/carousel-images/blur.jpg" alt="Second slide">
        <div class="carousel-caption d-flex flex-column">
          <h1 class="d-none d-sm-block">Don't miss out on our special prices</h1>
          <a href="#" class="button-container">SHOP NOW</a>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/carousel-images/globe.jpg" alt="Third slide">
        <div class="carousel-caption d-flex flex-column mr-auto">
          <h1 class="d-none d-sm-block">WE SHIP AROUND THE WORLD!</h1>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="emotion-container">
    <div class="text-containers">
      <h2>WE LOVE OUR CUSTOMER</h2>
      <i class="fas fa-heart fa-lg"></i>
      <p>Our customers mean a lot to us.With out you we couldn't get this far.So we always try to show respect and to reward you with gret prices and general customer service.thank you for stick with us trough all these years.We love you!</p>
    </div>
    <div class="text-containers">
      <h2>BEST PRICES</h2>
      <i class="fas fa-tags fa-lg"></i>
      <p>We are always thinking about ordinary people.We do not look at you from high position, so we always want to make our products available to everybody.There fore our prices are always fair and in correlation with quality of materials and work hours need to make a piece of clothing.</p>
    </div>
    <div class="text-containers">
      <h2>100% ORIGINAL PRODUCTS</h2>
      <i class="fas fa-check fa-lg"></i>
      <p>We make our own clothes, and we firmly stand by them.We never use help from outsider companies and don't exploit third world countries in making our prodocuts.WE ARE 100% GlobalStyle!</p>
    </div>
  </div>

  <div class="wrapper-container d-flex">
    <div class="text-container-2">find your perfect style and let your creativity shine</div>
  </div>

  <div class="product-container d-flex">
    <div class="product d-flex">
      <img src="img/clothes/t-shirt-m/bright-purple-t-shirt.jpg" style="max-width: 300px;" alt="">
      
    </div>
    <div class="product">
      <img src="img/clothes/t-shirt-m/cobalt-blue-t-shirt.jpg" style="max-width: 300px;" alt="">
      
    </div>
    <div class="product">
      <img src="img/clothes/t-shirt-m/green-t-shirt.jpg" style="max-width: 300px;" alt="">
      
    </div>
    <div class="product">
      <img src="img/clothes/t-shirt-m/grey-t-shirt.jpg" style="max-width: 300px;" alt="">
      
    </div>
  </div>

  <!-- Footer -->
  <footer class="page-footer font-small bg-secondary pt-4"
    style="margin-top: 50px; filter: drop-shadow(2px 4px 6px black);">
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
      <a href="adminlogin.php" class="btn btn-outline-primary">ADMIN LOGIN</a>
    </div>
  </footer>
  <!-- Footer -->



  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script>
    window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
  </script>

  <script src="js/main.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
  <script>
    (function (b, o, i, l, e, r) {
      b.GoogleAnalyticsObject = l;
      b[l] || (b[l] =
        function () {
          (b[l].q = b[l].q || []).push(arguments)
        });
      b[l].l = +new Date;
      e = o.createElement(i);
      r = o.getElementsByTagName(i)[0];
      e.src = '//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-XXXXX-X', 'auto');
    ga('send', 'pageview');
  </script>
</body>

</html>