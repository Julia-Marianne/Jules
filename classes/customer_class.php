<?php
//connect to database class
require("../settings/db_class.php");

/**
*Customer class to handle all functions 
*/
/**
 *@author Julia-Marian Hudson
 *
 */

class customer_class extends db_connection
{
	//--INSERT--//
	function insert_record_cls($usern, $userEmail, $userP, $userCountry, $userCity, $userContact, $userRole){
		$sql= "INSERT INTO `customer`( `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `user_role`) VALUES ('$usern', '$userEmail', '$userP', '$userCountry', '$userCity', '$userContact', '$userRole')";
		return $this->db_query($sql);
	}

	//--SELECT ONE RECORD--//
	function get_record_by_email_cls($userEmail){
		$sql= "SELECT * FROM `customer` WHERE `customer_email`= '$userEmail'";
		return $this->db_fetch_one($sql);
		//returns an associative array
	}


	}

	//--UPDATE--//



	//--DELETE--//
	



?>