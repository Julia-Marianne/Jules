<?php

include('../controllers/product_controller.php');

//UPDATE
if (isset($_POST['updateButton'])){
    $id = $_POST['id'];
	$productTitle = $_POST['ptitle'];
	$productPrice = $_POST['pprice'];
	$productDesc = $_POST['pdesc'];
	$productKey = $_POST['pkeyword'];
    $brandName = $_POST['brandname'];
	$catName = $_POST['catname'];

    $result = update_all_product_ctr($id, $productTitle, $productPrice, $productDesc, $productKey, $brandName, $catName,);
    if($result == true){
        echo "Successful Update";
        header("Location:../admin/products.php");
    }   else{
            echo "fail";
        }
}





?>