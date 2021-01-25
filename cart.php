<?php
  session_start();
  $product_ids = array();
  

//proveri da li je dugme add to cart kliknuto
if(filter_input(INPUT_POST, 'add_to_cart')){
    if(isset($_SESSION['shopping_cart'])){
        $count = count($_SESSION['shopping_cart']);

        $product_ids = array_column($_SESSION['shopping_cart'], 'id');

        if (!in_array(filter_input(INPUT_GET, 'id'), $product_ids)){
            $_SESSION['shopping_cart'][$count] = array
        (
            'id' => filter_input(INPUT_GET, 'id'),
            'name' => filter_input(INPUT_POST, 'name'),
            'price' => filter_input(INPUT_POST, 'price'),
            'quantity' => filter_input(INPUT_POST, 'quantity')
        );
        }
        else {
            for ($i = 0; $i < count($product_ids); $i++){
                if($product_ids[$i] == filter_input(INPUT_GET, 'id')){
                    //dodaje kolicinu na vec postojecu kolicinu proizvoda
                    $_SESSION['shopping_cart'][$i]['quantity'] += filter_input(INPUT_POST,'quantity');
                }
            }
        }
    }
    else{//ako cart ne postoji kreirati producte sa 0
        $_SESSION['shopping_cart'][0] = array
        (
            'id' => filter_input(INPUT_GET, 'id'),
            'name' => filter_input(INPUT_POST, 'name'),
            'price' => filter_input(INPUT_POST, 'price'),
            'quantity' => filter_input(INPUT_POST, 'quantity')
        );
    }
}

if(filter_input(INPUT_GET, 'action') == 'delete'){
  //prodji kroz sve u kartu dok se id ne poklopi
  foreach($_SESSION['shopping_cart'] as $key => $product){
    if ($product['id'] == filter_input(INPUT_GET, 'id')){
      unset($_SESSION['shopping_cart'][$key]);
    }
  }
  $_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']);
}

//pre_r($_SESSION); //stampanje niza sa proizvodima

function pre_r($array){
  echo '<pre>';
  print_r($array);
  echo '</pre>';
}

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
  <title>SHOP</title>
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
 <!-- BODY -->
<div class="cart-container d-flex-inline" style="flex-wrap: wrap;">
<?php
$sername = "localhost";
$dbUname = "root";
$dbPwd = "";
$dbN = "cart";


$connection = mysqli_connect($sername, $dbUname, $dbPwd, $dbN);
$query = 'SELECT * FROM products ORDER by id ASC';
$res = mysqli_query($connection,$query);

if ($res):
    if(mysqli_num_rows($res)>0):
        while($product = mysqli_fetch_assoc($res)):
        ?>
        <div class="product-cart-container d-inline-flex">
            <form method="post" action="cart.php?action=add&id=<?php echo $product['id'];?>">
                <div class="products">
                    <img src="<?php echo $product['image']; ?>" alt="image" class="img-responsive" style="width:300px ; height:250px" />
                    <h4 class="text-info"><?php echo $product['name']?></h4>
                    <h4>$ <?php echo $product['price']; ?></h4>
                    
                    <input type="hidden" name="name" value="<?php echo $product['name']; ?>" />
                    <input type="hidden" name="price" value="<?php echo $product['price']; ?>" />
                    
                    <?php 
                    if(isset($_SESSION['userId'])) {
                    echo '
                    <input type="text" name="quantity" value="1" class="form-control"/>
                    <input type="submit" name="add_to_cart" class="btn btn-info" value="Add to Cart" style="margin:3px" />';
                  }
          else {
            
          } ?>
          
                </div>
            </form>
        </div>
        <?php
        endwhile;
    endif;
endif;
?>

  
  

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

