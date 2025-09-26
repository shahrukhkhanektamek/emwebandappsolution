
	<!-- Main Footer -->
	<footer class="main-footer">
		<!-- <div class="bg bg-pattern-9"></div> -->
		

		<!--Widgets Section-->
		<div class="widgets-section">
			<div class="auto-container">
				<div class="row">
					<!--Footer Column-->
					<div class="footer-column col-xl-3 col-lg-12 col-md-12">
						<div class="footer-widget about-widget">
							<div class="logo"><a href="index.html"><img src="images/logo-3.png" alt=""></a></div>
							<div class="text">Whether you’re a startup looking to build your first product or an established enterprise seeking digital transformation...</div>
							<ul class="social-icon-two">
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-facebook"></i></a></li>
								<li><a href="#"><i class="fab fa-pinterest"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>

					<!--Footer Column-->
					<div class="footer-column col-xl-3 col-lg-4 col-md-4">
						<div class="footer-widget links-widget">
							<h6 class="widget-title">Explore</h6>
							<ul class="user-links">
								<li><a href="#">About Company</a></li>
								<li><a href="#">Meet the Team</a></li>
								<li><a href="#">News & Media</a></li>
								<li><a href="#">Our Projects</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div>

					<!--Footer Column-->
					<div class="footer-column col-xl-3 col-lg-4 col-md-4 col-sm-8">
						<div class="footer-widget gallery-widget">
							<h6 class="widget-title">Portfolio</h6>
							<div class="widget-content">
								<div class="outer clearfix">
									<figure class="image">
										<a href="#"><img src="images/resource/project-thumb-1.jpg" alt=""></a>
									</figure>
									<figure class="image">
										<a href="#"><img src="images/resource/project-thumb-2.jpg" alt=""></a>
									</figure>
									<figure class="image">
										<a href="#"><img src="images/resource/project-thumb-3.jpg" alt=""></a>
									</figure>
									<figure class="image">
										<a href="#"><img src="images/resource/project-thumb-4.jpg" alt=""></a>
									</figure>
									<figure class="image">
										<a href="#"><img src="images/resource/project-thumb-5.jpg" alt=""></a>
									</figure>
									<figure class="image">
										<a href="#"><img src="images/resource/project-thumb-6.jpg" alt=""></a>
									</figure>
								</div>
							</div>
						</div>
					</div>

					<!--Footer Column-->
					<div class="footer-column col-xl-3 col-lg-4 col-md-4">
						<div class="footer-widget contacts-widget">
							<h6 class="widget-title">Contact</h6>
							<div class="text">66 Road Broklyn Street, 600 New York, USA</div>
							<ul class="contact-info">
								<li><i class="fa fa-envelope"></i> <a href="mailto:emwebandappsolution@gmail.com"><span class="__cf_email__">emwebandappsolution@gmail.com</span></a><br></li>
								<li><i class="fa fa-phone-square"></i> <a href="tel:+918368379190">+91-8368379190</a><br></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--Footer Bottom-->
		<div class="footer-bottom">
			<div class="auto-container">
				<div class="inner-container">
					<div class="copyright-text">&copy; Copyright reserved by <a href="index.html">emwebandappsolution.com</a></div>
				</div>
			</div>
		</div>
	</footer>
	<!--End Main Footer -->

</div><!-- End Page Wrapper -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.js"></script> 
<script src="js/popper.min.js"></script>
<!--Revolution Slider-->
<script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="js/main-slider-script.js"></script>
<!--Revolution Slider-->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/knob.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/script.js"></script>
<!-- form submit -->
<script src="js/jquery.validate.min.js"></script>
<script src="js/jquery.form.min.js"></script>
<script>
	(function($) {
		$("#contact_form").validate({
			submitHandler: function(form) {
				var form_btn = $(form).find('button[type="submit"]');
				var form_result_div = '#form-result';
				$(form_result_div).remove();
				form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
				var form_btn_old_msg = form_btn.html();
				form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
				$(form).ajaxSubmit({
					dataType:  'json',
					success: function(data) {
						if( data.status == 'true' ) {
							$(form).find('.form-control').val('');
						}
						form_btn.prop('disabled', false).html(form_btn_old_msg);
						$(form_result_div).html(data.message).fadeIn('slow');
						setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
					}
				});
			}
		});
	})(jQuery);
</script>
</body>

</html>