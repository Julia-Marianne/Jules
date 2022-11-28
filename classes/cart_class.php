<?php
require('../settings/db_class.php');

// inherit the methods from Connection

class Cart extends db_connection{
    function add_cart_cls($id, $ipaddress, $customerid, $quantity){
        // return true or false
        return $this->db_query("INSERT into cart(p_id, ip_add, c_id, qty) VALUES ('$id',  '$ipaddress', '$customerid', '$quantity')");
    }

    function select_all_cart_cls(){
        // return array or false
        return $this->db_fetch_all("SELECT * FROM `cart` left join products on p_id = product_id");
    }

    function select_one_cart_cls(){
        // return array or false
        return $this->db_fetch_one("SELECT * FROM `cart` left join products on p_id = product_id");
    }


    function remove_one_cart($id, $ip){
        // return array or false
        return $this->db_query("DELETE FROM cart WHERE p_id =  '$id' and ip_add = '$ip' ");
    }

    function get_qty($id){

        return $this->db_fetch_one("SELECT * FROM cart WHERE p_id = '$id' ");

    }

    function get_quantity($id, $qty){

        return $this->db_query("UPDATE cart set qty='$qty' WHERE p_id = '$id' ");

    }

    function get_total($id){
        return $this->db_fetch_all("SELECT SUM(qty * product_price) as sum FROM cart inner join products on p_id = product_id WHERE c_id = '$id'");
    }

    // function add_order_class($cus_id, $invoice_number, $date, $status){

    //     return $this->final_index("INSERT into orders (customer_id, invoice_no, order_date, order_status) VALUES ('$cus_id', '$invoice_number', '$date', '$status')");
        
    // }

    function get_cus_info_class($cus_id){
        return $this->db_fetch_all("SELECT * FROM cart WHERE c_id = '$cus_id' ");

    }

    function add_order_details_class($order_id, $product_id, $quantity){

        return $this->db_query("INSERT into orderdetails (order_id, product_id, qty) VALUES ('$order_id',  '$product_id', '$quantity')  ");

    }
    

    function add_payment_class($cus_id, $order_id, $amount, $currency, $date){

        return $this->db_query("INSERT into payment (amt, customer_id, order_id, currency, payment_date)  VALUES ('$amount',  '$cus_id', '$order_id', '$currency', '$date' )  ");

    }

    function delete_class($cus_id){

        return $this->db_query("DELETE from cart WHERE c_id = '$cus_id' ");

    }

    function insert_order($cid, $invoice, $date){
        $sql = "INSERT INTO `orders`(`customer_id`, `invoice_no`, `order_date`, `order_status`)
                 VALUES ('$cid','$invoice','$date', 'Success')";
                 
        return $this->db_query($sql);
    }

    function insert_payment($amt, $cid, $oid, $date){
        $sql = "INSERT INTO `payment`(`amt`, `customer_id`, `order_id`, `currency`, `payment_date`) 
        VALUES ('$amt', '$cid', '$oid', 'GHS', '$date')";
    
        return $this->db_query($sql);
    }

    function order_date(){
        $sql = "SELECT order_date FROM orders ORDER BY order_id DESC LIMIT 1";
        
        return $this->db_fetch_one($sql);
    }

    function order_id(){
        $sql = "SELECT order_id FROM orders ORDER BY order_id DESC LIMIT 1";
        
        return $this->db_fetch_one($sql);
    }
}







//  

// /**
//  * This class hanldes all the database functions 
//  */
// require("../settings/db_class.php");

// class cart_class  extends db_connection{


//     function add_cart_cls($pid,$cid,$quant,$ip){
     
//         $sql = "INSERT INTO `cart`(`p_id`, `ip_add`, `c_id`, `qty`) VALUES ('$pid','$ip','$cid','$quant')";
       
//         return $this->query($sql);
//     }

//     function select_cart_cls($cid){
//         $sql = "SELECT * FROM `cart` WHERE `c_id` = $cid ";

//         return $this->fetch($sql);
//     }

//     function delete_from_cart_cls($pid,$cid){
//         $sql= "DELETE FROM `cart` WHERE `p_id`='$pid' AND `c_id`=$cid";

//         return $this->query($sql);

//     }

//     function increase_cart_cls($pid,$cid){
//         $sql = "UPDATE `cart` SET qty = (qty + 1) WHERE `p_id`='$pid' AND `c_id`='$cid'";
//         return $this->query($sql);
//     }
    
//     function decrease_cart_cls($pid,$cid){
//         $sql = "UPDATE `cart` SET qty =(qty - 1)WHERE `p_id`='$pid' AND `c_id`='$cid'";
//         return $this->query($sql);
//     }

//     function get_cart_count_cls($cid){
//         return $this->db_count(select_cart_cls($cid));
//     }

//     function get_user_cart_cls($cid){
//         $sql ="SELECT * FROM `cart` inner join `products` on 	cart.p_id=products.product_id";
//         return $this->fetch($sql);
//     }
//     function get_user_cls($cid){
// 		$sql = "SELECT * FROM customer WHERE customer_id = '$cid' LIMIT 1";
// 		$data =$this->fetchOne($sql);

// 		return $data;
// 	}
//    function insert_pay_cls($amount, $email){
//    $sql = "INSERT INTO `pay`(`email`,`amount`) VALUES ('$email','$amount')";
       
//    return $this->query($sql);

 
//    }

//    function insert_payment_cls($amount, $cid,$order_id,$currency,$p_date){
//     $sql = "INSERT INTO `payment`( `amt`, `customer_id`, `order_id`, `currency`, `payment_date`) VALUES ('$amount','$cid','$order_id','$currency','$p_date')";
        
//     return $this->query($sql);
 
  
//     }


//    function insert_order_cls( $customer_id,$invoice_no,$order_date,$order_stat){
//     $sql= "INSERT INTO `orders`( `customer_id`, `invoice_no`, `order_date`, `order_status`) VALUES ('$customer_id','$invoice_no','$order_date','$order_stat')";
//     return $this->query($sql);
//     }

//     function get_last_order_cls($invoice){
//     $sql ="SELECT * FROM `orders` WHERE `invoice_no`= '$invoice'";
//     $data =$this->fetchOne($sql);
//     return $data;
//     }

//     function select_cart_user_cls($cid){
//         $sql = "SELECT * FROM `cart`  WHERE `c_id` = '$cid' ";
// 		$data =$this->fetch($sql);
//         return $data;
        
//     }

//     function insert_order_details_cls($order_id,$product_id,$qty){
//         $sql= "INSERT INTO `orderdetails`(`order_id`, `product_id`, `qty`) VALUES ('$order_id','$product_id','$qty')";
//         return $this->query($sql);
//     }

//     function delete_user_from_cart_cls($cid){
//         $sql = "DELETE FROM `cart` WHERE `c_id`='$cid'";
//         return $this->query($sql);
//     }