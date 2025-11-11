<!-- <div class="row justify-content-center mt-4">
    <div class="col-lg-11">
        <img class="img-fluid w-100 overflow-hidden rounded-3" src="https://dummyimage.com/1200x120/e7e7f0/c4c6cf.jpg&text=Place Ads Here" loading="lazy" alt="ads">
    </div>
</div> -->
<div class="col-12">
    <div class="listing_card_item bg-white border rounded p-4 d-lg-flex align-items-center position-relative">
        <div class="thumb-wrapper overflow-hidden rounded flex-shrink-0">
            <a href="bike-details"><img src="<?=image_check($value->images) ?>" alt="car" class="img-fluid"></a>
        </div>
        <div class="listing_card_content ms-lg-4 mt-4 mt-lg-0">
            <a href="bike-details"><h3 class="h5 mb-3 line-clamp1"><?=$value->name ?></h5></a>
            <span class="d-block fw-500 h5 meta-content mb-1"><strong><?=price_formate($value->from_price) ?> - <?=number_format($value->to_price,2) ?> Lakh*</strong></span>
            <div class="card-feature-box d-flex flex-wrap align-items-center">
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
            <span class="meta-text"><small>*On-Road Price in Ahmedabad</small></span>
        </div>
    </div>
</div>