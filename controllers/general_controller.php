<?php
//connect to the user account class
include("../classes/general_class.php");

//--INSERT--//
function insert_record_ctr($a, $b){
    // Creates an instance of the general class and appends it to $item
    $item = new general_class();
    // Calling insert record method in the general class and returns true or false
    return $item->insert_record_cls($a, $b);
}

//--SELECT--//
function select_all_records_ctr(){
    // Creates an instance of the general class and appends it to $item
    $item = new general_class();
    // Calling select all records method in the general class and returns true or false
    return $item->select_all_records_cls();
}
//--UPDATE--//
function update_all_records_ctr($id,$name,$number){
    // Creates an instance of the general class and appends it to $item
    $item = new general_class();
    // Calling select all records method in the general class and returns true or false
    return $item->update_all_records_cls($id,$name,$number);
}

//--DELETE--//
function delete_all_records_ctr($id){
    // Creates an instance of the general class and appends it to $item
    $item = new general_class();
    // Calling select all records method in the general class and returns true or false
    return $item->delete_all_records_cls($id);
}

function select_one_contact_ctr($id){
// Creates an instance of the general class and appends it to $item
$item = new general_class();
// Calling select all records method in the general class and returns true or false
return $item->select_one_contact_cls($id);
}
    
?>