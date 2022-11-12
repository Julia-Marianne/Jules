<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
	<?php
		require('../controllers/product_controller.php');
        $result = select_all_categories_ctr();
		
	?>

    <h1>Categories</h1>

	<form action="../actions/add_category.php" method="POST">
		<input type="text" name="catname" placeholder="enter your category name" id="catname" required>
		<input type="submit" name="enter">
	</form>
    
	<a href="../view/home.php">home</a> <br><br>

    <?php 
        
        foreach($result as $record ){
            {
                $id = $record['cat_id'];
                $catName = $record['cat_name'];
               
                echo '<tr><th scope="row">'
    .$id.' </th>
    <td>'.$catName.'</td>
   
    <td>
                        <button class="btn btn-primary"><a href="../admin/updateCatform.php?updateid='.$id.'" class="text-light">Update</a></button>
                        </td> <br>
  </tr>';};
            }



    ?>
	
</body>
</html>