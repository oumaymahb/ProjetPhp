<?php
include_once'../../controllers/ProduitController.php';
$produit=new ProduitController();
$res=$produit-> getAllProduit();
if(isset($_GET['id'])){
 		$res=$produit->getProduitById($_GET['id']);
 	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Single Product</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../../core/styles/bootstrap4/bootstrap.min.css">
<link href="../../core/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../../core/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../../core/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="../../core/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="../../core/styles/product_styles.css">
<link rel="stylesheet" type="text/css" href="../../core/styles/product_responsive.css">

</head>

<body>

<div class="super_container">
	
	<!-- Header -->
	
	<header class="header">

		<!-- Top Bar -->

	<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="../../core/images/phone.png" alt=""></div>+216 54 776 499</div>
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="../../core/images/mail.png" alt=""></div><a href="../../core/mailto:fastsales@gmail.com">oneTech95@gmail.com</a></div>
						<div class="top_bar_content ml-auto">
							
							<div class="top_bar_user">
								<div class="user_icon"><img src="../../core/images/user.svg" alt=""></div>
								<div><a href="SignUpView.php">Sign Up</div>
									<div class="user_icon"><img src="../../core/images/user.svg" alt=""></div>
								<div><a href="SignInView.php">Sign In</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>
		<!-- Header Main -->

		<div class="header_main">
			<div class="container">
				<div class="row">

					<!-- Logo -->
					<div class="col-lg-2 col-sm-3 col-3 order-1">
						<div class="logo_container">
							<div class="logo"><a href="index.php">SoftWare</a></div>
						</div>
					</div>

					<!-- Search -->
					<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
						<div class="header_search">
							<div class="header_search_content">
								<div class="header_search_form_container">
									<form action="#" class="header_search_form clearfix">
										<input type="search" required="required" class="header_search_input" placeholder="Search for products...">
										<div class="custom_dropdown">
											<div class="custom_dropdown_list">
												<span class="custom_dropdown_placeholder clc">All Categories</span>
												<i class="fas fa-chevron-down"></i>
												<ul class="custom_list clc">
													<li><a class="clc" href="../../core/#">All Categories</a></li>
													<li><a class="clc" href="../../core/#">Computers</a></li>
													<li><a class="clc" href="../../core/#">Laptops</a></li>
													<li><a class="clc" href="../../core/#">Cameras</a></li>
													<li><a class="clc" href="../../core/#">Hardware</a></li>
													<li><a class="clc" href="../../core/#">Smartphones</a></li>
												</ul>
											</div>
										</div>
										<button type="submit" class="header_search_button trans_300" value="Submit"><img src="../../core/images/search.png" alt=""></button>
									</form>
								</div>
							</div>
						</div>
					</div>

					<!-- Wishlist -->
					<div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
						<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
							<div class="wishlist d-flex flex-row align-items-center justify-content-end">
								<div class="wishlist_icon"><img src="../../core/images/heart.png" alt=""></div>
								<div class="wishlist_content">
									<div class="wishlist_text"><a href="../../core/#">Wishlist</a></div>
									<div class="wishlist_count">115</div>
								</div>
							</div>

							<!-- Cart -->
							<div class="cart">
								<div class="cart_container d-flex flex-row align-items-center justify-content-end">
									<div class="cart_icon">
										<img src="../../core/images/cart.png" alt="">
										<div class="cart_count"><span>10</span></div>
									</div>
									<div class="cart_content">
										<div class="cart_text"><a href="../../core/#">Cart</a></div>
										<div class="cart_price">$85</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="main_nav_content d-flex flex-row">

							<!-- Categories Menu -->

							<div class="cat_menu_container">
								<div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
									<div class="cat_burger"><span></span><span></span><span></span></div>
									<div class="cat_menu_text">categories</div>
								</div>

									<ul class="cat_menu">
									<li onclick="window.location.href='index.php?clicked=Computers et Laptops'"><a >Computers & Laptops <i class="fas fa-chevron-right ml-auto"></i></a></li>
									<li onclick="window.location.href='index.php?clicked=Cameras et Photos'"><a href="#">Cameras & Photos<i class="fas fa-chevron-right"></i></a></li>
									
									
									<li onclick="window.location.href='index.php?clicked=TV et Audio'"><a href="#">TV & Audio<i class="fas fa-chevron-right"></i></a></li>
									
									<li onclick="window.location.href='index.php?clicked=Storage'"><a href="#">Storage<i class="fas fa-chevron-right"></i></a></li>
									<li onclick="window.location.href='index.php?clicked=Accessories'"><a href="#">Accessories<i class="fas fa-chevron-right"></i></a></li>
								
								   	<li><a href="#"><i class="fas fa-chevron-right"></i></a></li>
								    <li><a href="#"><i class="fas fa-chevron-right"></i></a></li>
								    <li><a href="#"><i class="fas fa-chevron-right"></i></a></li>
								    <li><a href="#"><i class="fas fa-chevron-right"></i></a></li>
								</ul>
							</div>
							<!-- Main Nav Menu -->

							<div class="main_nav_menu ml-auto">
								<ul class="standard_dropdown main_nav_dropdown">
									<li><a href="#">Home<i class="fas fa-chevron-down"></i></a></li>
									<li class="hassubs">
										<a href="#">Super Deals<i class="fas"></i></a>
										
									</li>
									<li class="hassubs">
										<a href="RateMeView.php">Rate Me<i class="fas "></i></a>
									</li>
									<li class="hassubs">
										<a href="AboutUs.php">About Us</a>
										</li>
									<li><a href="ContactView.php">Contact<i class="fas fa-chevron-down"></i></a>
									<li><i class="fas"></i></a></li>
									</li>
								</ul>
							</div>

							
							<!-- Menu Trigger -->

							<div class="menu_trigger_container ml-auto">
								<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
									<div class="menu_burger">
										<div class="menu_trigger_text">menu</div>
										<div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</nav>
		
		<!-- Menu -->

		<div class="page_menu">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="page_menu_content">
							
							<div class="page_menu_search">
								<form action="#">
									<input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
								</form>
							</div>
							
							
							<div class="menu_contact">
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="../../core/images/phone_white.png" alt=""></div>+38 068 005 3570</div>
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="../../core/images/mail_white.png" alt=""></div><a href="../../core/mailto:fastsales@gmail.com">fastsales@gmail.com</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</header>

	<!-- Single Product -->

	<div class="single_product">
		<div class="container">
			<?php

			if($res!=null){
                     $d=$produit->getCat($res['id_cat']);      
                                      ?>
			<div class="row">

				<!-- Images -->
				

				<!-- Selected Image -->
				<div class="col-lg-5 order-lg-2 order-1">
					<div class="image_selected"><img src="<?php echo $res['image'];?>" style="width: 200px;height: 200px;"></div>
				</div>

				<!-- Description -->
				<div class="col-lg-7 order-3">
					<div class="product_description">
						<div class="product_category"><?php echo $d['lib_cat'];?></div>
						<div class="product_name"><?php echo $res['libelle_produit'];?></div>
						<div class="rating_r rating_r_4 product_rating"><i></i><i></i><i></i><i></i><i></i></div>
						<div class="product_text"><p><h5>DESCRIPTION :</h5> <br><?php echo $res['description_produit'];?>.</p></div>
						<div class="order_info d-flex flex-row">
							<form action="#">
								<div class="clearfix" style="z-index: 1000;">

									<!-- Product Quantity -->
									<div class="product_quantity clearfix">
										<span>Quantity: </span>
										<input id="quantity_input" type="text" pattern="[0-9]*" value="<?php echo $res['stock_produit'];?>">
										
									</div>

									<!-- Product Color -->
									<ul class="product_color">
										<li>
											<span>Dispo: </span>
											<?php if($res['dispo']==1){?>
											<div class="color_mark_container">YES</div>
											<?php }else {?>
												<div class="color_mark_container">YES</div>
												<?php }?>
										</div>
										

											
										</li>
									</ul>

								</div>

								<div class="product_price">$<?php echo $res['prix_produit'];?></div>
								<div class="button_container">
									<button type="button" class="button cart_button">Buy</button>
									
								</div>
								
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
		 <?php
                                        
                                  
                                       } ?>

	</div>

	

	
	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
						<div class="newsletter_title_container">
							<div class="newsletter_icon"><img src="../../core/images/send.png" alt=""></div>
							<div class="newsletter_title">Sign up for Newsletter</div>
							<div class="newsletter_text"><p>...and receive %20 coupon for first shopping.</p></div>
						</div>
						<div class="newsletter_content clearfix">
							<form action="#" class="newsletter_form">
								<input type="email" class="newsletter_input" required="required" placeholder="Enter your email address">
								<button class="newsletter_button">Subscribe</button>
							</form>
							<div class="newsletter_unsubscribe_link"><a href="../../core/#">unsubscribe</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<div class="col-lg-3 footer_col">
					<div class="footer_column footer_contact">
						<div class="logo_container">
							<div class="logo"><a href="idex.php">SoftWare</a></div>
						</div>
						<div class="footer_title">Got Question? Call Us 24/7</div>
						<div class="footer_phone">+216 54 776 499</div>
						<div class="footer_contact_text">
							<p>17 Princess Road, London</p>
							<p>Grester London NW18JR, UK</p>
						</div>
						
					</div>
				</div>

				<div class="col-lg-2 offset-lg-2">
					<div class="footer_column">
						<div class="footer_title">Find it Fast</div>
						<ul class="footer_list">
							<li><a href="#">Computers & Laptops</a></li>
							<li><a href="#">Cameras & Photos</a></li>
							<li><a href="#">TV & Audio</a></li>
							<li><a href="#">Strorage</a></li>
							<li><a href="#">Accessories</a></li>
						</ul>
						
					</div>
				</div>

				
				

			</div>
		</div>
	</footer>

	

	

</div>

<script src="../../core/js/jquery-3.3.1.min.js"></script>
<script src="../../core/styles/bootstrap4/popper.js"></script>
<script src="../../core/styles/bootstrap4/bootstrap.min.js"></script>
<script src="../../core/plugins/greensock/TweenMax.min.js"></script>
<script src="../../core/plugins/greensock/TimelineMax.min.js"></script>
<script src="../../core/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="../../core/plugins/greensock/animation.gsap.min.js"></script>
<script src="../../core/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="../../core/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="../../core/plugins/parallax-js-master/parallax.min.js"></script>
<script src="../../core/plugins/easing/easing.js"></script>
<script src="../../core/js/blog_custom.js"></script>
</body>

</html>