<?php
include_once'../../controllers/ContactController.php';
$contact=new ContactController();
if(isset($_POST['email'])&&isset($_POST['subj'])&&isset($_POST['msg']))
 {
 	if($contact->sendEmailToAdmin($_POST['email'],$_POST['subj'],$_POST['msg'])){
 		echo "<script>alert('messege send with success');window.location.href='ContactView.php';</script>";
 	}
 	else
 		 echo  '<script>alert("Error! not added !!");</script>';

 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../../core/styles/bootstrap4/bootstrap.min.css">
<link href="../../core/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../../core/styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="../../core/styles/contact_responsive.css">

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
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="../../core/images/mail.png" alt=""></div><a href="../../core/mailto:fastsales@gmail.com">software@gmail.com</a></div>
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
													<li><a class="clc" href="#">All Categories</a></li>
													<li><a class="clc" href="#">Computers</a></li>
							     					<li><a class="clc" href="#">Cameras</a></li>
							     					<li><a class="clc" href="#">TV</a></li>
							     					<li><a class="clc" href="#">Storage</a></li>
							     					<li><a class="clc" href="#">Accessories</a></li>
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
									<li><a href="index.php">Home<i class="fas fa-chevron-down"></i></a></li>
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
							<ul class="page_menu_nav">
								<li class="page_menu_item has-children">
									<a href="../../core/#">Language<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="../../core/#">English<i class="fa fa-angle-down"></i></a></li>
										<li><a href="../../core/#">Italian<i class="fa fa-angle-down"></i></a></li>
										<li><a href="../../core/#">Spanish<i class="fa fa-angle-down"></i></a></li>
										<li><a href="../../core/#">Japanese<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item has-children">
									<a href="../../core/#">Currency<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="../../core/#">US Dollar<i class="fa fa-angle-down"></i></a></li>
										<li><a href="../../core/#">EUR Euro<i class="fa fa-angle-down"></i></a></li>
										<li><a href="../../core/#">GBP British Pound<i class="fa fa-angle-down"></i></a></li>
										<li><a href="../../core/#">JPY Japanese Yen<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item">
									<a href="../../core/index.html">Home<i class="fa fa-angle-down"></i></a>
								</li>
								<li class="page_menu_item has-children">
									<a href="../../core/#">Super Deals<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="../../core/#">Super Deals<i class="fa fa-angle-down"></i></a></li>
										<li class="page_menu_item has-children">
											<a href="../../core/#">Menu Item<i class="fa fa-angle-down"></i></a>
											<ul class="page_menu_selection">
												<li><a href="../../core/#">Menu Item<i class="fa fa-angle-down"></i></a></li>
												<li><a href="../../core/#">Menu Item<i class="fa fa-angle-down"></i></a></li>
												<li><a href="../../core/#">Menu Item<i class="fa fa-angle-down"></i></a></li>
												<li><a href="../../core/#">Menu Item<i class="fa fa-angle-down"></i></a></li>
											</ul>
										</li>
										<li><a href="../../core/#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="../../core/#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="../../core/#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item has-children">
									<a href="../../core/#">Featured Brands<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="../../core/#">Featured Brands<i class="fa fa-angle-down"></i></a></li>
										<li><a href="../../core/#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="../../core/#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="../../core/#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item has-children">
									<a href="../../core/#">Trending Styles<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="../../core/#">Trending Styles<i class="fa fa-angle-down"></i></a></li>
										<li><a href="../../core/#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="../../core/#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="../../core/#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item"><a href="../../core/blog.html">blog<i class="fa fa-angle-down"></i></a></li>
								<li class="page_menu_item"><a href="../../core/contact.html">contact<i class="fa fa-angle-down"></i></a></li>
							</ul>
							
							<div class="menu_contact">
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="../../core/images/phone_white.png" alt=""></div>+216 54 776 499</div>
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="../../core/images/mail_white.png" alt=""></div><a href="../../core/mailto:fastsales@gmail.com">software@gmail.com</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</header>

	<!-- Contact Info -->

	<div class="contact_info">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="contact_info_container d-flex flex-lg-row flex-column justify-content-between align-items-between">

						<!-- Contact Item -->
						<div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
							<div class="contact_info_image"><img src="../../core/images/contact_1.png" alt=""></div>
							<div class="contact_info_content">
								<div class="contact_info_title">Phone</div>
								<div class="contact_info_text">+216 54 776 499</div>
							</div>
						</div>

						<!-- Contact Item -->
						<div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
							<div class="contact_info_image"><img src="../../core/images/contact_2.png" alt=""></div>
							<div class="contact_info_content">
								<div class="contact_info_title">Email</div>
								<div class="contact_info_text">software@gmail.com</div>
							</div>
						</div>

						<!-- Contact Item -->
						<div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
							<div class="contact_info_image"><img src="../../core/images/contact_3.png" alt=""></div>
							<div class="contact_info_content">
								<div class="contact_info_title">Address</div>
								<div class="contact_info_text">Manar 2, Tunis, Tunisie</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact Form -->

	<div class="contact_form">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="contact_form_container">
						<div class="contact_form_title">Get in Touch</div>

						<form action="ContactView.php" id="contact_form" method="POST">
							<div class="contact_form_inputs">
								<input type="text" id="contact_form_email" name="email" class="contact_form_email input_field" placeholder="Your email" required="required" data-error="Email is required.">
								<input type="text" id="contact_form_name" name="subj" class="contact_form_name input_field" placeholder="Your Subject" required="required" data-error="Name is required.">
									</div>
							<div class="contact_form_text">
								<textarea id="contact_form_message" class="text_field contact_form_message" name="msg" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
							</div>
							<div class="contact_form_button">
								<button type="submit" class="button contact_submit_button">Send Message</button>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
		<div class="panel"></div>
	</div>

	<!-- Map -->

	<div class="contact_map">
		<div id="google_map" class="google_map">
			<div class="map_container">
				<div id="map"></div>
			</div>
		</div>
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
							<div class="logo"><a href="../../core/#">OneTech</a></div>
						</div>
						<div class="footer_title">Got Question? Call Us 24/7</div>
						<div class="footer_phone">+38 068 005 3570</div>
						<div class="footer_contact_text">
							<p>17 Princess Road, London</p>
							<p>Grester London NW18JR, UK</p>
						</div>
						<div class="footer_social">
							<ul>
								<li><a href="../../core/#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="../../core/#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="../../core/#"><i class="fab fa-youtube"></i></a></li>
								<li><a href="../../core/#"><i class="fab fa-google"></i></a></li>
								<li><a href="../../core/#"><i class="fab fa-vimeo-v"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-lg-2 offset-lg-2">
					<div class="footer_column">
						<div class="footer_title">Find it Fast</div>
						<ul class="footer_list">
							<li><a href="../../core/#">Computers & Laptops</a></li>
							<li><a href="../../core/#">Cameras & Photos</a></li>
							<li><a href="../../core/#">Hardware</a></li>
							<li><a href="../../core/#">Smartphones & Tablets</a></li>
							<li><a href="../../core/#">TV & Audio</a></li>
						</ul>
						<div class="footer_subtitle">Gadgets</div>
						<ul class="footer_list">
							<li><a href="../../core/#">Car Electronics</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<ul class="footer_list footer_list_2">
							<li><a href="../../core/#">Video Games & Consoles</a></li>
							<li><a href="../../core/#">Accessories</a></li>
							<li><a href="../../core/#">Cameras & Photos</a></li>
							<li><a href="../../core/#">Hardware</a></li>
							<li><a href="../../core/#">Computers & Laptops</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<div class="footer_title">Customer Care</div>
						<ul class="footer_list">
							<li><a href="../../core/#">My Account</a></li>
							<li><a href="../../core/#">Order Tracking</a></li>
							<li><a href="../../core/#">Wish List</a></li>
							<li><a href="../../core/#">Customer Services</a></li>
							<li><a href="../../core/#">Returns / Exchange</a></li>
							<li><a href="../../core/#">FAQs</a></li>
							<li><a href="../../core/#">Product Support</a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</footer>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
						<div class="copyright_content"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="../../core/https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
						<div class="logos ml-sm-auto">
							<ul class="logos_list">
								<li><a href="../../core/#"><img src="../../core/images/logos_1.png" alt=""></a></li>
								<li><a href="../../core/#"><img src="../../core/images/logos_2.png" alt=""></a></li>
								<li><a href="../../core/#"><img src="../../core/images/logos_3.png" alt=""></a></li>
								<li><a href="../../core/#"><img src="../../core/images/logos_4.png" alt=""></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="../../core/js/jquery-3.3.1.min.js"></script>
<script src="../../core/styles/bootstrap4/popper.js"></script>
<script src="../../core/styles/bootstrap4/bootstrap.min.js"></script>
<script src="../../core/plugins/greensock/TweenMax.min.js"></script>
<script src="../../core/plugins/greensock/TimelineMax.min.js"></script>
<script src="../../core/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="../../core/plugins/greensock/animation.gsap.min.js"></script>
<script src="../../core/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="../../core/plugins/easing/easing.js"></script>
<script src="../../core/https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="../../core/js/contact_custom.js"></script>
</body>

</html>