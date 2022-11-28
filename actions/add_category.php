<?php

include('../controllers/product_controller.php');
include("../settings/core.php");
//echo "I am in post";


if (isset($_POST['enter'])) {
	//Grabs the data
	$catName= $_POST['catname'];
	

	$result = insert_category_ctr($catName);

	if($result){
		header("location:../admin/category.php");
	}
	else{
		echo "fail";
	}
		
	}

    //UPDATE
	if (isset($_GET['updateButton'])) {
		//Grabs the data
		$id = $_GET['updateid'];
		$catName = $_POST['cat_name'];
		
	
		$result = update_all_categories_ctr($id, $catName);
		if($result == true){
			echo "Successful Update";
			header ("Location:../admin/category.php");
		}
		else{
			echo "fail";
		}
			
	}




?>