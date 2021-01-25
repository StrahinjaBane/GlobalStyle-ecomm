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
  <title>EDIT PRODUCT</title>
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


$connection = mysqli_connect($sername, $dbUname, $dbPwd, $dbN);
$id=$_GET["id"];
$res=mysqli_query($connection,"SELECT * FROM products WHERE id=$id");
while($row=mysqli_fetch_array($res))
{
    $product_img=$row["image"];
    $product_name=$row["name"];
    $product_price=$row["price"];
}
?>

<div class="addproduct-container col-md-12" style="text-align:center;">
<h2 style="background-color: lightblue; padding:10px; margin:20px;">EDIT PRODUCT</h2>
<div class="one-product-container">
<form name="form1" action="" method="POST" enctype="multipart/formdata">
<table class="center-table" border="1">
    <tr>
        <td><img src="<?php echo $product_img; ?>" alt="" style="width:150px ; height:125px ;"></td>
        
    </tr>
    <tr>
        <td>Product name</td>
        <td><input type="text" name="pnm" value="<?php echo $product_name; ?>"></td>
    </tr>
    <tr>
        <td>Product price</td>
        <td><input type="text" name="ppce" value="<?php echo $product_price; ?>"></td>
    </tr>
    <tr>
        <td><input type="submit" name="edit" value="Edit" class="btn btn-warning btn-block" id="edit_button"></td>
    </tr>
    <tr>
        <td><a href="adminpanel.php" class="btn btn-info btn-block">Back</a></td>
    </tr>
</table>
</form>
</div>
</div>


<?php
if(isset($_POST["edit"]))
{
    mysqli_query($connection,"UPDATE products SET name='$_POST[pnm]' , price='$_POST[ppce]' WHERE id=$id");
    ?>
    <script type="text/javascript">
    window.location="adminpanel.php";
</script>
<?php
}

?>

