<!DOCTYPE html>
<?php
  include("functions/admin_functions.php");

?>
<html>
  <head>
    <title>Admin Area: Insert new product</title>
    <link rel="stylesheet" href="styles/style.css" media="all"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <style>
      #h2title {
        font-family: Palatino;
      }

      table {
        font-family: Palatino;
        font-weight: bold;
      }

      #home_link {
        text-decoration: none;
        color: green;
      }
    </style>
</head>

<body>

<div id="admin_area_banner" align="center">
  <h2>Admin Functions</h2>
  <a href="../index.php" id="home_link"><i class="fa fa-home fa-2x" aria-hidden="true"></i></a>

</div>

  <form action="insert_product.php" method="post" enctype="multipart/form-data">
    <table align="center", width="1000px" border="2" bgcolor="#b1bbce">
      <tr align="center">
        <td colspan="8">
          <h2 id="h2title">Insert new product</h2>
        </td>
      </tr>
      <tr>
        <td align="right">Product Title:</td>
        <td><input type="text" name="product_title" size="50" required /></td>
      </tr>
      <tr>
        <td align="right">Product Category:</td>
        <td><select name="product_cat" required>
              <option>Select a Category</option>
              <?php get_cats_options(); ?>
            </select>
        </td>
      </tr>
      <tr>
        <td align="right">Product Brand:</td>
        <td><select name="product_brand" required>
          <option>Select a Brand</option>
            <?php get_brands_options(); ?>
        </select>
      </td>
      </tr>
      <tr>
        <td align="right">Product Image:</td>
        <td><input type="file" name="product_image" required /></td>
      </tr>
      <tr>
        <td align="right">Product Price:</td>
        <td><input type="text" name="product_price" required /></td>
      </tr>
      <tr>
        <td align="right">Product Description:</td>
        <td><textarea name="product_desc" cols="40" rows="10"></textarea></td>
      </tr>
      <tr>
        <td align="right">Product Keywords:</td>
        <td><input type="text" name="product_keywords" size="50" required /></td>
      </tr>

      <tr align="center">
        <td colspan="8">
          <input type="submit" name="insert_post" value="Insert New" required/>
        </td>
      </tr>
    </table>
  </form>

</body>

</html>

<?php

// the insert_post comes cfrom the submit button'
  insert_poducts(); 

?>
