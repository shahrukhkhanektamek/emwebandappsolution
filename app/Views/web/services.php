<?php include"include/header.php"; ?>
	<!-- Start main-content -->
	<section class="page-title" style="background-image: url(images/background/page-title.jpg);">
		<div class="auto-container">
			<div class="title-outer">
				<h1 class="title">Services</h1>
				<ul class="page-breadcrumb">
					<li><a href="<?=base_url()?>">Home</a></li>
					<li><a href="#">Pages</a></li>
					<li>Services</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->

	<!-- Services Section -->
	<section class="">
		<div class="container pb-90">

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
								<a href="<?=base_url(''.$value->slug)?>" class="read-more"><i class="fa fa-long-arrow-alt-right"></i> Read more</a>
							</div>
						</div>
						<!-- Service Block -->
				<?php } ?>
			</div>
		</div>
	</section>
	<!-- End Services Section-->

<?php include"include/footer.php"; ?>