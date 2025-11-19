<?php include"include/header.php"; ?>
	<!-- Start main-content -->
	<section class="page-title" style="background-image: url(images/background/page-title.jpg);">
		<div class="auto-container">
			<div class="title-outer">
				<h1 class="title">About Us</h1>
				<ul class="page-breadcrumb">
					<li><a href="<?=base_url()?>">Home</a></li>
					<li>About Us</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->

	<!-- About Section -->
	<section class="about-section">
		<div class="auto-container">
			<div class="row">
				<div class="content-column col-xl-6 col-lg-7 col-md-12 col-sm-12 order-2 wow fadeInRight" data-wow-delay="600ms">
					<div class="inner-column">
						<div class="sec-title">
							<span class="sub-title">Get to Know</span>
							<h2>Your Digital Growth Partner</h2>
							<div class="text">
								At EM Web App Solution, we believe technology is not just about building websites or mobile apps – it’s about creating digital experiences that empower businesses to grow and connect with people in smarter ways.<br><br>
								
								Founded with the vision of delivering innovative, reliable, and scalable IT solutions, we specialize in crafting custom websites, mobile applications, and digital platforms tailored to your unique needs.<br><br>

								Our team of passionate developers, designers, and strategists work hand-in-hand to ensure every solution we deliver is:
							</div>
						</div>

						<ul class="list-style-two">
							<li><i class="fa fa-check-circle"></i> <b>Smart –</b> built with the latest technologies and trends.</li>
							<li><i class="fa fa-check-circle"></i> <b>Scalable –</b> designed to grow with your business.</li>
							<li><i class="fa fa-check-circle"></i> <b>User-Friendly –</b> focused on providing the best customer experience.</li>
							<li><i class="fa fa-check-circle"></i> <b>Future-Ready –</b> ready to adapt to the ever-changing digital world.</li>
						</ul>

						<div class="btn-box">
							<a href="tel:+91 8368379190" class="info-btn">
								<i class="icon fa fa-phone"></i>
								<small>Call Anytime</small> +91 8368379190
							</a>
							<a href="page-about.html" class="theme-btn btn-style-one"><span class="btn-title">Explore now</span></a>
						</div>
					</div>
				</div>

				<!-- Image Column -->
				<div class="image-column col-xl-6 col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column wow fadeInLeft">
						<figure class="image-1 overlay-anim wow fadeInUp"><img src="images/resource/about-8.jpg" alt=""></figure>
						<figure class="image-2 overlay-anim wow fadeInRight"><img src="images/resource/about-9.jpg" alt=""></figure>
						<div class="experience bounce-y">
							<div class="inner">
								<i class="icon flaticon-discuss"></i>
								<div class="text"><strong>10+</strong> Years of <br>experience</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Emd About Section -->

	<!-- Services Section -->
	<section class="services-section pt-0">
		<div class="auto-container">
			<div class="sec-title text-center">
				<span class="sub-title">What We’re Offering</span>
				<h2>Services we’re offering to <br>our customers.</h2>
			</div>

			<div class="row">
				<?php 
					$services = $db->table('service')->where(["status"=>1,])->get()->getResult();
					foreach ($services as $key => $value) {						
				?>
						<!-- Service Block -->
						<div class="service-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
							<div class="inner-box">
								<div class="icon-box"><i class="icon <?=$value->icon?>"></i></div>
								<h5 class="title"><a ><?=$value->name?></a></h5>
								<div class="text"><?=$value->sort_description?></div>
								<a href="<?=$value->slug?>" class="read-more"><i class="fa fa-long-arrow-alt-right"></i> Read more</a>
							</div>
						</div>
						<!-- Service Block -->
				<?php } ?>
			</div>

			<div class="bottom-box">
				<div class="text">Trust the experts for all your <strong>web design & development</strong> needs.</div>
				<a href="services" class="theme-btn btn-style-one"><span class="btn-title">Explore now</span></a>
			</div>
		</div>
	</section>
	<!-- End Services Section-->





	<!-- Clients Section   -->
	<section class="clients-section">
		<div class="auto-container">
			<!-- Sponsors Outer -->
			<div class="sponsors-outer">
				<!--clients carousel-->
				<ul class="clients-carousel owl-carousel owl-theme">
					<li class="slide-item"> <a href="#"><img src="images/resource/client.png" alt=""></a> </li>
					<li class="slide-item"> <a href="#"><img src="images/resource/client.png" alt=""></a> </li>
					<li class="slide-item"> <a href="#"><img src="images/resource/client.png" alt=""></a> </li>
					<li class="slide-item"> <a href="#"><img src="images/resource/client.png" alt=""></a> </li>
					<li class="slide-item"> <a href="#"><img src="images/resource/client.png" alt=""></a> </li>
				</ul>
			</div>
		</div>
	</section>
	<!--End Clients Section -->

<?php include"include/footer.php"; ?>