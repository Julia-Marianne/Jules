<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
 <?php
 require('../controllers/product_controller.php');


if(isset($_GET['updateid'])){
  $category = select_one_category_ctr($_GET['updateid']);
}

 ?>
  <h1>Update</h1>

<div class="container">

     <form method="POST"  action="../actions/update_category.php">  
        <div class="form-group">
            <input class="form-control" type="text" placeholder="catname" name="catname"  value="<?php echo $category['cat_name'] ?>">
        </div>

       
        <input class="form-control" type="hidden"  name="id" value="<?php echo $category['cat_id'] ?>">


        <input type="submit" name="updateButton">
    </form>
</div>
</body>
</html>