<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
		require('../controllers/product_controller.php');
        
		
	?>

    <h1>Product</h1>

	<form action="../actions/add_product.php" method="POST">
		<!-- select all categories and brand -->
	<!--This creates a drop down list
	//The value(which the user does not see) is used to send the identity of the element
	//if you want to do anything java script related you use the id
	//so if you decide to go the normal way just use name
	//when using java script you can use the id
	//if java script is handling the request, then theres no need for the form action
	to get element from the page you use get element by id-->

		<input type="text" name="ptitle" placeholder="enter the product name" id="ptitle">
		<input type="text" name="pprice" placeholder="enter the product price" id="pprice">
		<input type="text" name="pdesc" placeholder="enter the product description" id="pdesc">
		<input type="text" name="pkeyword" placeholder="enter product keywords" id="pkeyword">

		<select name= "brandname" aria-placeholder="brand" >
                      <option selected>select Brand</option>
                        <?php
                        $result1= get_record_by_brand_ctr();
                        $i=0;
                        while($i<count($result1)){
                        ?>
                         <option value ="<?php echo $result1[$i]['brand_id'];?>"><?php echo $result1[$i]['brand_name'];?></option>
                         <?php
                         $i++;  
                        }
                        ?>
                      </select>

					  <select name= "catname" aria-placeholder="category">
                      <option selected>select category</option>
                        <?php
                        $result= select_all_categories_ctr();
							
                        $i=0;
                        while($i<count($result)){
                        ?>
                         <option value ="<?php echo $result[$i]['cat_id'];?>"><?php echo $result[$i]['cat_name'];?></option>
                         <?php
                         $i++;  
                        }
                        ?>
                      </select>

		<!-- <select name="brandname" id="mybrand">
			<option value="1">Brand 1</option>
			<option value="2">Brand 2</option>
			<option value="3">Brand 3</option>
			<option value="4">Brand 4</option>
		</select>

		<select name="catname" id="mycat">
			<option value="1">Cat 1</option>
			<option value="2">Cat 2</option>
			<option value="3">Cat 3</option>
			<option value="4">Cat 4</option>
		</select> -->
		

		<button type="submit" name="submit">Submit</button>
		<!--//onclick="callMeforAjax()"-->

</form>

<?php 
        $result = select_all_product_ctr();
        foreach($result as $record ){
            {
                $id = $record['product_id'];
				$productTitle = $record['product_title'];
				$productPrice = $record['product_price'];
				$productDesc = $record['product_desc'];
				$productKey = $record['product_keywords'];
				$brandName = $record['product_brand'];
				$catName = $record['product_cat'];
               
                echo '<tr><th scope="row">'
    .$id.' </th>
    <td>'.$productTitle.' '.$productPrice.' '.$productDesc.' '.$productKey.' '.$brandName.' '.$catName.'</td>
   
    <td>
                        <button class="btn btn-primary"><a href="../admin/updateProductForm.php?updateid='.$id.'" class="text-light">Update</a></button>
                        </td> <br>
  </tr>';};
            }



    ?>



</body>
</html>


<!-- <script type="text/javascript">
	function callMeforAjax(){
		//to stop the form from submitting
		event.preventDefault();

		//collect form data
		//goes through document for php it goes through request(GET AND POST variables)
		//NB:refreshing is not enough in java script because of the cache
		//if youre using jquery and you want to get the content you use .val and not .value like jave script

		//collect form data
		let myname = document.getElementById('ptitle').value;

		var mydrop = document.getElementById('mybrand').value;

		//send http request to action page for processing
		alert(mydrop);
	}
</script> -->

<!--ajax is the technology in java script that helps you send an http request-->

