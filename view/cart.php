<?php
session_start();
require('../controllers/cart_controller.php');
// return array of all rows, or false (if it failed)
$cart = select_all_cart_controller();

$id = $_SESSION['user_id'];
$get_total = get_total_controller($id);

foreach($get_total as $total){
   $get_tot =  $total["sum"];
}
$_SESSION["Cart_total"] = $get_tot;




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../CSS/bootstrap1.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="../CSS/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../CSS/responsive.css">

    <script src="https://kit.fontawesome.com/75618b9696.js" crossorigin="anonymous"></script>
    
</head>
<body style=' margin-bottom: 20px'>

<header style="display: flex; background-color:#fd7e14; color: black;">
    <a href="home.php"><h3 style="color:black;">Home</h3></a>
    <div>
    <form method="post" action="../actions/search.php" style='display: flex'>

        <input type="text" class="form-control mb-0" id="search" name="search" placeholder="Type here to search" style="width: 400px; margin-left: 200px">
        <button style="margin-left: -50px" class="btn btn-primary float-right" type="submit" name="searchbutton">Search</button>

    </form>
    </div>
    
        <a href="home.php"><h3 style="color:black; margin-left: 200px;">Home</h3></a>
        <a href="all_product.php"><h3 style="color:black; margin-left: 40px;">Products</p></h3>
        <a href="cart.php"><h3 style="color: black; margin-left:40px;">Cart</h3></a>
    
    
</header>

<h1 style='margin-top: 60px; margin-left: 600px; color: #6f42c1'>Cart List</h1>
<h4 style='margin-top: 20px; margin-left: 1070px; color: #6f42c1'>GHC: <?php echo $_SESSION["Cart_total"];    ?></h4>
<a href="./payment.php" style="margin-left:1070px; color: black">Click here to proceed to payment</a>

<?php
    foreach($cart as $x){
        echo 
        "
        
        <a href='./single_product.php?id={$x['product_id']}'>
        <div class='card' style='width: 35rem; margin-bottom: 20px; margin-left: 430px;'>
            <div class='card-body' style='display: flex;'>
            <img style='height: 200px; width: 200px' src='{$x['product_image']}' alt='Card image cap'>
            <div style='margin-top: 30px; margin-left: 30px;'>
                <h5 style='color: black;' class='card-title'>{$x['product_title']}</h5>
                <h6 class='card-subtitle mb-2 text-muted'>{$x['product_price']}</h6>
                <p style='color: grey;' class='card-text'>{$x['product_desc']}</p>
                <br>
                <a href='../actions/managecartquantity.php?id={$x['product_id']}' class='btn btn-primary'>Manage Quantity</a>
                <a href='../actions/removefromcart.php?id={$x['product_id']}' class='btn btn-primary' style='width: 130px; height: 38px;'>Remove</a>
            </div>
            </div>
            
        </div>
        </a>
       
    ";
    }
?>
<!-- display: inline-block; -->
            <!-- <br> -->
            <!-- <a href='../Actions/cartprocess.php?id={$x['product_id']}' class='btn btn-primary'>Add to Cart</a> -->

<!--  -->

</body>
</html>