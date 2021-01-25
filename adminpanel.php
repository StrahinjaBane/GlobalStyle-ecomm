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
  <title>ADMIN PANEL</title>
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
          if(isset($_SESSION['adminsId'])) {
            echo '<form action="logout.inc.php" method="post">
            <li class="nav-item">
              <input type="submit" name="logout-button" value="Logout" class="btn btn-info btn-block">
            </li>
            </form>';
          }
          else {
            
          }
        ?>
      </li>
      
      
      </ul>
    </div>

  </nav>
  <?php
$sername = "localhost";
$dbUname = "root";
$dbPwd = "";
$dbN = "cart";


$connection = mysqli_connect($sername, $dbUname, $dbPwd, $dbN); ?>




<!--ADD PRODUCTS -->
  
<div class="addproduct-container col-md-12" style="text-align:center;">
<h2 style="background-color: lightblue; padding:10px; margin:20px;">ADD A NEW PRODUCT</h2>
<div class="addproduct-form">
<form name="addproductform" action="" method="post" enctype="multipart/form-data">
<table class="center-table" border="2">
<tr>
<td>Product name</td>
<td><input type="text" name="pname"></td>
</tr>
<tr>
<td >Product price</td>
<td><input type="text" name="pprice"></td>
</tr>
<tr>
<td>Product image</td>
<td><input type="file" name="pimage"></td>
</tr>
</table>

<input type="submit" name="add-product" value="Add Product" class="btn btn-info btn-block">


</form>
</div>
</div>

  <?php 
  if(isset($_POST["add-product"]))
  {

    $fnm=$_FILES['pimage'] ['name'];
    $dst= "./product_image".$fnm;
    move_uploaded_file($_FILES["pimage"]["tmp_name"],$dst);

    mysqli_query ($connection,"INSERT INTO products VALUES('','$_POST[pname]','$dst','$_POST[pprice]')");


  }


?>



<!--DELETE OR EDIT PRODUCTS -->

<div class="addproduct-container col-md-12" style="text-align:center;">
<h2 style="background-color: lightblue; padding:10px; margin:20px;">REMOVE OR EDIT A PRODUCT</h2>
<div class="col-md-12 d-flex" style=" justify-content: space-evenly;">
<?php
    $res=mysqli_query($connection,"SELECT * FROM products");
    echo "<table>";
    

    if(mysqli_num_rows($res) > 0){

    
    while($row=mysqli_fetch_array($res))
    {
      echo "<tr>";
      echo "<td>"; ?> <img src="<?php echo $row["image"]; ?>" alt="" style="width:150px ; height:125px"> <?php echo "</td>";
      echo "<td>"; echo $row["name"]; echo "</td>";
      echo "<td>"; echo $row["price"];  echo "</td>";
      echo "<td>"; ?> <a href="deletequery.php?id=<?php echo $row['id']; ?>">
      <div class="btn btn-danger">Remove</div>
    </a>  <?php echo "</td>";
    echo "<td>"; ?> <a href="edititem.php?id=<?php echo $row['id']; ?>">
    <div class="btn btn-warning">Edit</div>
  </a>  <?php echo "</td>";
      echo "</tr>"; 
    }
  
  }

?>
</div>



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