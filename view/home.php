<?php
require('../controllers/product_controller.php');
require('../controllers/cart_controller.php');
session_start();
//including menu
include('menu.php');
?>

<link rel="stylesheet" href="../assets/css/products.css">

<section class="home-section home-fade home-full-height" id="home">
  <div class="hero-slider">
    <ul class="slides">
      <li class="bg-dark-30 bg-dark shop-page-header" style="background-image:url(&quot;../assets/images/landing/sbg1.jpeg&quot;);">
        <div class="titan-caption">
          <div class="caption-content">
            <div class="font-alt mb-30 titan-title-size-1">Shea Jo</div>
            <div class="font-alt mb-40 titan-title-size-1">Our Online Shea Shop</div><a class="section-scroll btn btn-border-w btn-round" href="#latest">More</a>
          </div>
        </div>
      </li>
      <li class="bg-dark-30 bg-dark shop-page-header" style="background-image:url(&quot;../assets/images/landing/sbg2.jpeg&quot;);">
        <div class="titan-caption">
          <div class="caption-content">
            <div class="font-alt mb-30 titan-title-size-1"> Shea Jo</div>
          </div>
        </div>
      </li>
      <li class="bg-dark-30 bg-dark shop-page-header" style="background-image:url(&quot;../assets/images/landing/sbg3.jpeg&quot;);">
        <div class="titan-caption">
          <div class="caption-content">
            <div class="font-alt mb-30 titan-title-size-1">Shea Jo</div>
            <div class="font-alt mb-40 titan-title-size-3">Our Online Shea Shop</div><a class="section-scroll btn btn-border-w btn-round" href="#latest">More</a>
          </div>
        </div>
      </li>
    </ul>
  </div>
</section>

<div class="main">

  <section class="module-small" id="products">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <h2 class="module-title font-alt">Our Products</h2>
        </div>

        <form class="form-inline" method="get" action="../actions/search.php">
          <input class="form-control" type="search" placeholder="Search" name="searchTerm">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search"><i class="fa fa-search"></i></button>
        </form>
      </div>

      <div class="row multi-columns-row">

        <?php
        //SELECT ALL PRODUCT TO VIEW
        $products = select_all_products_controller();

        //GENERATE IP ADDRESS OF THE USER
        $ipadd = getRealIpAddr();
        //CHECK IF USER IS LOGGED IN
        if (isset($_SESSION['user_id'])) {
          $cid = $_SESSION['user_id'];
        } else {
          $cid = null;
        }

        $qty = 1;

        $limit = 16;
        $num_products = count($products);
        $pages = ceil($num_products / $limit);
        //LOOP THROUGH ALL PRODUCTS FOR DISPLAY
        foreach ($products as $product) {
          $id = $product['product_id'];

        ?>



          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="shop-item">
              <div class="outer">
                <div class="content animated fadeInLeft">
                  <span class="bg animated fadeInDown"><a href="single_product.php?id=<?= $id; ?>">
                      <h5>View</h5>
                    </a></span>
                  <h4><a href="single_product.php?id=<?= $id; ?>"><?= $product['product_title'] ?></a></h4> <?= $product['product_price'] ?></h4>
                  <p>Shadow your real allegiance to New York's Pirate radio with this cool cap featuring the Graphic Know Wave logo.</p>
                  <div class="button">
                    <a href="#">₵<?= $product['product_price'] ?></a><a class="cart-btn" href="<?php echo '../actions/add_to_cart.php?pid=' . $id . '&ipadd=' . $ipadd . '&cid=' . $cid . '&qty=' . $qty ?>" i class="cart-icon ion-bag"></i>ADD TO CART</a>
                  </div>

                </div>
                <img src=<?php echo $product['product_image']; ?> width="300px" class="animated fadeInRight">
              </div>
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
<?php include('../view/footer.php'); ?>