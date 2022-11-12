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
  $brand = select_one_contact_ctr($_GET['updateid']);
}

 ?>
  <h1>Update</h1>

<div class="container">

     <form action="../actions/update_brand.php" method="POST">  
        <div class="form-group">
            <input class="form-control" type="text" placeholder="brandname" name="brandname"  value="<?php echo $brand['brand_name'] ?>">
        </div>
        
        <input class="form-control" type="hidden"  name="id" value="<?php echo $brand['brand_id'] ?>">


        <input type="submit" name="updateButton">
    </form>
</div>
</body>
</html>