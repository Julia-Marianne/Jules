<?php

require('../settings/db_class.php');

// inherit the methods from Connection
class customer extends db_connection{


	function add_customer($name, $email, $password,$contact,$role){
		// return true or false
		return $this->db_query("insert into customer(customer_name,customer_email, customer_pass, customer_contact,user_role) 
        values('$name', '$email', '$password','$contact','$role')");
	}

	function delete_one_customer($id){
		// return true or false
		return $this->db_query("delete from customers where customer_id = '$id'");
	}

	function update_one_customer($id,$name, $email, $password,$country,$city,$contact,$image,$role){
		// return true or false
		return $this->db_query("update customers set customer_name='$name', customer_email='$email', customer_pass='$password' 
        customer_country='$country', customer_city='$city', customer_contact='$contact', customer_image='$image' 
        where customer_id = '$id'");
	}

	function select_all_customers(){
		// return array or false
		return $this->db_fetch_all("select * from customer");
	}

	function select_one_customer($email){
		// return associative array or false
		return $this->db_fetch_one("select * from customer where customer_email='$email'");
	}
	//select customer using their id
	function select_customer($id){
		// return associative array or false
		return $this->db_fetch_one("select * from customer where customer_id='$id'");
	}

}

?>