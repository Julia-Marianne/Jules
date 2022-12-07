<?php
require('../controllers/product_controller.php'); 
session_start();
include_once('menu.php');
if(!isset($_GET['searchTerm'])){
    header("location:../index.php");
}
?>

<link rel="stylesheet" href="../assets/css/products.css">

      
<div class="main">
  <section class="module-small">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <h2 class="module-title font-alt">Search Results</h2>
        </div>
        
        <form class="form-inline" method="get" >
          <input class="form-control" type="search" placeholder="Search"  name="searchTerm">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search"><i class ="fa fa-search"></i></button>
        </form>
      </div>
  
      <?php  
        $product_name=$_GET['searchTerm']. "%";
        $result=search_controller($product_name);
        
        if(!empty($result)){
          foreach ($result as $key => $product){
              $id=$product['product_id'];

      ?>
      

      <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="shop-item">
              <div class="outer">
                <div class="content animated fadeInLeft">
                  <span class="bg animated fadeInDown"><a href="single_product.php?id=<?= $id; ?>">
                      <h5>View</h5>
                    </a></span>
                  <h4><a href="single_product.php?id=<?= $id; ?>"><?= $product['product_title'] ?></a></h4> <?= $product['product_price'] ?></h4>
                  <div class="button">
                    <a href="#">₵<?= $product['product_price'] ?></a><a class="cart-btn" href="<?php echo '../actions/add_to_cart.php?pid=' . $id . '&ipadd=' . $ipadd . '&cid=' . $cid . '&qty=' . $qty ?>" i class="cart-icon ion-bag"></i>ADD TO CART</a>
                  </div>

                </div>
                <img src=<?php echo $product['product_image']; ?> width="300px" class="animated fadeInRight">
              </div>
            </div>
           
      </div>
      <?php }} else {?>
        <div class="alert alert-danger">Sorry nothing was found. Please Try A Different term</div> 
      <?php } ?>  
      
    </div>
  </section>        
</div>
           
<hr class="divider-w">
<?php include('../view/footer.php');?>
