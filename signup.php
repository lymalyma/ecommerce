<?php include 'fluff.php' ?>

<style>
.signup_area {
  background-color: #faf7fc;
}

</style>

  <div class="signup_area" style="margin-left:50px;">
    <h3>Register For New Account</h3> <br />
    <form action="index.php" method="post">
      First Name: <br />
      <input type="text" name="fname" style="width:250px;" required/> <br />
      Last Name: <br />
      <input type="text" name="lname" style="width:250px;" required/> <br />
      username: <br />
      <input type="text" name="username" style="width:250px;" required/> <br />
      password: <br />
      <input type="text" name="password" style="width:250px;" required/> <br />
      Confirm password: <br />
      <input type="text" name="confirmpassword" style="width:250px;" required/> <br />
      Email: <br />
      <input type="text" name="email" style="width:250px;" required/> <br />
      Phone Number: <br />
      <input type="text" name="phone" style="width:250px;" required/> <br />
      <input type="submit" value ="submit"/>
    </form>

    </div>

<?php include 'footer.php' ?>
