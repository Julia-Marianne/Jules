<?php

include('../controllers/product_controller.php');

//echo "I am in post";


if (isset($_POST['enter'])) {
	//Grabs the data
	$brandName = $_POST['brandname'];
	

	$result = addBrand_ctr($brandName);

	if($result){
		header("location:../admin/brand.php");
	}
	else{
		echo "fail";
	}

	}

	//UPDATE
	if (isset($_GET['updateButton'])) {
		//Grabs the data
		$id = $_GET['updateid'];
		$brandName = $_POST['brand_name'];
		
	
		$result = update_all_records_ctr($id, $brandName);
		if($result == true){
			echo "Successful Update";
			header ("Location:../admin/brand.php");
		}
		else{
			echo "fail";
		}
			
	}


?>