<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
 require('../controllers/product_controller.php');


if(isset($_GET['updateid'])){
  $products = select_one_product_ctr($_GET['updateid']);
}

 ?>
  <h1>Update</h1>

<div class="container">

     <form action="../actions/update_product.php" method="POST">  
        <div class="form-group">
            <input class="form-control" type="text" placeholder="ptitle" name="ptitle"  value="<?php echo $products['product_title'] ?>">
            <input class="form-control" type="text" placeholder="pprice" name="pprice"  value="<?php echo $products['product_price'] ?>">
            <input class="form-control" type="text" placeholder="pdesc" name="pdesc"  value="<?php echo $products['product_desc'] ?>">
            <input class="form-control" type="text" placeholder="pkeyword" name="pkeyword"  value="<?php echo $products['product_keywords'] ?>">
            <input class="form-control" type="text" placeholder="brandname" name="brandname"  value="<?php echo $products['product_brand'] ?>">
            <input class="form-control" type="text" placeholder="catname" name="catname"  value="<?php echo $products['product_cat'] ?>">
        </div>
        
        <input class="form-control" type="hidden"  name="id" value="<?php echo $products['product_id'] ?>">


        <input type="submit" name="updateButton">
    </form>
</div>
</body>
</html>