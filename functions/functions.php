<?php

$con = mysqli_connect("localhost", "root", "root", "ecommerce");

$stockpiler = mysqli_connect("localhost", "root", "root", "stockpiler");


if (mysqli_connect_errno()) {
  echo "Failed to connect to mySQL: ".mysqli_connect_error();
}

function getIp() {
  $ip = $_SERVER['REMOTE_ADDR'];

  if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
      $ip = $_SERVER['HTTP_CLIENT_IP'];
  } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }

  return $ip;
}

function get_cats() {

  global $con;
  $get_cats = "select * from categories";
  $run_cats = mysqli_query($con, $get_cats);
  while ($row_cats=mysqli_fetch_array($run_cats)) {
    $cat_id = $row_cats['cat_id'];
    $cat_title = $row_cats['cat_title'];
    echo "<li><a href='index.php?cat=$cat_id'>$cat_title</a></li>";
  }
}

function get_brands() {

  global $con;
  $get_brands = "select * from brands";
  $run_brands = mysqli_query($con, $get_brands);
  while ($row_cats=mysqli_fetch_array($run_brands)) {
    $brand_id = $row_cats['brand_id'];
    $brand_title = $row_cats['brand_title'];
    echo "<li><a href='index.php?brand=$brand_id'>$brand_title</a></li>";
  }
}

function get_products() {
    if(!isset($_GET['cat'])) {
      if(!isset($_GET['brand'])) {


      global $con;
      $get_pro = "select * from products";
      $run_pro = mysqli_query($con, $get_pro);

      while ($row_pro = mysqli_fetch_array($run_pro)) {
        $prod_id = $row_pro['product_id'];
        $prod_cat = $row_pro['product_cat'];
        $prod_brand = $row_pro['product_brand'];
        $prod_title =$row_pro['product_title'];
        $prod_price = $row_pro['product_price'];
        $prod_desc = $row_pro['product_desc'];
        $prod_image = $row_pro['product_image'];
        $prod_keywords = $row_pro['product_keywords'];

        echo "

          <div id='single_product'>
            <h3>$prod_title</h3>
            <img src='admin_area/product_images/$prod_image' width='180px' height='180px'/>
            <p><a href='details.php?prod_id=$prod_id' style='float:right; color:green;'>Details</a> <b> $$prod_price</b> </p>
            <a href='index.php?add_cart=$prod_id'><button id='cart_button' style='float:right'>Add to Cart <i class='fa fa-cart-plus' aria-hidden='true'></i></button></a>
          </div>

        ";
      }
    }
  }
}

function get_products_by_brands() {
    if(isset($_GET['brand'])) {

      $brand_id = $_GET['brand'];

      global $con;
      $get_brand_pro = "select * from products where product_brand='$brand_id'";
      $run_pro = mysqli_query($con, $get_brand_pro);

      $product_count = mysqli_num_rows($run_pro);
      if ($product_count == 0) {
        echo "<h2>There is no product in this category.</h2>";
      }

      while ($row_brand_pro = mysqli_fetch_array($run_pro)) {
        $prod_id = $row_brand_pro['product_id'];
        $prod_cat = $row_brand_pro['product_cat'];
        $prod_brand = $row_brand_pro['product_brand'];
        $prod_title =$row_brand_pro['product_title'];
        $prod_price = $row_brand_pro['product_price'];
        $prod_desc = $row_brand_pro['product_desc'];
        $prod_image = $row_brand_pro['product_image'];
        $prod_keywords = $row_brand_pro['product_keywords'];

        echo "

          <div id='single_product'>
            <h3>$prod_title</h3>
            <img src='admin_area/product_images/$prod_image' width='180px' height='180px'/>
            <p><a href='details.php?prod_id=$prod_id' style='float:right; color:green;'>Details</a> <b> $$prod_price</b> </p>
            <a href='index.php?add_cart=$prod_id'><button id='cart_button' style='float:right'>Add to Cart <i class='fa fa-cart-plus' aria-hidden='true'></i></button></a>
          </div>

        ";
      }
    }
}

function get_products_by_categories() {
    if(isset($_GET['cat'])) {

      $cat_id = $_GET['cat'];

      global $con;
      $get_cat_pro = "select * from products where product_cat='$cat_id'";
      $run_pro = mysqli_query($con, $get_cat_pro);

      $product_count = mysqli_num_rows($run_pro);
      if ($product_count == 0) {
        echo "<h2>There is no product in this category.</h2>";
      }

      while ($row_cat_pro = mysqli_fetch_array($run_pro)) {
        $prod_id = $row_cat_pro['product_id'];
        $prod_cat = $row_cat_pro['product_cat'];
        $prod_brand = $row_cat_pro['product_brand'];
        $prod_title =$row_cat_pro['product_title'];
        $prod_price = $row_cat_pro['product_price'];
        $prod_desc = $row_cat_pro['product_desc'];
        $prod_image = $row_cat_pro['product_image'];
        $prod_keywords = $row_cat_pro['product_keywords'];

        echo "

          <div id='single_product'>
            <h3>$prod_title</h3>
            <img src='admin_area/product_images/$prod_image' width='180px' height='180px'/>
            <p><a href='details.php?prod_id=$prod_id' style='float:right; color:green;'>Details</a> <b> $$prod_price</b> </p>
            <a href='index.php?add_cart=$prod_id'><button id='cart_button' style='float:right'>Add to Cart <i class='fa fa-cart-plus' aria-hidden='true'></i></button></a>
          </div>

        ";
      }
    }
}




