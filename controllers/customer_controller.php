<?php
//connect to the customer class
include("../classes/customer_class.php");

//sanitize data

//--INSERT--//
function insert_record_ctr($usern, $userEmail, $userP, $userCountry, $userCity, $userContact, $userRole){
    // Creates an instance of the customer class and appends it to $item
    $item = new customer_class();
    // Calling insert record method in the customer class and returns true or false
    return $item->insert_record_cls($usern, $userEmail, $userP, $userCountry, $userCity, $userContact, $userRole);
}

//--SELECT--//
function get_record_by_email_ctr($userEmail){
    // Creates an instance of the customer class and appends it to $item
    $item = new customer_class();
    // Calling select all records method in the general class and returns true or false
    return $item->get_record_by_email_cls($userEmail);
}
//--UPDATE--//

//--DELETE--//

?>