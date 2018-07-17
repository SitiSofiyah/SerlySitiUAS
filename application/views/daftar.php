<!DOCTYPE html>
<html>
<head>
  <title></title>

   <link rel="stylesheet" href="<?php echo base_url()?>assets/css/form.css">

</head>
<body>
<div class="container">  
  <form id="contact" action="<?php echo base_url('index.php/Login/insert') ?>" method="post">
    <h3>Online BookStore</h3>
    <h4>Create Your Account</h4>
    <?php echo validation_errors(); ?>
    <fieldset>
      <input name="username" placeholder="Your username" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input name="email" placeholder="Your Email Address" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input name="alamat" placeholder="Your Address" type="text" tabindex="3" required>
    </fieldset>
     <fieldset>
      <input name="notelp" placeholder="Your Phone Number" type="text" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input name="password" placeholder="Your Password" type="password" tabindex="4" required>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Sign Up</button>
    </fieldset>
   
  </form>
</div>
</body>
</html>