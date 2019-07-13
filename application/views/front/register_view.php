<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META ============================================= -->
	<?php
	if (!empty($meta_tags)) {
		foreach ($meta_tags as $meta_tag) {
			echo $meta_tag;
		}
	}
	?>

	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />

	<!-- PAGE TITLE HERE ============================================= -->
	<title><?php echo $title; ?></title>

	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

	<?php
	if (!empty($styles)) {
		foreach ($styles as $style) {
			echo '<link rel="stylesheet" type="text/css" href="' . $style . '">';
		}
	}
	?>

</head>

<body id="bg">
	<div class="page-wraper">
		<div id="loading-icon-bx"></div>
		<div class="account-form">
			<div class="account-head" style="background-image:url(<?php echo base_url(); ?>assets/frontweb/images/background/bg2.jpg);">
				<a href="index.html"><img src="<?php echo base_url(); ?>assets/frontweb/images/logo-white.png" alt=""></a>
			</div>
			<div class="account-form-inner">
				<div class="account-container">
					<div class="heading-bx left">
						<h2 class="title-head">Sign Up <span>Now</span></h2>
						<p>Login Your Account <a href="<?php echo base_url(); ?>login">Click here</a></p>
					</div>
					<?php echo $this->session->flashdata('alert'); ?>
					<form action="<?php echo base_url(); ?>register" method="POST" class="contact-bx">
						<div class="row placeani">
							<div class="col-lg-5">
								<div class="form-group">
									<div class="input-group">
										<!-- <label>Your Name</label> -->
										<input placeholder="Your Name" name="name" type="text" value="<?php echo set_value('name'); ?>" class="form-control">
										<?php echo form_error('name'); ?>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<div class="input-group">
										<!-- <label>Your Mobile</label> -->
										<input placeholder="Your Mobile" name="mobile" type="number" value="<?php echo set_value('mobile'); ?>" class="form-control">
										<?php echo form_error('mobile'); ?>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<div class="input-group">
										<!-- <label>Your Email Address</label> -->
										<input placeholder="Your Email Address" name="email" type="email" value="<?php echo set_value('email'); ?>" class="form-control">
										<?php echo form_error('email'); ?>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<div class="input-group">
										<!-- <label>Your Password</label> -->
										<input placeholder="Your Password" name="password" type="password" class="form-control">
										<?php echo form_error('password'); ?>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<div class="input-group">
										<!-- <label>Retype Password</label> -->
										<input placeholder="Retype Password" name="passconf" type="password" class="form-control">
										<?php echo form_error('passconf'); ?>
									</div>
								</div>
							</div>
							<div class="col-lg-12 m-b30">
								<button name="submit" type="submit" value="Submit" class="btn button-md">Sign Up</button>
							</div>
							<div class="col-lg-12">
								<h6>Sign Up with Social media</h6>
								<div class="d-flex">
									<a class="btn flex-fill m-r5 facebook" href="#"><i class="fa fa-facebook"></i>Facebook</a>
									<a class="btn flex-fill m-l5 google-plus" href="#"><i class="fa fa-google-plus"></i>Google Plus</a>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- External JavaScripts -->
	<?php
	if (!empty($scripts)) {
		foreach ($scripts as $script) {
			echo '<script src="' . $script . '"></script>';
		}
	}
	?>
</body>

</html>