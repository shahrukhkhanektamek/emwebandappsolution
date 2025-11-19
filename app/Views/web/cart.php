<?php include"include/header.php"; ?>

	<!-- Start main-content -->
	<section class="page-title" style="background-image: url(images/background/page-title.jpg);">
		<div class="auto-container">
			<div class="title-outer">
				<h1 class="title">Cart</h1>
				<ul class="page-breadcrumb">
					<li><a href="<?=base_url()?>">Home</a></li>
					<li>Cart</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->

	<!--cart Start-->
    <section>
      <div class="container pb-100">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-striped table-bordered tbl-shopping-cart">
                  <thead>
                    <tr>
                      <th></th>
                      <th>Photo</th>
                      <th>Product Name</th>
                      <th>Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="cart_item">
                      <td class="product-remove"><a title="Remove this item" class="remove" href="#">×</a></td>
                      <td class="product-thumbnail"><a href="#"><img alt="product" src="images/product/zip.jpg"></a></td>
                      <td class="product-name"><a >Captcha Source Code</a></td>                      
                      <td class="product-subtotal"><span class="amount">Rs. 50.00</span></td>
                    </tr>
                    
                    
                    
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-md-12 mt-30">
              <div class="row">
                <div class="col-md-5">
                  
                  
                </div>
                <div class="col-md-2">
                </div>
                <div class="col-md-5">
                  <h4>Cart Totals</h4>
                  <table class="table table-bordered cart-total">
                    <tbody>
                      <tr>
                        <td>Cart Subtotal</td>
                        <td>Rs. 50.00</td>
                      </tr>
                      <tr>
                        <td>Order Total</td>
                        <td>Rs. 50.00</td>
                      </tr>
                    </tbody>
                  </table>
                  <a class="theme-btn btn-style-one" href="checkout"><span class="btn-title">Proceed to Checkout</span> </a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
	<!--cart Start-->


<?php include"include/footer.php"; ?>