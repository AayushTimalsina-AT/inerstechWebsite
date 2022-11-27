<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>InersTech</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- site icons -->
<link rel="icon" href="assets/images/fevicon/nav_icon.png" type="image/gif" />
<!-- bootstrap css -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
<!-- Site css -->
<link rel="stylesheet" href="assets/css/style.css" />
<!-- responsive css -->
<link rel="stylesheet" href="assets/css/responsive.css" />
<!-- colors css -->
<link rel="stylesheet" href="assets/css/colors1.css" />
<!-- custom css -->
<link rel="stylesheet" href="assets/css/custom.css" />
<!-- wow Animation css -->
<link rel="stylesheet" href="assets/css/animate.css" />
<!-- revolution slider css -->
<link rel="stylesheet" type="text/css" href="assets/revolution/css/settings.css" />
<link rel="stylesheet" type="text/css" href="assets/revolution/css/layers.css" />
<link rel="stylesheet" type="text/css" href="assets/revolution/css/navigation.css" />
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>
<body id="default_theme" class="it_service">
<!-- loader -->
<div class="bg_load" style="background-image:url('assets/images/it_service/loader.png') ;">
   <img class="loader_animation" src="assets/images/fevicon/nav_icon.png" alt="#" width="200px" height="230px" style="margin-top:-100px;" /> </div>
<!-- end loader -->
<!-- header -->
<header id="default_header" class="header_style_1">
  <!-- header top -->
  <div class="header_top">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="full">
            <div class="topbar-left">
              <ul class="list-inline">
                <li> <span class="topbar-label"><i class="fa  fa-home"></i></span> <span class="topbar-hightlight"></span>Iners Tech, Height 44700,Lalitpur Nepal</li>
                <li> <span class="topbar-label"><i class="far fa-envelope"></i></span> <span class="topbar-hightlight"><a href="mailto:inerstech@gmail.com">inerstech@gmail.com</a></span> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 right_section_header_top">
          <div class="float-left">
            <div class="social_icon">
              <ul class="list-inline">
                <li>
                <a href="https://www.facebook.com/inerstech" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                <li><a class="fab fa-google" href="https://google.com/" title="Google+" target="_blank"></a></li>
                <!-- <li><a class="fab fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li> -->
                <li><a class="fab fa-linkedin" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
                <li><a class="fab fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
              </ul>
            </div>
          </div>
          <div class="float-right">
            <div class="make_appo"> <a class="btn white_btn" href="make_appointment.php">Make Appointment</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end header top -->
  <!-- header bottom -->
  <div class="header_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
          <!-- logo start -->
          <div class="logo"> <a href="index.php"><img src="assets/images/logos/iners-tech-logo.jpg" alt="logo"><span style="font-family:'Lucida Handwriting'; color:brown; font-size:30px; font-weight: bold;">iNERS</span> <span style="font-family:'Lucida Handwriting';font-size:30px; font-weight: bold;">TECH</span></a>
          
          </div>
          <!-- logo end -->
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
          <!-- menu start -->
          <div class="menu_side">
            <div id="navbar_menu">
              <ul class="first-ul">
                <li> <a class="<?= ($activePage == 'index') ? 'active':''; ?>" href="index.php">Home</a>
                </li>
                <li><a class="<?= ($activePage == 'about') ? 'active':''; ?>" href="about.php">About Us</a></li>
                <li> <a class="<?= ($activePage == 'service') ? 'active':''; ?>" href="service.php">Service</a>
                 
                <!-- <li> <a href="it_blog.html">Blog</a>
                  <ul>
                    <li><a href="it_blog.html">Blog List</a></li>
                    <li><a href="it_blog_grid.html">Blog Grid</a></li>
                    <li><a href="it_blog_detail.html">Blog Detail</a></li>
                  </ul>
                </li> -->
                <li> <a class="<?= ($activePage == 'career') ? 'active':''; ?>" href="career.php">Career</a>
                  <!-- <ul>
                    <li><a href="it_career.html">Career</a></li>
                    <li><a href="it_price.html">Pricing</a></li>
                    <li><a href="it_faq.html">Faq</a></li>
                    <li><a href="it_privacy_policy.html">Privacy Policy</a></li>
                    <li><a href="it_error.html">Error 404</a></li>
                  </ul> -->
                </li>
                <!-- <li> <a href="it_shop.html">Shop</a>
                  <ul>
                    <li><a href="it_shop.html">Shop List</a></li>
                    <li><a href="it_shop_detail.html">Shop Detail</a></li>
                    <li><a href="it_cart.html">Shopping Cart</a></li>
                    <li><a href="it_checkout.html">Checkout</a></li>
                  </ul>
                </li> -->
                <li>  <a class="<?= ($activePage == 'contact') ? 'active':''; ?>" href="contact.php">Contact</a>
                  <!-- <ul>
                    <li><a href="it_contact.html">Contact Page 1</a></li>
                    <li><a href="it_contact_2.html">Contact Page 2</a></li>
                  </ul> -->
                </li>
              </ul>
            </div>
            <div class="search_icon">
              <ul>
                <li><a href="#" data-toggle="modal" data-target="#search_bar"><i class="fa fa-search" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
          <!-- menu end -->
        </div>
      </div>
    </div>
  </div>
  <!-- header bottom end -->
</header>
<!-- end header -->