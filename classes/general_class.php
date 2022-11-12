<?php
//connect to database class
require("../settings/db_class.php");

/**
*General class to handle all functions 
*/
/**
 *@author David Sampah
 *
 */

class general_class extends db_connection
{
	//--INSERT--//
	function insert_record_cls($a, $b){
		$sql= "INSERT INTO phonebook (pname,pphoned) VALUES ('$a','$b')";
		return $this->db_query($sql);
	}

	
	//--SELECT--//
	function select_all_records_cls(){
		$sql= "SELECT *  FROM phonebook";
		return $this->db_fetch_all($sql);
	}

	

	//--UPDATE--//
function update_all_records_cls($id,$name,$number){
	$sql= "UPDATE phonebook set pname='$name', pphoned='$number' where pid ='$id' ";
	return $this->db_query($sql);
}
    
	//--DELETE--//
	function delete_all_records_cls($id){
		$sql= "DELETE FROM phonebook where pid = '$id' ";
		return $this->db_query($sql);
	

	}
	function select_one_contact_cls($id){

        // return array or false
			// return associative array or false
            return $this->db_fetch_one("SELECT * from phonebook where pid='$id'");
    }
}


?>