<?php
session_start();
if (isset($_SESSION['id'])) {
  echo "<h1>Hello ".$_SESSION['name']."</h1>";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
<!-- create two links for register and login -->
<a href="../login/register.php">register</a>
<a href="../login/login.php">login</a>
<a href="../actions/logoutprocess.php">Logout</a>     </br></br></br>            



<!-- create links for brand, categories and products -->
<a href="../admin/brand.php">Brand</a>              </br>
<a href="../admin/category.php">Categories</a>    </br>
<a href="../admin/products.php">Products</a>        </br>

	










</body>
</html>