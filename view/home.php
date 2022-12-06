<?php	
	require("../settings/core.php");
  require('../controllers/product_controller.php');
  //require('../controllers/cart_controller.php');
//including menu
// include('menu.php');



?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Shea Jo</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="../css/linearicons.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/themify-icons.css">
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/owl.carousel.css">
	<link rel="stylesheet" href="../css/nice-select.css">
	<link rel="stylesheet" href="../css/nouislider.min.css">
	<link rel="stylesheet" href="../css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="../css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="../css/magnific-popup.css">
	<link rel="stylesheet" href="../css/main.css">
</head>

<body>

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="home.php"><img src="img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="home.php">Home</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Shop</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="all_product.php">Product Display</a></li>
									<li class="nav-item"><a class="nav-link" href="single_product.php">Single Product</a></li>
									<li class="nav-item"><a class="nav-link" href="payment.php">Product Checkout</a></li>
									<li class="nav-item"><a class="nav-link" href="cart.php">Shopping Cart</a></li>
									<li class="nav-item"><a class="nav-link" href="confirm.php">Confirmation</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Login/Register</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="../login/login.php">Login</a></li>
									<li class="nav-item"><a class="nav-link" href="../login/register.php">Register</a></li>	
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="cart.php" class="cart"><span class="ti-bag"></span></a></li>
							<li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="Search Here">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
	<!-- End Header Area -->

	<!-- start banner Area -->
	<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">
					<div class="active-banner-slider owl-carousel">
						<!-- single-slide -->
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
									<h1>Shea Jo <br>Collection!</h1>
									<p>For your luxurious shea butter, shea and coconut oils and african black soaps.</p>
									<div class="add-bag d-flex align-items-center">
										<a class="add-btn" href="cart.php"><span class="lnr lnr-cross"></span></a>
										<span class="add-text text-uppercase">Add to cart</span>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="../img/banner/banner-img.png" alt="">
								</div>
							</div>
						</div>
						<!-- single-slide -->
						<div class="row single-slide">
							<div class="col-lg-5">
								<div class="banner-content">
									<h1>Shea Jo <br>Collection!</h1>
									<p>For your luxurious shea butter, shea and coconut oils and african black soaps.</p>
									<div class="add-bag d-flex align-items-center">
										<a class="add-btn" href="cart.php"><span class="lnr lnr-cross"></span></a>
										<span class="add-text text-uppercase">Add to cart</span>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="../img/banner/banner-img.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- start features Area -->
	<section class="features-area section_gap">
		<div class="container">
			<div class="row features-inner">
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="../img/features/f-icon1.png" alt="">
						</div>
						<h6>Free Delivery</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="../img/features/f-icon2.png" alt="">
						</div>
						<h6>Return Policy</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="../img/features/f-icon3.png" alt="">
						</div>
						<h6>24/7 Support</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="../img/features/f-icon4.png" alt="">
						</div>
						<h6>Secure Payment</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end features Area -->



	<?php
          //SELECT ALL PRODUCT TO VIEW
          $products=select_all_product_ctr();?>

	<!-- start product Area -->
	<section class="owl-carousel active-product-area section_gap">
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Latest Products</h1>
						</div>
					</div>
				</div>

			<?php foreach($products as $x) : ?>
        
				<div class="row">
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="../img/product/p1.jpg" alt="">
							<div class="product-details">
								<h6><?php echo $x['product_title']?></h6>
								<h6><?php echo $x['product_desc']?></h6>
								<div class="price">
									<h6><?php echo $x['product_price']?></h6>
								</div>
								<div class="prd-bottom">
									
									<a href="../actions/cart_process.php?id={$x['product_id']}" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to cart</p>
									</a>
									<a href="single_product.php?id" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>		
				</div>
			<?php endforeach; ?>
			</div>
		</div>
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Coming Products</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end product Area -->

	<!-- start footer Area -->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>About Us</h6>
						<p>
							Shea Jo is a Ghanaian skincare brand that reduce blemishes.
						</p>
					</div>
				</div>
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Newsletter</h6>
						<p>Stay update with our latest</p>
						<div class="" id="mc_embed_signup">

							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="form-inline">

								<div class="d-flex flex-row">

									<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
									 required="" type="email">


									<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
									<div style="position: absolute; left: -5000px;">
										<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
									</div>

									<!-- <div class="col-lg-4 col-md-4">
												<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
											</div>  -->
								</div>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget mail-chimp">
						<h6 class="mb-20">Instragram Feed</h6>
						<ul class="instafeed d-flex flex-wrap">
							<li><img src="../img/i1.jpg" alt=""></li>
							<li><img src="../img/i2.jpg" alt=""></li>
							<li><img src="../img/i3.jpg" alt=""></li>
							<li><img src="../img/i4.jpg" alt=""></li>
							<li><img src="../img/i5.jpg" alt=""></li>
							<li><img src="../img/i6.jpg" alt=""></li>
							<li><img src="../img/i7.jpg" alt=""></li>
							<li><img src="../img/i8.jpg" alt=""></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Follow Us</h6>
						<p>Let us be social</p>
						<div class="footer-social d-flex align-items-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<script src="../js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="../js/vendor/bootstrap.min.js"></script>
	<script src="../js/jquery.ajaxchimp.min.js"></script>
	<script src="../js/jquery.nice-select.min.js"></script>
	<script src="../js/jquery.sticky.js"></script>
	<script src="../js/nouislider.min.js"></script>
	<script src="../js/countdown.js"></script>
	<script src="../js/jquery.magnific-popup.min.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="../js/gmaps.min.js"></script>
	<script src="../js/main.js"></script>
</body>

</html>

<?php	
// 	require("../settings/core.php");
//   require('../controllers/product_controller.php');
//   //require('../controllers/cart_controller.php');
// //including menu
// include('menu.php');

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
<!-- <?php include('../views/footer.php');?> -->