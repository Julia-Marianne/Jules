<?php

include('../controllers/product_controller.php');

//UPDATE
if (isset($_POST['updateButton'])){
    $id = $_POST['id'];
    $catName =$_POST['catname'];


    $result = update_all_categories_ctr($id, $catName);
    if($result == true){
        echo "Successful Update";
        header("Location:../admin/category.php");
    }   else{
            echo "fail";
        }
}





?>