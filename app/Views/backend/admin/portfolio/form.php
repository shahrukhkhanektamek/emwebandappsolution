<?=view('backend/include/header') ?>


<div class="page-content table_page">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                    <h4 class="mb-sm-0"><?=$data['page_title']?></h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="<?=base_url('/admin')?>">Dashboard</a></li>
                            <li class="breadcrumb-item active"><a ><?=$data['title']?></a></li>
                            <li class="breadcrumb-item active"><?=$data['page_title']?></li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <form class="row g-3 form_data" action="<?=$data['route'].'/update'?>" method="post" enctype="multipart/form-data" id="form_data_submit" novalidate>

             <?= csrf_field() ?>
            <input type="hidden" name="id" value="<?=encript(@$row->id)?>">
            
            <!--end col-->
            <div class="col-lg-12">
                <div class="card">
                    <!--<div class="card-header">-->
                    <!--    <h4 class="card-title mb-0 flex-grow-1"><?=$data['title']?> Details</h4>-->
                    <!--</div>-->

                    <div class="card-body">
                        <div class="live-preview">
                            <div class="row g-3">                               
                               
                                
                                <div class="col-md-4">
                                    <label class="form-label">Categories <span class="text-danger">*</span></label>
                                    <select class="form-control" name="cat_id" id="cat_id">
                                        <option value="">Select</option>
                                        <?php
                                            $cateList = $db->table('categories')->get()->getResultObject();
                                            foreach ($cateList as $key => $value) {
                                                $selected = '';
                                                if(@$row->cat_id==$value->id) $selected = 'selected';
                                        ?>
                                            <option value="<?=$value->id ?>" <?= $selected?> ><?=$value->name ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            
                                <div class="col-md-4">
                                    <label class="form-label">Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="name" placeholder="i.e Yamaha MT 15 V2.0" value="<?=@$row->name?>" required>
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Slug <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="slug" placeholder="i.e yamaha-mt-15-v2" value="<?=@$row->slug?>" >
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Link </label>
                                    <input type="text" class="form-control" name="link" placeholder="" value="<?=@$row->link?>" >
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Client <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="client" placeholder="" value="<?=@$row->client?>" >
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Demo Front Link </label>
                                    <input type="text" class="form-control" name="demo_front_link" placeholder="" value="<?=env('demo_domain').@$row->demo_front_link?>" >
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Username </label>
                                    <input type="text" class="form-control" name="demo_front_username" placeholder="" value="<?=@$row->demo_front_username?>" >
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Password </label>
                                    <input type="text" class="form-control" name="demo_front_password" placeholder="" value="<?=@$row->demo_front_password?>" >
                                </div>
                                
                                <div class="col-md-4">
                                    <label class="form-label">Demo Admin Link </label>
                                    <input type="text" class="form-control" name="demo_admin_link" placeholder="" value="<?=env('demo_domain').@$row->demo_admin_link?>" >
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Username </label>
                                    <input type="text" class="form-control" name="demo_admin_username" placeholder="" value="<?=@$row->demo_admin_username?>" >
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Password </label>
                                    <input type="text" class="form-control" name="demo_admin_password" placeholder="" value="<?=@$row->demo_admin_password?>" >
                                </div>


                                <div class="col-lg-12">
                                    <label class="form-label">Sort Description <span class="text-danger">*</span></label>
                                    <textarea class="form-control" name="sort_description" placeholder="i.e The XTEC version of India’s favourite commuter is available in two variants and four colour schemes. Check out images, specs, and user reviews at BikeKing." rows="3" required><?=@$row->sort_description?></textarea>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-label">Full Description </label>
                                    <textarea class="form-control" name="full_description" placeholder="i.e The XTEC version of India’s favourite commuter is available in two variants and four colour schemes. Check out images, specs, and user reviews at BikeKing." rows="3" required><?=@$row->full_description?></textarea>
                                    <script>CKEDITOR.replace( 'full_description' );</script>
                                </div>
                           
                            
                                <div class="col-lg-12">
                                    <label class="form-label">Image <span class="text-danger">*</span> <small>If you want to covert .webp file <a href="https://cloudconvert.com/jpg-to-webp" target="_blank">Click to open link</a></small></label>
                                    <div class="col-lg-12">
                                        <input class="form-control upload-single-image" type="file" name="image" data-target="image" accept="image/*" @if(empty($row))  @endif>
                                        <img class="upload-img-view img-thumbnail mt-2 mb-2 image" id="viewer" style="width:auto;height:120px;overflow:hidden;" src="<?=image_check(@$row->image)?>" alt="banner image"/>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-label">Image (Upload Multiples) <span class="text-danger">*</span></label>
                                    <div class="col-lg-12">
                                        <?php
                                             $file_data = array(
                                                 "position"=>2,
                                                 "columna_name"=>"images",
                                                 "multiple"=>true,
                                                 "accept"=>'image/*',
                                                 "col"=>"col-md-2",
                                                 "alt_text"=>"none",
                                                 "row"=>$row,
                                             );
                                        ?>
                                        <?=view('upload-multiple/index',compact('file_data','db'))?>
                                    </div>
                                </div>

                                <?=view('backend/meta') ?>                                
                                
                               
                                <div class="col-md-12">
                                    <label for="planStatus" class="form-label">Status <span class="text-danger">*</span></label>
                                    <select class="js-example-basic-single" id="planStatus" name="status" data-minimum-results-for-search="Infinity" required>
                                        <option value="1" <?php if(!empty(@$row) && @$row->status==1) echo'selected' ?> >Active</option>
                                        <option value="0" <?php if(!empty(@$row) && @$row->status==0) echo'selected' ?> >Disable</option>
                                    </select>
                                    <div class="invalid-feedback">Please select any on option.</div>
                                </div>
                                <div class="col-12">
                                    <div class="text-start">
                                        <button type="submit" class="btn btn-success btn-label"><i class="ri-check-double-line label-icon align-middle fs-16 me-2"></i> Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </form>
        <!--end row-->
    </div>
    <!-- container-fluid -->
</div><!-- End Page-content -->



<script>
    $(document).on("change", "#fuel_type", function(e) {
        changeFuelType();
    });
    function changeFuelType() 
    {
        $("#body_type, #mileage, #displacement, #kilometres, #vehicle_type, #tworange, #biketime, #feature, #range, #per_hour, #charging_time").parent().hide();
        $("#body_type, #mileage, #displacement, #kilometres, #vehicle_type, #tworange, #biketime, #feature, #range, #per_hour, #charging_time").attr("required", false);

        $("#electric-section").hide();
        $("#petrol-section").hide();

        var fuel_type = $("#fuel_type").val();
        if(fuel_type==1)
        {
            $("#body_type, #mileage, #displacement, #kilometres").parent().show();
            $("#body_type, #mileage, #displacement, #kilometres").attr("required", true);

            $("#petrol-section").show();
        }
        else if(fuel_type==2)
        {
            $("#vehicle_type, #tworange, #biketime, #feature, #range, #per_hour, #charging_time").parent().show();
            $("#vehicle_type, #tworange, #biketime, #feature, #range, #per_hour, #charging_time").attr("required", true);

            $("#electric-section").show();
        }
    }
    changeFuelType();

</script>



<?=view('backend/include/footer') ?>