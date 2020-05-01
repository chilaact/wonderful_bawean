<!DOCTYPE html>
<html>
<head>
	<title>Register</title>

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

				<!-- Login Form -->
				<form action="<?php echo base_url('C_login/aksi_login'); ?>" method="post">
				<input type="text" id="username" class="fadeIn second" name="Nama Lengkap" placeholder="nama lengkap" required>
				<input type="text" id="password" class="fadeIn third" name="Email" placeholder="email" required>
				<input type="text" id="password" class="fadeIn third" name="Telepon" placeholder="telepon" required>
				<input type="text" id="password" class="fadeIn third" name="Alamat" placeholder="alamat" required>
				<input type="text" id="password" class="fadeIn third" name="Username" placeholder="username" required>
				<input type="text" id="password" class="fadeIn third" name="Password" placeholder="password" required>
				<input type="text" id="password" class="fadeIn third" name="Confirm Password" placeholder="confirm password" required>

				<input type="submit" class="fadeIn fourth" value="Register">
				</form>

				<!-- Remind Passowrd -->
				<div id="formFooter">
				<a class="underlineHover" href="<?= site_url('C_login/index'); ?>">Log In</a><br>
				</div>
		</div>
</body>
</html>