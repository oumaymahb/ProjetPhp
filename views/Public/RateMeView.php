<?php
include_once'../../controllers/RateMeController.php';
$avis=new RateMeController();
if(isset($_POST['sub']))
  if($res=$avis->RateMe($_POST['rate'])){
     echo "<script>alert('Thank you ');window.location.href='RateMeView.php';</script>";
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Rate Me</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../../core/styles/bootstrap4/bootstrap.min.css">
<link href="../../core/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../../core/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../../core/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
  <link rel="stylesheet" href="../../core/cssrate/style.css">
  <style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
.buttonn {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 3px 30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}


.button2 {
    background-color: white; 
    color: black; 
    border: 2px solid #008CBA;
}

.button2:hover {
    background-color: #008CBA;
    color: white;
}


</style>
<link rel="stylesheet" type="text/css" href="../../core/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="../../core/styles/blog_styles.css">
<link rel="stylesheet" type="text/css" href="../../core/styles/blog_responsive.css">

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
              
                
                <li class="page_menu_item"><a href="../../core/#">blog<i class="fa fa-angle-down"></i></a></li>
                <li class="page_menu_item"><a href="../../core/contact.html">contact<i class="fa fa-angle-down"></i></a></li>
              </ul>
              
              <div class="menu_contact">
                <div class="menu_contact_item"><div class="menu_contact_icon"><img src="../../core/images/phone_white.png" alt=""></div>+38 068 005 3570</div>
                <div class="menu_contact_item"><div class="menu_contact_icon"><img src="../../core/images/mail_white.png" alt=""></div><a href="../../core/mailto:fastsales@gmail.com">software@gmail.com</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </header>

  

  <!-- Blog -->

  <div class="blog">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="blog_posts d-flex flex-row align-items-start justify-content-between">
     
                            
      <div class="home">
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/shop_background.jpg"></div>
    <div class="home_overlay"></div><div class="home_overlay"></div>
    <div class="home_content d-flex flex-column align-items-center justify-content-center">
   <div >
    <form action="RateMeView.php" method="POST">
  <table  class="w3-table-all">
    <tr>
      <th colspan="2" width="600px">Choice of satisfaction criteria</th>
      
    </tr>
    <tr>
      <td><input type="checkbox" value="1" name="rate[]"></td>
      <td width="600px">Site organization</td>
      
    </tr>
    <tr>
      <td><input type="checkbox" value="1" name="rate[]"></td>
      <td width="600px">The ease of navigation on the site</td>
      
    </tr>
    <tr>
       <td><input type="checkbox" value="1" name="rate[]"></td>
      <td width="600px">The clarity of the steps to order</td>
      
    </tr>
     <tr>
       <td><input type="checkbox" value="1" name="rate[]"></td>
      <td width="600px">Product status after delivery</td>
      
    </tr>
     <tr>
       <td><input type="checkbox" value="1" name="rate[]"></td>
      <td width="600px">Order tracking information (preparation, shipping)</td>
    </tr>
  </table>
         <button class="buttonn button2 btn-lg float-right" name="sub" type="submit">Submit</button>

     </form>     

</div>
    </div>
  </div>

                          
        </div>
          
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
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="../../core/jsrate/index.js"></script>
</body>
</html>