<?php

$con = mysqli_connect("localhost", "root", "root", "ecommerce");

function get_cats_options() {

  global $con;
  $get_cats = "select * from categories";
  $run_cats = mysqli_query($con, $get_cats);
  while ($row_cats=mysqli_fetch_array($run_cats)) {
    $cat_id = $row_cats['cat_id'];
    $cat_title = $row_cats['cat_title'];
    echo "<option value='$cat_id'>$cat_title</option>";
  }
}

function get_brands_options() {

  global $con;
  $get_brands = "select * from brands";
  $run_brands = mysqli_query($con, $get_brands);
  while ($row_cats=mysqli_fetch_array($run_brands)) {
    $brand_id = $row_cats['brand_id'];
    $brand_title = $row_cats['brand_title'];
    echo "<option value='$brand_id'>$brand_title</option>";
  }
}

function insert_poducts() {
  if(isset($_POST['insert_post'])) {

    global $con;
    // This is to get the data from the forms, we'll ignore image for now.
    $product_title = $_POST['product_title'];
    $product_cat = $_POST['product_cat'];
    $product_brand = $_POST['product_brand'];
    $product_price = $_POST['product_price'];
    $product_desc = $_POST['product_desc'];
    $product_keywords = $_POST['product_keywords'];

    // getting the image from the fieldset
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp = $_FILES['product_image']['tmp_name'];

    move_uploaded_file($product_image_tmp, "product_images/$product_image");

    // writing the query
    echo $insert_product = "insert into products
    (product_cat, product_brand, product_title, product_price, product_desc,
    product_image, product_keywords) values ('$product_cat','$product_brand','$product_title',
    '$product_price','$product_desc', '$product_image', '$product_keywords')";

    $insert_pro = mysqli_query($con, $insert_product);

    if($insert_pro) {
      echo '<script>alert("product has been inserted!")</script>';
      echo '<script>window.href = "insertProduct.php"</script>';
    }

  }
}

?>
