<?php
//connect to the product class
include("../classes/product_class.php");

//sanitize data

//--INSERT--//

function addBrand_ctr($brandName){
    // Creates an instance of the product class and appends it to $brands
    $brands = new product_class();
    // Calling insert record method in the product class and returns true or false
    return $brands->addBrand_cls($brandName);
}
function insert_category_ctr($catName){
    // Creates an instance of the product class and appends it to $brands
    $brands = new product_class();
    // Calling insert record method in the product class and returns true or false
    return $brands->insert_category_cls($catName);
}
function insert_product_ctr($productTitle, $productPrice, $productDesc, $productKey, $brandName, $catName){
    // Creates an instance of the product class and appends it to $brands
    $brands = new product_class();
    // Calling insert record method in the product class and returns true or false
    return $brands->insert_product_cls($productTitle, $productPrice, $productDesc, $productKey, $brandName, $catName);
}

//--SELECT--//
function get_record_by_brand_ctr(){
    // Creates an instance of the product class and appends it to $product
    $brands = new product_class();
    // Calling select all records method in the product class and returns true or false
    return $brands->get_record_by_brand_cls();
}

function select_all_categories_ctr(){
    // Creates an instance of the product class and appends it to $product
    $brands = new product_class();
    // Calling select all records method in the product class and returns true or false
    return $brands->select_all_categories_cls();
}
function select_all_product_ctr(){
    // Creates an instance of the product class and appends it to $brands
    $brands = new product_class();
    // Calling insert record method in the product class and returns true or false
    return $brands->select_all_product_cls();
}
function search_products_ctrl(){

    $brands = new product_class();
  
    return $brands-> search_products_cls();
  
  }


//--UPDATE--//
function update_all_records_ctr($id, $brandName){
    // Creates an instance of the product class and appends it to $product
    $brands = new product_class();
    // Calling select all records method in the product class and returns true or false
    return $brands->update_all_records_cls($id, $brandName);
}

function update_all_categories_ctr($id, $catName){
    // Creates an instance of the product class and appends it to $product
    $brands = new product_class();
    // Calling select all records method in the product class and returns true or false
    return $brands->update_all_categories_cls($id, $catName);
}

function update_all_product_ctr($id, $productTitle, $productPrice, $productDesc, $productKey, $brandName, $catName){
    // Creates an instance of the product class and appends it to $product
    $brands = new product_class();
    // Calling select all records method in the product class and returns true or false
    return $brands->update_all_product_cls($id, $productTitle, $productPrice, $productDesc, $productKey, $brandName, $catName);
}

//DELETE
function delete_all_records_ctr($id){
    // Creates an instance of the product class and appends it to $product
    $brands = new product_class();
    // Calling select all records method in the product class and returns true or false
    return $brands->delete_all_records_cls($id);
}

function delete_all_categories_ctr($id){
    // Creates an instance of the product class and appends it to $product
    $brands = new product_class();
    // Calling select all records method in the product class and returns true or false
    return $brands->delete_all_categories_cls($id);
}

//--SELECT ONE--//
function select_one_contact_ctr($id){
    // Creates an instance of the product class and appends it to $product
    $brands = new product_class();
    // Calling select all records method in the product class and returns true or false
    return $brands->select_one_contact_cls($id);
}

function select_one_category_ctr($id){
    // Creates an instance of the product class and appends it to $product
    $brands = new product_class();
    // Calling select all records method in the product class and returns true or false
    return $brands->select_one_category_cls($id);
}

function select_one_product_ctr($id){
    // Creates an instance of the product class and appends it to $product
    $brands = new product_class();
    // Calling select all records method in the product class and returns true or false
    return $brands->select_one_product_cls($id);
}

// selecting a product by its brand
function select_by_category_ctr($cat){
    // Creates an instance of the product class and appends it to $brands
    $brands = new product_class();
    // Calling insert record method in the product class and returns true or false
    return $brands->select_by_category_cls($cat);
}

function countproducts_controller(){
    $product = new product_class();
    $countproducts = $product->countproducts_cls();
    if($countproducts){
        return $countproducts;
    }else{
        return false;
    }  
}

function countbrands_controller(){
    $brand = new product_class();
    $countbrands = $brand->countbrands_cls();
    if($countbrands){
        return $countbrands;
    }else{
        return false;
    }  
}

function countcategories_controller(){
    $category = new product_class();
    $countcategories = $category->countcategories_cls();
    if($countcategories){
        return $countcategories;
    }else{
        return false;
    }  
}

function countorders_controller(){
    $cart = new product_class();
    $countorders = $cart->countorders_cls();
    if ($countorders){
        return $countorders;
    }else{
        return false;
    }
}

function displayorders_controller(){
    $cart = new product_class();
    $order = $cart->displayorders_cls();
    if ($order){
        return $order;
    }else{
        return false;
    }
}



?>