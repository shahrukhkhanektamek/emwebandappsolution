<div class="<?=$class ?>">
    <?php if($value->is_new_variant==1){ ?>
        <span class="date position-absolute">New Variant</span>
    <?php } ?>
    <div class="feature-thumb position-relative overflow-hidden">
        <a href="<?=base_url($value->slug) ?>"><img src="<?=image_check($value->images) ?>" loading="lazy" alt="car" class="img-fluid"></a>
    </div>
    <div class="filter-card-content">
        <a href="<?=base_url($value->slug) ?>" class="mt-4 d-block"><h3 class="h5 mb-0 line-clamp1"><?=$value->name ?></h3></a>
        <span class="h6 meta-content"><strong> <?=price_formate($value->from_price) ?> - <?=number_format($value->to_price,2) ?> Lakh*</strong></span>
        <hr class="spacer mt-2 mb-2">
        <div class="card-feature-box d-flex align-items-center mb-4">

            <?php if($value->fuel_type==1){ ?>
            <div class="icon-box d-flex align-items-center">
                <span class="me-1"><i class="flaticon-speedometer"></i></span>
                <?=$value->mileage ?> kmph
            </div>
            <div class="icon-box d-flex align-items-center">
                <span class="me-1"><i class="flaticon-steering-wheel"></i></span>
                <?=$value->displacement  ?> cc
            </div>
            <div class="icon-box d-flex align-items-center">
                <span class="me-1"><i class="flaticon-petrol"></i></span>
                <?=$value->kilometres ?> kmpl
            </div>
            <?php } ?>
            <?php if($value->fuel_type==2){ ?>
            <div class="icon-box d-flex align-items-center">
                <span class="me-1"><i class="flaticon-speedometer"></i></span>
                <?=$value->ranges ?> kmph
            </div>
            <div class="icon-box d-flex align-items-center">
                <span class="me-1"><i class="flaticon-steering-wheel"></i></span>
                <?=$value->charging_time  ?> cc
            </div>
            <div class="icon-box d-flex align-items-center">
                <span class="me-1"><i class="flaticon-petrol"></i></span>
                <?=$value->per_hour ?> kmpl
            </div>
            <?php } ?>


        </div>
        <div class="card-btns mt-4">
            <a href="#bookingModal" data-id="<?=encript($value->id) ?>" data-type="1" class="btn btn-outline-primary btn-sm fw-bold bike-modal">Booking Now</a>
            <a href="#InquiryModal" data-id="<?=encript($value->id) ?>" data-type="2" class="btn btn-sm outline-btn fw-bold ms-2 bike-modal"><span class="far fa-comment-alt me-1"></span>Inquiry</a>
        </div>
    </div>
</div>