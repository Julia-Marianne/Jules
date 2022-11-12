<?php

require('../settings/db_class.php');


class ContactPhoneClass extends db_connection{
	//add,edit,delete
	
	function addContact_cls($itemone, $itemtwo){
		//
		$sql = "INSERT INTO phonebook VALUES('$itemone', '$itemtwo')";
		$sqltwo = "INSERT INTO phonebook ('pname', 'pphoned') VALUES('$itemone', '$itemtwo')";

	}
	function selectOneContact_cls($itemid){
		//write sql

	}

	function selectAllContact_cls(){
		$sql = "SELECT * phonebook";

		//execute the sql
		return $this->db_query($sql);

		//fetch
	}

	function editContact_cls($itemid, $newitemone, $newitemtwo){

	}

	function deleteContact_cls($itemid){

	}

}

?>


