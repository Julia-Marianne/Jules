<?php
//connect to database class
require("../settings/db_class.php");

/**
*Customer class to handle all functions 
*/
/**
 *@author Julia-Marian Hudson
 *
 */

class product_class extends db_connection
{
	//--INSERT--//
	function addBrand_cls($brandName){
		$sql= "INSERT INTO `brands`( `brand_name`) VALUES ('$brandName')";
		return $this->db_query($sql);
	}
	function insert_category_cls($catName){
		$sql= "INSERT INTO `categories`( `cat_name`) VALUES ('$catName')";
		return $this->db_query($sql);
		//returns an associative array
	}
	function insert_product_cls($productTitle, $productPrice, $productDesc, $productKey, $brandName, $catName,){
		$sql= "INSERT INTO `products`(`product_title`,`product_price`,`product_desc`,`product_keywords`, `product_brand`,`product_cat`) VALUES ('$productTitle', '$productPrice', '$productDesc', '$productKey', '$brandName', '$catName')";
		return $this->db_query($sql);
		//returns an associative array
	}

	//--SELECT ALL RECORDs--//
	function get_record_by_brand_cls(){
		$sql= "SELECT * FROM `brands`";
		return $this->db_fetch_all($sql);
		//returns an associative array
	}

	function select_all_categories_cls(){
		$sql= "SELECT * FROM `categories`";
		return $this->db_fetch_all($sql);
		//returns an associative array
	}

	function select_all_product_cls(){
		$sql= "SELECT * FROM `products`";
		return $this->db_fetch_all($sql);
		//returns an associative array
	}

	//--Search all--//
	function search_products_cls(){
		$sql = "SELECT * FROM `products` WHERE `product_title` LIKE '%$%'";
		return $this ->db_fetch_all($sql);
		//return $sql;
	}
	

	

	//--UPDATE--//
	function update_all_records_cls($id,$brandName){
	$sql= "UPDATE brands set brand_name = '$brandName'  where brand_id ='$id' ";
	return $this->db_query($sql);
  }
  function update_all_categories_cls($id,$catName){
	$sql= "UPDATE categories set cat_name = '$catName'  where cat_id ='$id' ";
	return $this->db_query($sql);
  }

  function update_all_product_cls($id, $productTitle, $productPrice, $productDesc, $productKey, $brandName, $catName){
	$sql= "UPDATE products set `product_title`='$productTitle',`product_price`='$productPrice',`product_desc`='$productDesc',`product_keywords`='$productKey', `product_brand`='$brandName', `product_cat`='$catName'  where product_id ='$id' ";
	return $this->db_query($sql);
  }


	  
	//--DELETE--//
	  function delete_all_records_cls($id){
	  $sql= "DELETE FROM brands where brand_id = '$id' ";
	  return $this->db_query($sql);
	  }
	function delete_all_categories_cls($id){
	  $sql= "DELETE FROM categories where cat_id = '$id' ";
	  return $this->db_query($sql);
	}

	function select_one_contact_cls($id){
		  // return array or false
		// return associative array or false
			  return $this->db_fetch_one("SELECT * from brands where brand_id='$id'");
		  }
  
	  
	function select_one_category_cls($id){
  
		  // return array or false
		// return associative array or false
			  return $this->db_fetch_one("SELECT * from categories where cat_id='$id'");
	}

	function select_one_product_cls($id){
  
		// return array or false
	  // return associative array or false
			return $this->db_fetch_one("SELECT * from products where product_id='$id'");
  }
  


}
?>