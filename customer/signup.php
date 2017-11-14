<?php include 'index2.php' ?>

  <?php getIP(); ?>

  <div class="signup_area" style="margin-left:50px;">
    <h3>Register For New Account</h3>
    <form action="index.php" method="post">
      First Name: <br />
      <input type="text" name="fname" required/> <br />
      Last Name: <br />
      <input type="text" name="lname" required/> <br />
      Email: <br />
      <input type="text" name="email" required/> <br />
      Phone Number: <br />
      <input type="text" name="phone" required/> <br />
      Address Line 1: <br />
      <input type="text" name="address1"/> <br />
      Address Line 2: <br />
      <input type="text" name="address2"/> <br />
      City: <br />
      <input type="text" name="city"/> <br />
      State: <br />
      <input type="text" name="state"/> <br />
      Zipcode: <br />
      <input type="text" name="zip"/> <br />
      <input type="submit" value ="submit"/>
    </form>

    </div>

<?php include 'footer.php' ?>
