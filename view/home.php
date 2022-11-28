<?php	
	require("../settings/core.php");
  require('../controllers/product_controller.php');
  //require('../controllers/cart_controller.php');
//including menu
include('menu.php');

?>
<section class="home-section home-fade home-full-height" id="home">
<div class="main">
          
  <section class="module-small" id="products">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <h2 class="module-title font-alt">Our Products</h2>
        </div>

        <form class="form-inline" method="get" action="../actions/search.php">
          <input class="form-control" type="search" placeholder="Search"  name="searchTerm">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search"><i class ="fa fa-search"></i></button>
        </form>
      </div>
      
      <div class="row multi-columns-row">
        
        <?php
          //SELECT ALL PRODUCT TO VIEW
          $products=select_all_product_ctr();?>

          <h1 style='margin-top: 60px; margin-left: 600px; color: #6f42c1'>Product List</h1>
<?php
    foreach($products as $x){
        echo 
        "
        
        <a href='./single_product.php?id={$x['product_id']}'>
        <div class='card' style='width: 18rem; display: inline-block; margin-bottom: 20px;'>
            <div class='card-body'>
            <img style='height: 200px; width: 200px' src='{$x['product_image']}' alt='Card image cap'>
            <h5 style='color: black;' class='card-title'>{$x['product_title']}</h5>
            <h6 class='card-subtitle mb-2 text-muted'>{$x['product_price']}</h6>
            <p style='color: grey;' class='card-text'>{$x['product_desc']}</p>

            <a href='../actions/cart_process.php?id={$x['product_id']}' class='btn btn-primary'>Add to Cart</a>
            <a href='../actions/managecartquantity.php?id={$x['product_id']}' class='btn btn-primary'>Manage Quantity</a>
         
            </div>
            
        </div>
        </a>
       
    ";}
      
          //GENERATE IP ADDRESS OF THE USER
          $ipadd=getRealIpAddr();

          //CHECK IF USER IS LOGGED IN
          if(isset($_SESSION['user_id'])) {
            $cid=$_SESSION['user_id'];
          }
          else{$cid=null;}
          
          $qty=1;

          $limit = 16;
          $num_products=count($result);
          $pages=ceil($num_products/$limit);
          //LOOP THROUGH ALL PRODUCTS FOR DISPLAY
          foreach ($result as $record){
            $id=$product['product_id'];

        ?>
        

        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="shop-item">
            <div class="shop-item-image"><img style='height:250px;width:260px;overflow:hidden;' src=<?php echo $product['product_image'];?> />
              <div class="shop-item-detail">
                <?php if(True ) {?>
                <a class="btn btn-round btn-b" href="<?php echo '../actions/add_to_cart.php?pid='.$id.'&ipadd='.$ipadd.'&cid='.$cid.'&qty='.$qty ?>"><span class="icon-basket"></span></a>
                <a class="btn btn-round btn-b" href="single_product.php?id=<?= $id;?>" ><i class="far fa-eye"></i></a>
                <?php } else{?>
                  <a class="btn btn-round btn-b" href="single_product.php?id=<?= $id;?>" ><i class="far fa-eye"></i></a>
                <?php } ?>
              </div>   
            </div>
            <?php if(True ) {?>
            <div class="cart" style="padding-top:5%">
              <a class="btn btn-round btn-b" href="<?php echo '../actions/add_to_cart.php?pid='.$id.'&ipadd='.$ipadd.'&cid='.$cid.'&qty='.$qty ?>"><span class="icon-basket">Add To Cart</span></a>
            </div>
            <!-- ADD TO CART -->
            <?php }else{?>
            <div class="cart" style="padding-top:5%; color:red">
                <a class="btn btn-danger btn-round" href="">Out of Stock</a>
            </div>
            <?php }?>
              <h4 class="shop-item-title font-alt"><a href="single_product.php?id=<?= $id;?>" ><?= $product['product_title']?></a></h4> <?= $product['product_price']?>
            </div>
        </div>
          
          <?php }; ?>
      </div> 
      
      <!-- pagination -->
      
      
  </section>
        
  
        
  <hr class="divider-w">
  
</div>
<hr class="divider-w">
<!-- including a staple footer -->
<?php include('../views/footer.php');?>