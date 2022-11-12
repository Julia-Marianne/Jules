<?php

include('../controllers/customer_controller.php');
//echo "I am in post";


if (isset($_POST['enter'])) {
	//Grabs the data
	$usern = $_POST['fullname'];
	$userEmail = $_POST['email'];
	$userP = base64_encode($_POST['password']);
	$userCountry = $_POST['country'];
	$userCity = $_POST['city'];
	$userContact = $_POST['contact'];
	$userRole = 1;

	$result = insert_record_ctr($usern, $userEmail, $userP, $userCountry, $userCity, $userContact, $userRole);

	if($result){
		header("Location:../login/login.php");
		
	}
	else{
		echo "fail";
	}

	//save_me_ctr($usern, $usertel);

	//echo "I am in post";
}


?>