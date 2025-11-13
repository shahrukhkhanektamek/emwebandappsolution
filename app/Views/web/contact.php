<?php include"include/header.php"; ?>
	<!-- Start main-content -->
	<section class="page-title" style="background-image: url(images/background/page-title.jpg);">
		<div class="auto-container">
			<div class="title-outer">
				<h1 class="title">Contact Us</h1>
				<ul class="page-breadcrumb">
					<li><a href="<?=base_url()?>">Home</a></li>
					<li>Contact</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->

	<!--Contact Details Start-->
	<section class="contact-details">
		<div class="container ">
			<div class="row">
				<div class="col-xl-5 col-lg-6 mb-md-60">
					<div class="contact-details__right">
						<div class="sec-title">
							<span class="sub-title">Need any help?</span>
							<h2>Get in touch with us</h2>
							
						</div>
						<ul class="list-unstyled contact-details__info">
							<li>
								<div class="icon">
									<span class="lnr-icon-phone-plus"></span>
								</div>
								<div class="text">
									<h6>Have any question?</h6>
									<a href="tel:+91<?=$contact_detail->mobile?>"><span>Free</span> +91-<?=$contact_detail->mobile?></a>
								</div>
							</li>
							<li>
								<div class="icon">
									<span class="lnr-icon-envelope1"></span>
								</div>
								<div class="text">
									<h6>Write email</h6>
									<a href="mailto:<?=$contact_detail->email?>"><?=$contact_detail->email?></span></a>
								</div>
							</li>
							<?php if(!empty($contact_detail->address)){?>
								<li>
									<div class="icon">
										<span class="lnr-icon-location"></span>
									</div>
									<div class="text">
										<h6>Visit anytime</h6>
										<span><?=$contact_detail->address?></span>
									</div>
								</li>
							<?php } ?>

						</ul>
					</div>
				</div>
				<div class="col-xl-7 col-lg-6">
					<!-- Google Map HTML Codes -->
					<?=$contact_detail->google_map?>
				</div>
			</div>
		</div>
	</section>
	<!--Contact Details End-->

	<!--Contact Details Start-->
	<section class="team-contact-form">
		<div class="container pb-100">
			<div class="sec-title text-center">
				<span class="sub-title">Contact With Us Now</span>
				<h2 class="section-title__title">Feel Free to Write Our <br> Tecnology Experts</h2>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<!-- Contact Form -->
					

					<form class="form_data" method="POST" action="<?=env('contact_api')?>" enctype="multipart/form-data" novalidate id="contactPageForm">
                        <input type="hidden" name="url" value="<?=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">

						<div class="row">
							<div class="col-sm-6 form-group">
								<div class="mb-3">
									<input name="name" class="form-control required" type="text" placeholder="Enter Name" required>
								</div>
							</div>
							<div class="col-sm-6 form-group">
								<div class="mb-3">
									<input name="phone" class="form-control" type="text" placeholder="Enter Phone" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 form-group">
								<div class="mb-3">
									<input name="email" class="form-control required email" type="email" placeholder="Enter Email">
								</div>
							</div>
						</div>
						<div class="mb-3 form-group">
							<textarea name="message" class="form-control required" rows="7" placeholder="Enter Message"></textarea>
						</div>
						<div class="mb-3 text-center">
							<input name="form_botcheck" class="form-control" type="hidden" value="" />
							<button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..."><span class="btn-title">Send message</span></button>
							<button type="reset" class="theme-btn btn-style-one"><span class="btn-title">Reset</span></button>
						</div>
					</form>
					<!-- Contact Form Validation-->
				</div>
			</div>
		</div>
	</section>
	<!--Contact Details End-->
<?php include"include/footer.php"; ?>