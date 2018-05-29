<?php
include_once'../../controllers/UserController.php';
if (isset($_POST["nom"])&&isset($_POST["pwd"])&&isset($_POST["prenom"])&&isset($_POST["email"])&&isset($_POST["phone"])&&isset($_POST["adr"]))
{
    $nom =$_POST["nom"];
    $pwd =$_POST["pwd"];
    $pre=$_POST["prenom"];
    $email=$_POST["email"];
    $adr=$_POST["adr"];
    $phone=$_POST["phone"];
    $user=new UserController($nom,$pre,$adr,$phone,$email,$pwd);
    if($user->AddUser()==1){
    	 echo "<script>alert('Added with success');window.location.href='SignUpView.php';</script>";
    }
      else
        echo  '<script>alert("Error! not added !!");</script>';
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Sign Up</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../../core/styles/bootstrap4/bootstrap.min.css">
<link href="../../core/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../../core/styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="../../core/styles/contact_responsive.css">
<link rel="icon" type="image/png" href="../../core/imageslogin/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../core/fontslogin/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../core/fontslogin/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../core/csslogin/util.css">
	<link rel="stylesheet" type="text/css" href="../../core/csslogin/main.css">

</head>

<body>

<div class="super_container">
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
								<div><a href="#">Sign Up</div>
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
									<form  class="header_search_form clearfix">
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
									<div class="wishlist_text"><a href="#">Wishlist</a></div>
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
										<div class="cart_text"><a href="#">Cart</a></div>
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
									<li onclick="window.location.href='../../controllers/AfficherProduitParCat.php?clicked=Computers et Laptops'"><a >Computers & Laptops <i class="fas fa-chevron-right ml-auto"></i></a></li>
									<li onclick="window.location.href='../../controllers/AfficherProduitParCat.php?clicked=Cameras et Photos'"><a href="#">Cameras & Photos<i class="fas fa-chevron-right"></i></a></li>
									
									
									<li onclick="window.location.href='../../controllers/AfficherProduitParCat.php?clicked=TV et Audio'"><a href="#">TV & Audio<i class="fas fa-chevron-right"></i></a></li>
									
									<li onclick="window.location.href='../../controllers/AfficherProduitParCat.php?clicked=Storage'"><a href="#">Storage<i class="fas fa-chevron-right"></i></a></li>
									<li onclick="window.location.href='../../controllers/AfficherProduitParCat.php?clicked=Accessories'"><a href="#">Accessories<i class="fas fa-chevron-right"></i></a></li>
								
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

							
						</div>
					</div>
				</div>
			</div>
		</nav>
		
	</header>
	
	<!-- Banner -->

	<div class="banner" style="background-image:url(../../core/images/banner_background.jpg)">
		<div class="banner_background" ></div>
		<div class="container fill_height">
			<div class="row fill_height">
				
	<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center text-white mb-4"></h2>
            <div class="row">
                <div class="col-md-6 mx-auto">

                    <!-- form card login -->
                    <div class="card rounded-0">
                        <div class="card-header">
                            <h3 class="mb-0">Sign Up</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form"  id="formLogin" action="SignUpView.php" method="POST">
                                 <div class="form-group">
                                     <div class="row">
      									<div class="col-half">
     
									&nbsp&nbsp&nbsp&nbsp
                                    <label for="uname1">FisrtName</label>
                                    &nbsp&nbsp&nbsp&nbsp
                                    <input type="text" style="margin-left: 12px;" class="form-control" name="nom" id="uname1" required=""></div>
                                    	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      									<div class="col-half">
     

                                    <label for="uname1">LastName</label>
                                    <input type="text" class="form-control" name="prenom" id="uname1" required=""></div></div>

                                     
                                    <label for="uname1">Address</label>
                                    
                                    <input type="text" style="padding-left: 10px;" class="form-control" name="adr" id="uname1" required="">
 								<label for="uname1">Phone Number</label>
                                    
                                    <input type="number" style="padding-left: 10px;" class="form-control" name="phone" id="uname1" required="">
                                 <label for="uname1">Email</label>
                                    
                                    <input type="email" style="padding-left: 10px;" class="form-control" name="email" id="uname1" required="">
                                                                      

                                    <label for="uname1">Password</label>
                                    <input type="password" class="form-control" name="pwd" id="uname1" required="">

                                   
                                
                                    </div>
                                 <button type="reset" name="login" style=" background-color: white;
    color: black;
    border: 2px solid #DC143C;  margin: 4px 2px;" class="btn float-right" id="btnLogin">Cancel</button> 
                                <button type="submit" name="login" style=" background-color: white;
    color: black;
    border: 2px solid #0e8ce4;  margin: 4px 2px;" class="btn float-right" id="btnLogin">Sign Up</button>
                              
                            </form>
                        </div>
                        <!--/card-block-->
                    </div>
                    <!-- /form card login -->

                </div>


            </div>
            <!--/row-->

        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
<!--/container--><div class="button banner_button"></div>

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