<?php

include('../controllers/product_controller.php');
//echo "I am in post";

//UPDATE
if (isset($_POST['updateButton'])){
    $id = $_POST['id'];
    $brandName =$_POST['brandname'];


    $result = update_all_records_ctr($id, $brandName);
    if($result == true){
        echo "Successful Update";
        header("Location: ../admin/brand.php");
    }   else{
            echo "fail";
        }
}





?>