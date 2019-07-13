<!-- Footer ==== -->
<footer>
	<div class="footer-top">
		<div class="pt-exebar">
			<div class="container">
				<div class="d-flex align-items-stretch">
					<div class="pt-logo mr-auto">
						<a href="index.html"><img src="<?php echo base_url(); ?>assets/frontweb/images/logo-white.png" alt="" /></a>
					</div>
					<div class="pt-social-link">
						<ul class="list-inline m-a0">
							<li><a href="#" class="btn-link"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="btn-link"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
					<div class="pt-btn-join">
						<a href="#" class="btn ">Join Now</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12 col-sm-12 footer-col-4">
					<div class="widget">
						<h5 class="footer-title">Sign Up For A Newsletter</h5>
						<p class="text-capitalize m-b20">Weekly Breaking news analysis and cutting edge advices
							on job searching.</p>
						<div class="subscribe-form m-b20">
							<form class="subscription-form" action="http://Codewife.com/demo/assets/script/mailchamp.php" method="post">
								<div class="ajax-message"></div>
								<div class="input-group">
									<input name="email" required="required" class="form-control" placeholder="Your Email Address" type="email">
									<span class="input-group-btn">
										<button name="submit" value="Submit" type="submit" class="btn"><i class="fa fa-arrow-right"></i></button>
									</span>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-5 col-md-7 col-sm-12">
					<div class="row">
						<div class="col-4 col-lg-4 col-md-4 col-sm-4">
							<div class="widget footer_widget">
								<h5 class="footer-title">Company</h5>
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="about-1.html">About</a></li>
									<li><a href="faq-1.html">FAQs</a></li>
									<li><a href="contact-1.html">Contact</a></li>
								</ul>
							</div>
						</div>
						<div class="col-4 col-lg-4 col-md-4 col-sm-4">
							<div class="widget footer_widget">
								<h5 class="footer-title">Get In Touch</h5>
								<ul>
									<li><a href="http://Codewife.com/admin/index.html">Dashboard</a></li>
									<li><a href="blog-classic-grid.html">Blog</a></li>
									<li><a href="portfolio.html">Portfolio</a></li>
									<li><a href="event.html">Event</a></li>
								</ul>
							</div>
						</div>
						<div class="col-4 col-lg-4 col-md-4 col-sm-4">
							<div class="widget footer_widget">
								<h5 class="footer-title">Courses</h5>
								<ul>
									<li><a href="courses.html">Courses</a></li>
									<li><a href="courses-details.html">Details</a></li>
									<li><a href="membership.html">Membership</a></li>
									<li><a href="profile.html">Profile</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-3 col-md-5 col-sm-12 footer-col-4">
					<div class="widget widget_gallery gallery-grid-4">
						<h5 class="footer-title">Our Gallery</h5>
						<ul class="magnific-image">
							<li><a href="assets/images/gallery/pic1.jpg" class="magnific-anchor"><img src="<?php echo base_url(); ?>assets/frontweb/images/gallery/pic1.jpg" alt=""></a></li>
							<li><a href="assets/images/gallery/pic2.jpg" class="magnific-anchor"><img src="<?php echo base_url(); ?>assets/frontweb/images/gallery/pic2.jpg" alt=""></a></li>
							<li><a href="assets/images/gallery/pic3.jpg" class="magnific-anchor"><img src="<?php echo base_url(); ?>assets/frontweb/images/gallery/pic3.jpg" alt=""></a></li>
							<li><a href="assets/images/gallery/pic4.jpg" class="magnific-anchor"><img src="<?php echo base_url(); ?>assets/frontweb/images/gallery/pic4.jpg" alt=""></a></li>
							<li><a href="assets/images/gallery/pic5.jpg" class="magnific-anchor"><img src="<?php echo base_url(); ?>assets/frontweb/images/gallery/pic5.jpg" alt=""></a></li>
							<li><a href="assets/images/gallery/pic6.jpg" class="magnific-anchor"><img src="<?php echo base_url(); ?>assets/frontweb/images/gallery/pic6.jpg" alt=""></a></li>
							<li><a href="assets/images/gallery/pic7.jpg" class="magnific-anchor"><img src="<?php echo base_url(); ?>assets/frontweb/images/gallery/pic7.jpg" alt=""></a></li>
							<li><a href="assets/images/gallery/pic8.jpg" class="magnific-anchor"><img src="<?php echo base_url(); ?>assets/frontweb/images/gallery/pic8.jpg" alt=""></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 text-center"> © 2019 <span class="text-white">Codewife</span> All Rights Reserved.</div>
			</div>
		</div>
	</div>
</footer>
<!-- Footer END ==== -->
<button class="back-to-top fa fa-chevron-up"></button>
</div>

<?php
if (!empty($scripts)) {
	foreach ($scripts as $script) {
		echo '<script src="' . $script . '"></script>';
	}
}
?>

<script>
	jQuery(document).ready(function() {
		var ttrevapi;
		var tpj = jQuery;
		if (tpj("#rev_slider_486_1").revolution == undefined) {
			revslider_showDoubleJqueryError("#rev_slider_486_1");
		} else {
			ttrevapi = tpj("#rev_slider_486_1").show().revolution({
				sliderType: "standard",
				jsFileLocation: "//Codewife.com/demo/xhtml/assets/vendors/revolution/js/",
				sliderLayout: "fullwidth",
				dottedOverlay: "none",
				delay: 9000,
				navigation: {
					keyboardNavigation: "on",
					keyboard_direction: "horizontal",
					mouseScrollNavigation: "off",
					mouseScrollReverse: "default",
					onHoverStop: "on",
					touch: {
						touchenabled: "on",
						swipe_threshold: 75,
						swipe_min_touches: 1,
						swipe_direction: "horizontal",
						drag_block_vertical: false
					},
					arrows: {
						style: "uranus",
						enable: true,
						hide_onmobile: false,
						hide_onleave: false,
						tmp: '',
						left: {
							h_align: "left",
							v_align: "center",
							h_offset: 10,
							v_offset: 0
						},
						right: {
							h_align: "right",
							v_align: "center",
							h_offset: 10,
							v_offset: 0
						}
					},

				},
				viewPort: {
					enable: true,
					outof: "pause",
					visible_area: "80%",
					presize: false
				},
				responsiveLevels: [1240, 1024, 778, 480],
				visibilityLevels: [1240, 1024, 778, 480],
				gridwidth: [1240, 1024, 778, 480],
				gridheight: [768, 600, 600, 600],
				lazyType: "none",
				parallax: {
					type: "scroll",
					origo: "enterpoint",
					speed: 400,
					levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 46, 47, 48, 49, 50, 55],
					type: "scroll",
				},
				shadow: 0,
				spinner: "off",
				stopLoop: "off",
				stopAfterLoops: -1,
				stopAtSlide: -1,
				shuffle: "off",
				autoHeight: "off",
				hideThumbsOnMobile: "off",
				hideSliderAtLimit: 0,
				hideCaptionAtLimit: 0,
				hideAllCaptionAtLilmit: 0,
				debugMode: false,
				fallbacks: {
					simplifyAll: "off",
					nextSlideOnWindowFocus: "off",
					disableFocusListener: false,
				}
			});
		}
	});
</script>
</body>

</html>