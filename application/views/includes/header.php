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
	<link rel="icon" href="<?php echo base_url(); ?>assets/frontweb/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/frontweb/images/favicon.png" />

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
		<!-- Header Top ==== -->
		<header class="header rs-nav">
			<div class="top-bar">
				<div class="container">
					<div class="row d-flex justify-content-between">
						<div class="topbar-left">
							<ul>
								<li><a href="faq-1.html"><i class="fa fa-question-circle"></i>Ask a Question</a></li>
								<li><a href="javascript:;"><i class="fa fa-envelope-o"></i>Support@website.com</a></li>
							</ul>
						</div>
						<div class="topbar-right">
							<ul>
								<li>
									<select class="header-lang-bx">
										<option data-icon="flag flag-uk">English UK</option>
										<option data-icon="flag flag-us">English US</option>
									</select>
								</li>
								<?php if ($this->session->logged_in) { ?>
									<li><a href=""><?php echo $this->session->username; ?></a></li>
									<li><a href="<?php echo base_url(); ?>logout">Logout</a></li>
								<?php } else { ?>
									<li><a href="<?php echo base_url(); ?>login">Login</a></li>
									<li><a href="<?php echo base_url(); ?>register">Register</a></li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="sticky-header navbar-expand-lg">
				<div class="menu-bar clearfix">
					<div class="container clearfix">
						<!-- Header Logo ==== -->
						<div class="menu-logo">
							<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/frontweb/images/logo.png" alt=""></a>
						</div>
						<!-- Mobile Nav Button ==== -->
						<button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
							<span></span>
							<span></span>
							<span></span>
						</button>
						<!-- Author Nav ==== -->
						<div class="secondary-menu">
							<div class="secondary-inner">
								<ul>
									<li><a href="javascript:;" class="btn-link"><i class="fa fa-facebook"></i></a></li>
									<li><a href="javascript:;" class="btn-link"><i class="fa fa-google-plus"></i></a>
									</li>
									<li><a href="javascript:;" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
									<!-- Search Button ==== -->
									<li class="search-btn"><button id="quik-search-btn" type="button" class="btn-link"><i class="fa fa-search"></i></button></li>
								</ul>
							</div>
						</div>
						<!-- Search Box ==== -->
						<div class="nav-search-bar">
							<form action="#">
								<input name="search" value="" type="text" class="form-control" placeholder="Type to search">
								<span><i class="ti-search"></i></span>
							</form>
							<span id="search-remove"><i class="ti-close"></i></span>
						</div>
						<!-- Menu -->
						<?php $this->load->view('includes/menu'); ?>
					</div>
				</div>
			</div>
		</header>
		<!-- Header Top END ==== -->