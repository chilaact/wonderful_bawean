<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="assets/css/login.css">

<!------ Include the above in your HEAD tag ---------->
</head>
<body>

		<div class="wrapper fadeInDown">
		  <div id="formContent">
		    <!-- Tabs Titles -->

		    <!-- Icon -->
		    <div class="fadeIn first">
		      <img src="assets/image/wb.png" id="icon" alt="User Icon" />
		    </div>

		    <!-- Login Form -->
		    <form action="<?php echo base_url('aksi_login'); ?>" method="post">
		      <input type="text" id="username" class="fadeIn second" name="username" placeholder="username">
		      <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
		      <input type="submit" class="fadeIn fourth" value="Log In">
		    </form>

		    <!-- Remind Passowrd -->
		    <div id="formFooter">
		      <a class="underlineHover" href="<?= site_url('C_login/registration'); ?>">Create New Account</a><br><br>
		      <a class="underlineHover" href="#">Forgot Password?</a>
		    </div>

		</div>
</body>
</html>