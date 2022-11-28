<?php
require('../settings/core.php');
require('../controllers/cart_controller.php');

// initialize a client url which we will use to send the reference to the paystack server for verification
$curl = curl_init();

// set options for the curl session insluding the url, headers, timeout, etc
curl_setopt_array($curl, array(
CURLOPT_URL => "https://api.paystack.co/transaction/verify/{$_GET['reference']}",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => "",
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 30,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => "GET",
CURLOPT_HTTPHEADER => array(
    "Authorization: Bearer sk_live_497a3a223893acf3ff8ecfd4dce1158b2fc9b088",
    "Cache-Control: no-cache",
),
));

// get the response and store
$response = curl_exec($curl);
// if there are any errors
$err = curl_error($curl);
// close the session
curl_close($curl);

// convert the response to PHP object
$decodedResponse = json_decode($response);

// check if the object has a status property and if its equal to 'success' ie. if verification was successful
if(isset($decodedResponse->data->status) && $decodedResponse->data->status === 'success'){
   

    $cus_id = $_SESSION["user_id"];
    $invoice_number = mt_rand();
    $date = date("Y/m/d");
    $status = $decodedResponse->data->status;


    // Inserts into orders
   // $order_id = add_order_controller($cus_id, $invoice_number, $date, $status);



    // Product info

    $product = get_cus_info($cus_id);


    foreach($product as $prod){

        $quantity = $prod["qty"];
        $product_id = $prod["p_id"];

        // add to order details
        $order_details = add_order_details_controller($order_id, $product_id, $quantity);


    }


    $amount = $_GET['amount'];
    $currency = "GHC";

    $Make_payment = add_payment_controller($cus_id, $order_id, $amount, $currency, $date);

    if($Make_payment){

        $delete_from_cart = delete_from_cart_controller($cus_id);

        if($delete_from_cart){
            header("Location: ../view/payment_success.php");
        }else{
            header("Location: ../view/payment_failure.php");
        }
    }

}else{
    // if verification failed
    echo $response;
}

?>