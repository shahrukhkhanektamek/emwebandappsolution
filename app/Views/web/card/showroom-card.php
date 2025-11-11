<div class="dl2-dealer-card dl_card_box bg-white p-3 rounded border overflow-hidden swiper-slide">
    <div class="figure_img position-relative overflow-hidden rounded">
        <img src="<?=image_check($value->image) ?>" loading="lazy" alt="not found" class="img-fluid">
        <span class="listing-count bg-secondary bg-opacity-75 text-white fw-500 rounded-end shadow py-1 px-3 position-absolute start-0 bottom-0"><?=$value->city_name ?></span>
    </div>
    <div class="px-md-3 pb-2">
        
            <h3 class="h5 mt-4 line-clamp1"><?=$value->company_name ?></h3>
        <span class="slide_meta_text d-block phone line-clamp1"><i class="fa-solid fa-location-dot"></i><?=$value->workshop_address ?></span>
        <span class="slide_meta_text d-block phone mt-1"><i class="fas fa-phone"></i><?=$value->phone ?></span>
        <div class="card-btns mt-3">
            <a href="https://wa.me/+91<?=$value->phone ?>" class="btn btn-outline-primary btn-sm fw-bold">Contact Dealer</a>
            <a href="tel:+91<?=$value->phone ?>" class="btn outline-btn btn-sm ms-2 fw-bold"><span class="fas fa-phone me-1"></span>Call</a>
        </div>
    </div>
</div>