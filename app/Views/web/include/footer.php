
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
							<div class="logo"><a href="<?=base_url()?>"><img src="images/logo-3.png" alt=""></a></div>
							<div class="text">Whether you’re a startup looking to build your first product or an established enterprise seeking digital transformation...</div>
							<ul class="social-icon-two">
								<li><a href="<?=$contact_detail->twitter?>"><i class="fab fa-twitter"></i></a></li>
								<li><a href="<?=$contact_detail->facebook?>"><i class="fab fa-facebook"></i></a></li>
								<li><a href="<?=$contact_detail->instagram?>"><i class="fab fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>

					<!--Footer Column-->
					<div class="footer-column col-xl-3 col-lg-4 col-md-4">
						<div class="footer-widget links-widget">
							<h6 class="widget-title">Explore</h6>
							<ul class="user-links">
								<li><a href="about">About Company</a></li>
								<li><a href="services">Services</a></li>
								<li><a href="projects">Our Projects</a></li>
								<li><a href="contact">Contact</a></li>
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
							<div class="text"><?=$contact_detail->address?></div>
							<ul class="contact-info">
								<li><i class="fa fa-envelope"></i> <a href="mailto:<?=$contact_detail->email?>"><span class="__cf_email__"><?=$contact_detail->email?></span></a><br></li>
								<li><i class="fa fa-phone-square"></i> <a href="tel:+91<?=$contact_detail->mobile?>">+91-<?=$contact_detail->mobile?></a><br></li>
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
					<div class="copyright-text">&copy; Copyright reserved by <a href="<?=base_url()?>">emwebandappsolution.com</a></div>
				</div>
			</div>
		</div>
	</footer>
	<!--End Main Footer -->

</div><!-- End Page Wrapper -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>






<div id='whatsapp-chat' class='hide'>
  <div class='header-chat'>
    <div class='head-home'>
      <div class='info-avatar'><img src='<?=base_url() ?>images/favicon.png' loading="lazy" alt="logo" /></div>
      <p><span class="whatsapp-name"><?=env('APP_NAME')?></span><br><small>Online</small></p>

    </div>
    <div class='get-new hide'>
      <div id='get-label'></div>
      <div id='get-nama'></div>
    </div>
  </div>
  <div class='home-chat'>

  </div>
  <div class='start-chat'>
    <div class="WhatsappChat__Component-sc-1wqac52-0 whatsapp-chat-body">
      <div class="WhatsappChat__MessageContainer-sc-1wqac52-1 dAbFpq">
        <div style="opacity: 0;" class="WhatsappDots__Component-pks5bf-0 eJJEeC">
          <div class="WhatsappDots__ComponentInner-pks5bf-1 hFENyl">
            <div class="WhatsappDots__Dot-pks5bf-2 WhatsappDots__DotOne-pks5bf-3 ixsrax"></div>
            <div class="WhatsappDots__Dot-pks5bf-2 WhatsappDots__DotTwo-pks5bf-4 dRvxoz"></div>
            <div class="WhatsappDots__Dot-pks5bf-2 WhatsappDots__DotThree-pks5bf-5 kXBtNt"></div>
          </div>
        </div>
        <div style="opacity: 1;" class="WhatsappChat__Message-sc-1wqac52-4 kAZgZq">
          <div class="WhatsappChat__Author-sc-1wqac52-3 bMIBDo"><?=env('APP_NAME')?></div>
          <div class="WhatsappChat__Text-sc-1wqac52-2 iSpIQi">Hi there 👋<br>How can I help you?</div>
          <div class="WhatsappChat__Time-sc-1wqac52-5 cqCDVm">1:40</div>
        </div>
      </div>
    </div>

    <div class='blanter-msg'>
      <textarea id='chat-input' placeholder='Write a response' maxlength='120' row='1'></textarea>
      <a href='javascript:void;' id='send-it'><svg viewBox="0 0 448 448">
          <path d="M.213 32L0 181.333 320 224 0 266.667.213 416 448 224z" />
        </svg></a>

    </div>
  </div>
  <div id='get-number'></div><a class='close-chat' href='javascript:void' aria-label="close">×</a>
</div>

<a class='blantershow-chat' href='javascript:void' title='Show Chat'><svg width="38" viewBox="0 0 24 24">
    <defs />
    <path fill="#FFFFFF" d="M20.5 3.4A12.1 12.1 0 0012 0 12 12 0 001.7 17.8L0 24l6.3-1.7c2.8 1.5 5 1.4 5.8 1.5a12 12 0 008.4-20.3z" />
    <path fill="#4caf50" d="M12 21.8c-3.1 0-5.2-1.6-5.4-1.6l-3.7 1 1-3.7-.3-.4A9.9 9.9 0 012.1 12a10 10 0 0117-7 9.9 9.9 0 01-7 16.9z" />
    <path fill="#FFFFFF" d="M17.5 14.3c-.3 0-1.8-.8-2-.9-.7-.2-.5 0-1.7 1.3-.1.2-.3.2-.6.1s-1.3-.5-2.4-1.5a9 9 0 01-1.7-2c-.3-.6.4-.6 1-1.7l-.1-.5-1-2.2c-.2-.6-.4-.5-.6-.5-.6 0-1 0-1.4.3-1.6 1.8-1.2 3.6.2 5.6 2.7 3.5 4.2 4.2 6.8 5 .7.3 1.4.3 1.9.2.6 0 1.7-.7 2-1.4.3-.7.3-1.3.2-1.4-.1-.2-.3-.3-.6-.4z" />
  </svg>
 </a>











	
<!-- </script><script src="js/jquery.js"></script>  -->
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

<script src="<?=base_url('public/')?>/toast/saber-toast.js"></script>
<script src="<?=base_url('public/')?>/toast/script.js"></script>
<script src="<?=base_url('public/')?>/assetsadmin/select2/js/select2.full.min.js"></script>


<!-- form submit -->
<!-- <script src="js/jquery.validate.min.js"></script> -->
<!-- <script src="js/jquery.form.min.js"></script> -->




<script  type="text/javascript">
$(document).on("click", "#send-it", function () {
  var a = document.getElementById("chat-input");
  if ("" != a.value) {
    var b = $("#get-number").text(),
      c = document.getElementById("chat-input").value,
      d = "https://web.whatsapp.com/send",
      e = b,
      f = "&text=" + c;
    if (
      /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
        navigator.userAgent
      )
    )
      var d = "whatsapp://send";
    var g = d + "?phone=+91<?=$contact_detail->whatsapp[0]?>" + e + f;
    window.open(g, "_blank");
  }
}),
  $(document).on("click", ".informasi", function () {
    (document.getElementById("get-number").innerHTML = $(this)
      .children(".my-number")
      .text()),
      $(".start-chat,.get-new").addClass("show").removeClass("hide"),
      $(".home-chat,.head-home").addClass("hide").removeClass("show"),
      (document.getElementById("get-nama").innerHTML = $(this)
        .children(".info-chat")
        .children(".chat-nama")
        .text()),
      (document.getElementById("get-label").innerHTML = $(this)
        .children(".info-chat")
        .children(".chat-label")
        .text());
  }),
  $(document).on("click", ".close-chat", function () {
    $("#whatsapp-chat").addClass("hide").removeClass("show");
  }),
  $(document).on("click", ".blantershow-chat", function () {
    $("#whatsapp-chat").addClass("show").removeClass("hide");
  });
</script>




</body>

</html>