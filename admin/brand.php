<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
	<?php
		require('../controllers/product_controller.php');
        $result = get_record_by_brand_ctr();
		
	?>

    <h1>Brands</h1>

	<form action="../actions/add_brand.php" method="POST">
		<input type="text" name="brandname" placeholder="enter your brandname" id="brandname" required>
		<button type="submit" name="enter">Submit</button>
	</form>
    
	<a href="../view/home.php">home</a> <br><br>

    <?php 
        
        foreach($result as $record ){
            {
                $id = $record['brand_id'];
                $brandName = $record['brand_name'];
               
                echo '<tr><th scope="row">'
    .$id.' </th>
    <td>'.$brandName.'</td>
   
    <td>
                        <button class="btn btn-primary"><a href="../admin/updateBform.php?updateid='.$id.'" class="text-light">Update</a></button>
                        </td> <br>
  </tr>';};
            }



    ?>
	
</body>
</html>