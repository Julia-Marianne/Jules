<?php

include('../controllers/product_controller.php');

//echo "I am in post";


if (isset($_POST['submit'])) {
	//Grabs the data
	$productTitle = $_POST['ptitle'];
	$productPrice = $_POST['pprice'];
	$productDesc = $_POST['pdesc'];
	$productKey = $_POST['pkeyword'];
	$brandName = $_POST['brandname'];
	$catName = $_POST['catname'];
	

	$result = insert_product_ctr($productTitle, $productPrice, $productDesc, $productKey, $brandName, $catName);

	if($result){
		header("location:../admin/products.php");
	}
	else{
		echo "fail";
	}

	}

	//UPDATE
	if (isset($_GET['updateButton'])) {
		//Grabs the data
		$id = $_GET['updateid'];
		$productTitle = $_POST['product_title'];
		$productPrice = $_POST['product_price'];
		$productDesc = $_POST['product_desc'];
		$productKey = $_POST['product_keywords'];
		$brandName = $_POST['product_brand'];
		$catName = $_POST['product_cat'];
		
	
		$result = update_all_product_ctr($id, $productTitle, $productPrice, $productDesc, $productKey, $brandName, $catName, );
		if($result == true){
			header ("Location:../admin/brand.php");
			echo "Successful Update";
			
		}
		else{
			echo "fail";
		}
			
	}


?>