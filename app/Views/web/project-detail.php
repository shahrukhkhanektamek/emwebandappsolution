<?php include"include/header.php"; ?>
	<!-- Start main-content -->
	<section class="page-title" style="background-image: url(images/background/page-title.jpg);">
		<div class="auto-container">
			<div class="title-outer">
				<h1 class="title"><?=$row->name?></h1>
				<ul class="page-breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li>Projects</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->

	<!--Project Details Start-->
	<section class="project-details">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="project-details__top">
						<div class="project-details__img"> <img src="<?=image_check($row->image)?>" alt=""> </div>
					</div>
				</div>
			</div>
			<div class="project-details__content">
				<div class="row">
					<div class="col-xl-8 col-lg-8">
						<div class="project-details__content-left">
							<h3 class="mb-4"><?=$row->name?></h3>
							
							<p class=""><?=$row->sort_description?></p>
							<p class="mb-5"><?=$row->full_description?></p>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4">
						<div class="project-details__content-right">
							<div class="project-details__details-box">
								<div class="project-details__bg-shape"> </div>
								<ul class="list-unstyled project-details__details-list">
									<li>
										<p class="project-details__client">Date</p>
										<h4 class="project-details__name">10 January, 2023</h4>
									</li>
									<li>
										<p class="project-details__client">Client</p>
										<h4 class="project-details__name">Kodesolution Ltd</h4>
									</li>
									<li>
										<p class="project-details__client">Website</p>
										<h4 class="project-details__name">www.domain.com</h4>
									</li>
									<li>
										<p class="project-details__client">Location</p>
										<h4 class="project-details__name">New York, USA</h4>
									</li>
									<li>
										<p class="project-details__client">Value</p>
										<h4 class="project-details__name">$12,367</h4>
									</li>
									<li>
										<div class="project-details__social"> <a href="#"><i class="fab fa-twitter"></i></a> <a href="#"><i class="fab fa-facebook"></i></a> <a href="#"><i class="fab fa-pinterest-p"></i></a> <a href="#"><i class="fab fa-instagram"></i></a> </div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</section>
	<!--Project Details End-->



<?php include"include/footer.php"; ?>