function get_details() {

  global $con;
  if(isset($_GET['prod_id'])) {

    $product_id = $_GET['prod_id'];

    $get_pro = "select * from products where product_id='$product_id'";
    $run_pro = mysqli_query($con, $get_pro);

    while ($row_pro = mysqli_fetch_array($run_pro)) {
      $prod_id = $row_pro['product_id'];
      $prod_title = $row_pro['product_title'];
      $prod_price = $row_pro['product_price'];
      $prod_desc = $row_pro['product_desc'];
      $prod_image = $row_pro['product_image'];

      echo "

        <div id='single_product'>
          <h3 style='padding:10px;'>$prod_title</h3>
          <img src='admin_area/product_images/$prod_image' width='400px' height='300px'/>
          <p><b>$ $prod_price</b></p>
          <p>$prod_desc</p>

          <a href='index.php' style='float:left; color:blue;'>Go Back</a>
          <a href='index.php?add_cart=$prod_id'><button id='cart_button' style='float:right;'>Add to Cart <i class='fa fa-cart-plus' aria-hidden='true'></i></button></a>


        </div>

      ";
    }

  }
}


function get_products_results() {
  if(isset($_GET['search'])) {

      $search_query = $_GET['user_query'];

      global $con;
      $get_pro = "select * from products where product_keywords like '%$search_query%'";
      $run_pro = mysqli_query($con, $get_pro);

      while ($row_pro = mysqli_fetch_array($run_pro)) {
        $prod_id = $row_pro['product_id'];
        $prod_cat = $row_pro['product_cat'];
        $prod_brand = $row_pro['product_brand'];
        $prod_title =$row_pro['product_title'];
        $prod_price = $row_pro['product_price'];
        $prod_desc = $row_pro['product_desc'];
        $prod_image = $row_pro['product_image'];
        $prod_keywords = $row_pro['product_keywords'];

        echo "

          <div id='single_product'>
            <h3>$prod_title</h3>
            <img src='admin_area/product_images/$prod_image' width='180px' height='180px'/>
            <p><a href='details.php?prod_id=$prod_id' style='float:right; color:green;'>Details</a> <b> $$prod_price</b> </p>
            <a href='index.php?add_cart=$prod_id'><button id='cart_button' style='float:right'>Add to Cart <i class='fa fa-cart-plus' aria-hidden='true'></i></button></a>
          </div>

        ";
      }

    }
}

function cart() {

  if(isset($_GET['add_cart'])) {

  	global $con;

  	$ip = getIp();
  	$pro_id = $_GET['add_cart'];
  	$check_pro = "select * from cart where ip_addr='$ip' AND p_id='$pro_id'";
  	$run_check = mysqli_query($con, $check_pro);

  	if(mysqli_num_rows($run_check)>0){
  	echo "";

  } else {

	   $insert_pro = "insert into cart (p_id,ip_addr) values ('$pro_id','$ip')";
     $run_pro = mysqli_query($con, $insert_pro);
	   echo "<script>window.open('index.php','_self')</script>";

	}

  }

}


function total_items(){

  if(isset($_GET['add_cart'])) {

    global $con;
    $ip = getIp();
    $get_items = "select * from cart where ip_addr='$ip'";
    $run_items = mysqli_query($con, $get_items);
    $count_items = mysqli_num_rows($run_items);

  } else {

    global $con;

    $ip = getIp();
    $get_items = "select * from cart where ip_addr='$ip'";
    $run_items = mysqli_query($con, $get_items);
    $count_items = mysqli_num_rows($run_items);

   }

   echo $count_items;
 }

 function total_price(){

   $total = 0;

   global $con;

   $ip = getIp();

   $sel_price = "select * from cart where ip_addr='$ip'";

   $run_price = mysqli_query($con, $sel_price);

   while($p_price=mysqli_fetch_array($run_price)){

     $pro_id = $p_price['p_id'];

     $pro_price = "select * from products where product_id='$pro_id'";

     $run_pro_price = mysqli_query($con,$pro_price);

     while ($pp_price = mysqli_fetch_array($run_pro_price)){

     $product_price = array($pp_price['product_price']);

     $values = array_sum($product_price);

     $total +=$values;

     }


   }

   echo "$" . $total;


 }



?>
