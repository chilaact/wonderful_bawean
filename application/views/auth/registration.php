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
	<a href="<?php echo base_url('C_home/index'); ?>" class="btn btn-primary right" style="margin-top: 2px; margin-left: 2px">Kembali ke Beranda</a>
		<div class="wrapper fadeInDown">
			<div id="formContent">
				<!-- Tabs Titles -->

				<!-- Icon -->
				<div class="fadeIn first">
				<img src="<?php echo base_url() ?>assets/image/wb.png" id="icon" alt="User Icon" />
				</div>
			<!-- Login Form aja -->
			<form class="user" method="post" action="<?php echo base_url('C_login/aksiRegister'); ?>">
				<p style="color: red"><?php if ($this->session->flashdata('message')) {
							echo "- ".$this->session->flashdata('message')." -";
				} ?></p>
                <div class="form-group">
					<input type="text" id="username" class="fadeIn second" name="username" placeholder="username" required>
					<input type="text" id="email" class="fadeIn second" name="email" placeholder="Email" required>
					<input type="text" id="no_hp" class="fadeIn second" name="no_hp" placeholder="No Telepon" required>
					<input type="text" id="alamat" class="fadeIn second" name="alamat" placeholder="Alamat" required>
					<input type="password" id="password" class="fadeIn second" name="password" placeholder="Password" required>
					<button type="submit" class="btn btn-primary btn-user btn-block">
					Register Account
					</button>
					</div>
				</form>
				<div class="text-center">
					<a class="small" href="<?=site_url('C_login/index') ?>">Already have an account? Login!</a>
				</div>
</body>
</html>