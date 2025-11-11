<?php include"include/header.php"; ?>

<?php 

$limit = 12;
$status = 1;
$order_by = $request->getVar('order_by') ?:'1';
$filter_search_value = $request->getVar('filter_search_value');
$page = $request->getVar('page') ?: 1;
$category = $request->getVar('category') ?: 0;
$offset = ($page - 1) * $limit;



$table_name = "portfolio";
$data['route'] = base_url('bike-list');   


$query = $db->table($table_name)
->join('categories', 'categories.id = '.$table_name.'.cat_id', 'left')
->select("{$table_name}.*, categories.name as category_name")
->where([
    $table_name . '.status' => $status,
]);

if(!empty($category)) $query->where('category', $category);

$query->orderBy($table_name . '.id', 'asc'); 

if(!empty($filter_search_value))
{
    $query->groupStart()
        ->like($table_name . '.name', $filter_search_value)
    ->groupEnd();
}

$total = $query->countAllResults(false);
$data_list = $query->limit($limit, $offset)->get()->getResult();
$data['pager'] = $pager->makeLinks($page, $limit, $total);
$data['totalData'] = $total;
$data['startData'] = $offset + 1;
$data['endData'] = ($offset + $limit > $total) ? $total : ($offset + $limit);
$data['data_list'] = $data_list;

?>


	<!-- Start main-content -->
	<section class="page-title" style="background-image: url(images/background/page-title.jpg);">
		<div class="auto-container">
			<div class="title-outer">
				<h1 class="title">Projects</h1>
				<ul class="page-breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li><a href="#">Pages</a></li>
					<li>Projects</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->

	<!-- Gallery Section -->
	<section class="">
		<div class="container">
			<div class="row g-3">
				

				<?php foreach ($data_list as $key => $value) { ?>
					<div class="col-lg-4 col-md-6 col-sm-12">
						<!-- Project Block -->
						<div class="project-block">
							<div class="inner-box">
								<div class="image-box">
									<figure class="image"><a href="<?=base_url($value->slug)?>"><img src="<?=image_check($value->image) ?>" alt=""></a>
									</figure>
									<div class="info-box">
										<a href="<?=base_url($value->slug)?>" class="read-more"><i class="fa fa-long-arrow-alt-right"></i></a>
										<span class="cat"><?=$value->category_name?></span>
										<h6 class="title"><a href="<?=base_url($value->slug)?>"><?=$value->name?></a></h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>

			</div>


			<div class="row">

				<div class="pagination d-flex align-items-center justify-content-center">        
                    <?=$data['pager']?>
                </div>
				
			</div>


		</div>
	</section>
	<!-- End Gallery Section -->
<?php include"include/footer.php"; ?>