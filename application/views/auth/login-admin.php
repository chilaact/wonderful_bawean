<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>

		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/login.css">

<!------ Include the above in your HEAD tag ---------->
</head>
<body>
	<a href="<?php echo base_url('C_home/index'); ?>" class="btn btn-primary right">Kembali ke Beranda</a>
		<div class="wrapper fadeInDown">
			<div id="formContent">
				<!-- Tabs Titles -->

				<!-- Icon -->
				<div class="fadeIn first">
				<img src="<?php echo base_url() ?>assets/image/wb.png" id="icon" alt="User Icon" />
				</div>

				<!-- Login Form -->
				<form action="<?php echo base_url('C_login/aksi_login_admin'); ?>" method="post">
				<input type="text" id="username" class="fadeIn second" name="email" placeholder="Email" required>
				<input type="password" id="password" class="fadeIn third" name="password" placeholder="Password" required>
				<input type="submit" class="fadeIn fourth" value="Log In">
				<p><?php if ($this->session->flashdata('message')) {
							echo "- ".$this->session->flashdata('message')." -";
				} ?></p>
				
				</form>

		</div>
</body>
</html>