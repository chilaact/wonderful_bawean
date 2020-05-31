<!DOCTYPE html>
<html>
<head>
	<title>Login User</title>

		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/login.css">

<!------ Include the above in your HEAD tag ---------->
</head>
<body>

		<div class="wrapper fadeInDown">
			<div id="formContent">
				<!-- Tabs Titles -->

				<!-- Icon -->
				<div class="fadeIn first">
				<img src="<?php echo base_url() ?>assets/image/wb.png" id="icon" alt="User Icon" />
				</div>
				<p><?php if ($this->session->flashdata('message')) {
							echo "- ".$this->session->flashdata('message')." -";
				} ?></p>

				<!-- Login Form -->
				<form action="<?php echo base_url('C_login/aksi_login_user'); ?>" method="post">
				<input type="text" id="username" class="fadeIn second" name="email" placeholder="Email" required>
				<input type="password" id="password" class="fadeIn third" name="password" placeholder="Password" required>
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