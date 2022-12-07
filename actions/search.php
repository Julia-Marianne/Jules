<?php

//check if button 'seaech' is clicked
if (isset($_GET['search'])){
    $term = $_GET['searchTerm'];
    if(!empty($term)){
        header("location: ../view/product_search_result.php?searchTerm=$term");
    }
}
?>
              