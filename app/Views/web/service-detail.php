<?php include"include/header.php"; ?>

				<!-- Start main-content -->
				<section class="page-title" style="background-image: url(images/background/page-title.jpg);">
					<div class="auto-container">
						<div class="title-outer">
							<h1 class="title"><?=$row->name ?></h1>
							<ul class="page-breadcrumb">
								<li><a href="index.html">Home</a></li>
								<li><?=$row->name ?></li>
							</ul>
						</div>
					</div>
				</section>


				<!--Start Services Details-->
				<section class="services-details">
					<div class="container">
						<div class="row">
							<!--Start Services Details Sidebar-->
							<div class="col-xl-4 col-lg-4">
								<div class="service-sidebar">
									<!--Start Services Details Sidebar Single-->
									<div class="sidebar-widget service-sidebar-single">

										<div class="sidebar-service-list">
											<ul>
												<?php 
													$services = $db->table('service')->where(["status"=>1,])->get()->getResult();
													foreach ($services as $key => $value) {						
												?>
													<li><a href="<?=$value->slug?>" class="current"><i class="fas fa-angle-right"></i><span><?=$value->name?></span></a></li>
												<?php } ?>
											</ul>
										</div>

										<div class="service-details-help">
											<div class="help-shape-1"></div>
											<div class="help-shape-2"></div>
											<h2 class="help-title">Contact with <br> us for any <br> advice</h2>
											<div class="help-icon">
												<span class=" lnr-icon-phone-handset"></span>
											</div>
											<div class="help-contact">
												<p>Need help? Talk to an expert</p>
												<a href="tel:+91-8368379190">+91-8368379190</a>
											</div>
										</div>

										
									</div>
									<!--End Services Details Sidebar-->
								</div>
							</div>

							<!--Start Services Details Content-->
							<div class="col-xl-8 col-lg-8">
								<div class="services-details__content">
									<img src="<?=image_check($row->image) ?>" alt="" />
									<h3 class="mt-4">Service Overview</h3>
									<p><?=$row->sort_description?></p>
									<p><?=$row->full_description?></p>							
									
								</div>
							</div>
							<!--End Services Details Content-->
						</div>
					</div>
				</section>

				<!-- FAQ Section -->
				<section class="faqs-section">
					<div class="bg bg-pattern-4"></div>
					<div class="auto-container">
						<div class="sec-title text-center">
							<span class="sub-title">You’ve have Any Questions?</span>
							<h2>Frequently asked questions</h2>
						</div>

						<div class="row">
							<!-- FAQ Column -->
							<div class="faq-column col-lg-6 col-md-12 col-sm-12">
								<div class="inner-column">

									<ul class="accordion-box wow fadeInRight">
										<!--Block-->
										<li class="accordion block active-block">
											<div class="acc-btn active">Q1. What services does EM Web App Solution provide?
												<div class="icon fa fa-angle-down"></div>
											</div>
											<div class="acc-content current">
												<div class="content">
													<div class="text">We offer end-to-end IT services including Web Designing, Web Development, Mobile App Development, E-Commerce Solutions, CRM, UI/UX Design, Digital Marketing, Cloud & Hosting, and IT Consulting.</div>
												</div>
											</div>
										</li>

										<!--Block-->
										<li class="accordion block">
											<div class="acc-btn">Q2. How long does it take to build a website or mobile app?
												<div class="icon fa fa-angle-down"></div>
											</div>
											<div class="acc-content">
												<div class="content">
													<div class="text">The timeline depends on project complexity and requirements. A simple website can take 2–4 weeks, while custom web apps or mobile apps may take 2–3 months. We always share a detailed project plan before starting.</div>
												</div>
											</div>
										</li>


										<!--Block-->
										<li class="accordion block">
											<div class="acc-btn">Q3. Do you provide ongoing support after project delivery?
												<div class="icon fa fa-angle-down"></div>
											</div>
											<div class="acc-content">
												<div class="content">
													<div class="text">Yes, we provide maintenance and support services including bug fixes, updates, security patches, and new feature integration to keep your digital products running smoothly.</div>
												</div>
											</div>
										</li>


										<!--Block-->
										<li class="accordion block">
											<div class="acc-btn">Q4. Can you customize solutions according to my business needs?
												<div class="icon fa fa-angle-down"></div>
											</div>
											<div class="acc-content">
												<div class="content">
													<div class="text">Absolutely! We specialize in custom solutions tailored to your unique requirements, whether it’s a CRM system, e-commerce platform, or enterprise software.</div>
												</div>
											</div>
										</li>




									</ul>
								</div>
							</div>

							<div class="faq-column col-lg-6 col-md-12 col-sm-12">
								<div class="inner-column">

									<ul class="accordion-box wow fadeInRight">
										

										<!--Block-->
										<li class="accordion block">
											<div class="acc-btn">Q5. Do you help with SEO and digital marketing too?
												<div class="icon fa fa-angle-down"></div>
											</div>
											<div class="acc-content">
												<div class="content">
													<div class="text">Yes, along with development, we provide SEO, social media marketing, and other digital marketing services to help you grow online.</div>
												</div>
											</div>
										</li>


										<!--Block-->
										<li class="accordion block">
											<div class="acc-btn">Q6. What technologies do you work with?
												<div class="icon fa fa-angle-down"></div>
											</div>
											<div class="acc-content">
												<div class="content">
													<div class="text">We work with modern technologies like React, Laravel, Node.js, PHP, Python, Flutter, React Native, and cloud platforms such as AWS, Google Cloud, and Azure.</div>
												</div>
											</div>
										</li>


										<!--Block-->
										<li class="accordion block">
											<div class="acc-btn">Q7. How can I get a quote for my project?
												<div class="icon fa fa-angle-down"></div>
											</div>
											<div class="acc-content">
												<div class="content">
													<div class="text">You can contact us through our website or email with your project details. Our team will analyze your requirements and provide a free consultation along with a cost estimate.</div>
												</div>
											</div>
										</li>


										<!--Block-->
										<li class="accordion block">
											<div class="acc-btn">Q8. Do you work with international clients?
												<div class="icon fa fa-angle-down"></div>
											</div>
											<div class="acc-content">
												<div class="content">
													<div class="text">Yes, we proudly serve clients worldwide and have experience working on projects across different industries and regions.</div>
												</div>
											</div>
										</li>


									</ul>
								</div>
							</div>

							
						</div>
					</div>
				</section>
				<!--End FAQ Section -->
				<!--End Services Details-->


				<!-- Testimonial Section -->
	<section class="testimonial-section">
		<div class="bg bg-pattern-5"></div>
		<div class="auto-container">
			<div class="row">
				<div class="title-column col-xl-5 col-lg-4 col-md-12">
					<div class="sec-title light">
						<span class="sub-title">Our testimonials</span>
						<h2>What our clients love about us.</h2>
					</div>
				</div>

				<div class="testimonial-column col-xl-7 col-lg-8 col-md-12">
					<div class="carousel-outer">
						<div class="testimonial-carousel owl-carousel owl-theme">
							


							<!-- Testimonial Block -->
							<div class="testimonial-block">
								<div class="inner-box">
									<div class="image-box">
										<figure class="image"><img src="images/resource/testi-1.jpg" alt=""></figure>
										<div class="rating">
										</div>
									</div>
									<div class="text">"EM Web and App Solution ne hamare business ke liye ek fully customized mobile app develop kiya. Unki team ka professionalism aur timely delivery kaafi impressive thi. Highly recommended!"</div>
								</div>
							</div>
							<!-- Testimonial Block -->
							<div class="testimonial-block">
								<div class="inner-box">
									<div class="image-box">
										<figure class="image"><img src="images/resource/testi-1.jpg" alt=""></figure>
										<div class="rating">
										</div>
									</div>
									<div class="text">"Website development ke liye humne EM Web and App Solution ko hire kiya. Unhone humare requirements ko perfectly samjha aur modern design ke saath deliver kiya. Bahut satisfied!"</div>
								</div>
							</div>
							<!-- Testimonial Block -->
							<div class="testimonial-block">
								<div class="inner-box">
									<div class="image-box">
										<figure class="image"><img src="images/resource/testi-1.jpg" alt=""></figure>
										<div class="rating">
										</div>
									</div>
									<div class="text">"Digital solutions ke liye best IT company! EM Web and App Solution ne hamare workflow ko automate karne ke liye software develop kiya, aur support bhi hamesha prompt tha."</div>
								</div>
							</div>
							<!-- Testimonial Block -->
							<div class="testimonial-block">
								<div class="inner-box">
									<div class="image-box">
										<figure class="image"><img src="images/resource/testi-1.jpg" alt=""></figure>
										<div class="rating">
										</div>
									</div>
									<div class="text">"Unki team creative aur technical dono aspects mein kaafi strong hai. Hamari startup ke liye ek perfect website design kiya aur SEO-friendly solutions provide kiye."</div>
								</div>
							</div>
							<!-- Testimonial Block -->
							<div class="testimonial-block">
								<div class="inner-box">
									<div class="image-box">
										<figure class="image"><img src="images/resource/testi-1.jpg" alt=""></figure>
										<div class="rating">
										</div>
									</div>
									<div class="text">"EM Web and App Solution ke saath kaam karna easy aur productive experience tha. App development se leke deployment tak sab kuch smooth tha. Definitely 5 stars!"</div>
								</div>
							</div>







							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Testimonial Section -->


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