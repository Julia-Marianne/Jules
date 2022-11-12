<?php

session_start();

include('../controllers/customer_controller.php');
//echo "I am in post";


if (isset($_POST['enter'])) {
	// getting users input from the form.
	$userEmail = $_POST['email'];
	$userP = $_POST['password'];

	// check if email exists in the database. Returns the user's data if it exists or returns false.
	$result = get_record_by_email_ctr($userEmail);

	// Set the correct pasword from the db to a variable
	$db_pass = base64_decode($result['customer_pass']);

	// if email is in the database
	if($result){
		// go ahead and check if the two passwords match
		if ($userP == $db_pass) {
			// Store logged in users credentials
			$_SESSION['id'] = $result['customer_id'];
			$_SESSION['name'] = $result['customer_name'];
			$_SESSION['email'] = $result['customer_email'];
			$_SESSION['userRole'] = $result['user_role'];

			if ($result['user_role']==1)
			header("Location:../admin/index.php");

			if ($result['user_role']==2)
			header("Location:../view/home.php");

		} 
		else {
			echo 'Invalid Email or password';
		}
	}
	else{
		echo "Email does not exist";
	}
}


?>

