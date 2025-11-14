<?php include"include/header.php"; 
$images = [];
if(!empty($row->images))
{
	if(json_decode($row->images))
	{
		$images = json_decode($row->images);
	}
}
?>
	<!-- Start main-content -->
	<section class="page-title" style="background-image: url(images/background/page-title.jpg);">
		<div class="auto-container">
			<div class="title-outer">
				<h1 class="title"><?=$row->name?></h1>
				<ul class="page-breadcrumb">
					<li><a href="<?=base_url()?>">Home</a></li>
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
						<div class="projects-carousel owl-carousel owl-theme">
							<?php foreach ($images as $key => $value) { ?>
								<div class="project-details__img item">
									<img src="<?=image_check(@$value->image_path)?>" alt="">
								</div>
							<?php } ?>
						</div>
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
										<p class="project-details__client">Client</p>
										<h4 class="project-details__name"><?=$row->client?></h4>
									</li>
									<li>
										<p class="project-details__client">Website</p>
										<h4 class="project-details__name"><a target="_blank" href="<?=$row->link?>"><?=$row->link?></a></h4>
									</li>
									<li>
										<p class="project-details__client">Demo Front Link</p>
										<h4 class="m--0 project-details__name"><a href="<?=env('demo_domain').@$row->demo_front_link?>" target="_blank"><?=env('demo_domain').$row->demo_front_link?></a></h4>
										<p class="m--0">Username : <?=$row->demo_front_username?></p>
										<p class="m--0">Password : <?=$row->demo_front_password?></p>
									</li>
									<li>
										<p class="project-details__client">Demo Admin Link</p>
										<h4 class="m--0 project-details__name"><a href="<?=env('demo_domain').@$row->demo_admin_link?>" target="_blank"><?=env('demo_domain').$row->demo_admin_link?></a></h4>
										<p class="m--0">Username : <?=$row->demo_admin_username?></p>
										<p class="m--0">Password : <?=$row->demo_admin_password?></p>
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