<?php
// require('../settings/core.php');
session_start();
require('../controllers/cart_controller.php');
// require('../actions/returnUser.php');

// echo 'hello';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $customerid = $_SESSION['user_id'];
    
    $ipaddress = $_SERVER['REMOTE_ADDR'];
    
    $quantity = '1';
    
    $result = add_customer_cart_controller($id, $ipaddress, $customerid, $quantity);
    
    if($result === true){
        header('Location: ../view/viewcart.php');
    }else{
        echo "failed to drop in cart";
    }
    
    
    // echo "$id";
    // echo '<br>';
    // echo "$customerid";
    // echo '<br>';
    // echo "$ipaddress";
    // echo '<br>';
    // echo "$quantity";
    
}

?>