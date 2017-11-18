<!DOCTYPE html>
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path = $path . "/ecommerce_app/functions/";
   include($path . "functions.php");
?>
<html>
  <head>
    <title>My Shopping Website</title>
    <link rel="stylesheet" href="styles/style.css" media="all"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>

<!-- Main container starts here -->
  <div class="main_wrapper">

    <!-- Header wrapper starts here -->
    <div class="header_wrapper">
      <a href="index.php"><img src="images/doggylogo.png"  id="logo" height="150px"/></a>
        <!-- <img src='admin_area/product_images/ipadpro.jpg' width='180px' height='180px'/> -->
      </div>

      <!-- Header wrapper ends here -->

      <!-- Nav bar starts here -->
      <?php include 'navbar.php' ?>
        <!-- Nav bar ends here -->


        <!-- Content Wrapper begins here  -->
      <div class="content_wrapper">
          <div id="sidebar">
            <div id="sidebar_title">Categories</div>
            <ul id="cats">
              <?php get_cats(); ?>
            </ul>

            <div id="sidebar_title">Brands</div>
            <ul id="cats">
              <?php get_brands(); ?>
            </ul>
          </div>

          <div id="content-area">
            <div id="shopping_cart">
              <span style="font-size:18px; padding:5px; line-height:40px;">
                Welcome Guest! Items: <!-- add total_items(), total_price -->
                <a href="cart.php" id="cart_icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></span>
            </div>


            <div id="products_box">
