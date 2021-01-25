<?php
$sername = "localhost";
$dbUname = "root";
$dbPwd = "";
$dbN = "cart";

$connection = mysqli_connect($sername, $dbUname, $dbPwd, $dbN);

$id=$_GET["id"];
mysqli_query($connection,"DELETE FROM products WHERE id=$id");

?>

<script type="text/javascript">
window.location="adminpanel.php";

</script>
