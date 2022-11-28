<?php
require('../controllers/product_controller.php');

//check if search button is clicked
if (isset($_GET['search'])){
    $term = $_GET['searchTerm'];
    if(!empty($term)){
        header("location: ../view/product_search_result.php?searchTerm=$term");
    }
}
else{
    echo "unable to search";
}
?>