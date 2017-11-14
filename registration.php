<?php include 'index2.php' ?>

<div class="container">
  <form action="welcome.php" method="post">
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
    <input type="submit" />
  </form>
</div>

<?php include 'footer.php'> 
