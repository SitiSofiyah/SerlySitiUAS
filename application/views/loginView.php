<!DOCTYPE html>
<html lang="">
	<head>
		<!-- <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1"> -->
		<title>Login Page</title>

		<!-- Bootstrap CSS -->
			<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
			<link rel="stylesheet" href="<?php echo base_url()?>assets/js/style.js">
			<link rel="stylesheet" href="<?php echo base_url()?>assets/css/stylee.css">
			
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- <div class="container">
  
  <div class="row" id="pwd-container"> -->
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
      <section class="login-form">
      <form role="login" <?php echo form_open('login/cekLogin') ?>
		<?php echo validation_errors(); ?> 
        <center><font face="cooper black" size="5">Online BookStore</font></center> 
        
          <input type="text" name="username" id="username" placeholder="username" class="form-control" />
          
          <input type="password" class="form-control input-lg" name="password" id="password" placeholder="password"  />
          
          
       
          
          <button type="submit"  class="btn btn-lg btn-primary btn-block">Sign in</button>
          <div>
           <a href="<?php echo base_url('index.php/Login/daftar') ?>">Create account</a>
          </div>
          
        </form>
        
      
      </section>  
      </div>
      
      <div class="col-md-4"></div>
      

 <!--  </div>
  
 
  
  
</div> -->
	</body>
</html>
