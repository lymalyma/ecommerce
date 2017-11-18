<?php include 'fluff.php' ?>

<style>
  .contact-form {
    background-color: white;
  }
  
</style>

<h2>Contact Us </h2><br />

<div class="contact-form">
  <form action="messagesent.php" method="post">
    Email: <br />
    <input type="text" name="email" style="width:300px;" required/> <br />
    Order Number (Optional): <br />
    <input type="text" name="ordernumber" style="width:300px;" required/> <br />
    Message: <br />
    <textarea placeholder="Your Message..." style="height:200px; width:300px;"></textarea><br />
    <input type="submit" style="width:75px; height: 30px; background-color: #a1c499;"/>
  </form>
</div>

<?php include 'footer.php' ?>
