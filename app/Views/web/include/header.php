<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<!-- Stylesheets -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->

<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<?php include"meta.php"; ?>


<link rel="stylesheet" href="<?=base_url('public')?>/toast/saber-toast.css">
<link rel="stylesheet" href="<?=base_url('public')?>/toast/style.css">
<link rel="stylesheet" href="<?=base_url('public')?>/front_css.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="<?=base_url('public')?>/front_script.js"></script>
<link rel="stylesheet" href="<?=base_url('public')?>/upload-multiple/style.css">
<script src="<?=base_url('public')?>/upload-multiple/script.js"></script>    
<link rel="stylesheet" href="<?=base_url('public/')?>/assetsadmin/select2/css/select2.min.css">


</head>

<body>

<div class="page-wrapper">

	<!-- Preloader -->
	<div class="preloader"></div>

	<!-- Main Header-->
	<header class="main-header header-style-three">
		<!-- Header Top -->
		<!-- <div class="header-top">
			<div class="inner-container">

				<div class="top-left">
					<ul class="list-style-one">
						<li><i class="fa fa-envelope"></i> <a href="mailto:<?=$contact_detail->email?>"><span class="__cf_email__" ><?=$contact_detail->email?></span></a></li>
						<li><i class="fa fa-map-marker"></i> Delhi</li>
					</ul>
				</div>

				<div class="top-right">
					<ul class="useful-links">
						<li><a href="#">Contact</a></li>
					</ul>
					<ul class="social-icon-one">
						<li><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
						<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
						<li><a href="#"><span class="fab fa-instagram"></span></a></li>
					</ul>
				</div>
			</div>
		</div> -->
		<!-- Header Top -->

		<div class="header-lower">
			<div class="container-fluid">
				<!-- Main box -->
				<div class="main-box">
					<div class="logo-box">
						<div class="logo"><a href="<?=base_url() ?>"><img src="images/logo.png" alt="" title="Tronis"></a></div>
					</div>

					<!--Nav Box-->
					<div class="nav-outer">
						<nav class="nav main-menu">
							<ul class="navigation">
								<li><a href="<?=base_url()?>">Home</a></li>
								<li><a href="about">About Us</a></li>
								<li><a href="services">Services</a></li>
								<li><a href="projects">Projects</a></li>
								<li><a href="shop">Shop</a></li>
								<li><a href="contact">Get in Touch</a></li>
							</ul>
						</nav>

						<!-- Main Menu End-->
					</div>

					<div class="outer-box">
						

						<a href="tel:+91<?=$contact_detail->mobile?>" class="info-btn">
							<i class="icon fa fa-phone"></i>
							<small>Call Anytime</small>+91-<?=$contact_detail->mobile?>
						</a>

						<!-- Mobile Nav toggler -->
						<div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
					</div>
				</div>
			</div>
		</div>

		<!-- Mobile Menu  -->
		<div class="mobile-menu">
			<div class="menu-backdrop"></div>

			<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
			<nav class="menu-box">
				<div class="upper-box">
					<div class="nav-logo"><a href="<?=base_url() ?>"><img src="images/logo.png" alt="" title=""></a></div>
					<div class="close-btn"><i class="icon fa fa-times"></i></div>
				</div>

				<ul class="navigation clearfix">
					<!--Keep This Empty / Menu will come through Javascript-->
				</ul>
				<ul class="contact-list-one">
					<li>
						<!-- Contact Info Box -->
						<div class="contact-info-box">
							<i class="icon lnr-icon-phone-handset"></i>
							<span class="title">Call Now</span>
							<a href="tel:+91-<?=$contact_detail->mobile?>">+91-<?=$contact_detail->mobile?></a>
						</div>
					</li>
					<li>
						<!-- Contact Info Box -->
						<div class="contact-info-box">
							<span class="icon lnr-icon-envelope1"></span>
							<span class="title">Send Email</span>
							<a href="mailto:<?=$contact_detail->email?>"><span class="__cf_email__" ><?=$contact_detail->email?></span></a>
						</div>
					</li>
					
				</ul>


				<ul class="social-links">
					<li><a href="<?=$contact_detail->twitter?>"><i class="fab fa-twitter"></i></a></li>
					<li><a href="<?=$contact_detail->facebook?>"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="<?=$contact_detail->instagram?>"><i class="fab fa-instagram"></i></a></li>
				</ul>
			</nav>
		</div><!-- End Mobile Menu -->

		

		<!-- Sticky Header  -->
		<div class="sticky-header">
			<div class="auto-container">
				<div class="inner-container">
					<!--Logo-->
					<div class="logo">
						<a href="<?=base_url() ?>" title=""><img src="images/logo-2.png" alt="" title=""></a>
					</div>

					<!--Right Col-->
					<div class="nav-outer">
						<!-- Main Menu -->
						<nav class="main-menu">
							<div class="navbar-collapse show collapse clearfix">
								<ul class="navigation clearfix">
									<!--Keep This Empty / Menu will come through Javascript-->
								</ul>
							</div>
						</nav><!-- Main Menu End-->

						<!--Mobile Navigation Toggler-->
						<div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
					</div>
				</div>
			</div>
		</div><!-- End Sticky Menu -->
	</header>
	<!--End Main Header -->