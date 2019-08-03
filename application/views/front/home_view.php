<!-- Content -->
<div class="page-content bg-white">
	<div class="section-area section-sp1 ovpr-dark bg-fix online-cours" style="background-image:url(<?php echo base_url(); ?>assets/frontweb/images/background/bg1.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center text-white">
					<h2>Online Courses To Learn</h2>
					<h5>Own Your Feature Learning New Skills Online</h5>
					<form class="cours-search">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="What do you want to learn today?	">
							<div class="input-group-append">
								<button class="btn" type="submit">Search</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="mw800 m-auto">
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="cours-search-bx m-b30">
							<div class="icon-box">
								<h3><i class="ti-user"></i><span class="counter">5</span>M</h3>
							</div>
							<span class="cours-search-text">Over 5 million student</span>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="cours-search-bx m-b30">
							<div class="icon-box">
								<h3><i class="ti-book"></i><span class="counter">30</span>K</h3>
							</div>
							<span class="cours-search-text">30,000 Courses.</span>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="cours-search-bx m-b30">
							<div class="icon-box">
								<h3><i class="ti-layout-list-post"></i><span class="counter">20</span>K</h3>
							</div>
							<span class="cours-search-text">Learn Anythink Online.</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="content-block">
		<!-- Popular Courses -->
		<?php if (!empty($popular_courses)) { ?>
			<div class="section-area section-sp2 popular-courses-bx">
				<div class="container">
					<div class="row">
						<div class="col-md-12 heading-bx left">
							<h2 class="title-head">Popular <span>Courses</span></h2>
							<p>It is a long established fact that a reader will be distracted by the readable
								content of a page</p>
						</div>
					</div>
					<div class="row">
						<div class="courses-carousel owl-carousel owl-btn-1 col-12 p-lr0">
							<?php foreach ($popular_courses as $ps) { ?>
								<div class="item">
									<div class="cours-bx">
										<div class="action-box">
											<img src="<?php echo base_url(); ?><?php echo $ps->image; ?>" alt="">
											<a href="#" class="btn">Read More</a>
										</div>
										<div class="info-bx text-center">
											<h5><a href="#"><?php echo $ps->title; ?></a></h5>
											<span>Programming</span>
										</div>
										<div class="cours-more-info">
											<div class="review">
												<span>3 Review</span>
												<ul class="cours-star">
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											</div>
											<div class="price">
												<del>₹<?php echo $ps->mrp; ?></del>
												<h5>₹<?php echo $ps->price; ?></h5>
											</div>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		<?php
		}
		?>
		<!-- Popular Courses END -->
		<div class="section-area section-sp2 bg-fix ovbl-dark join-bx text-center" style="background-image:url(<?php echo base_url(); ?>assets/frontweb/images/background/bg1.jpg);">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="join-content-bx text-white">
							<h2>Learn a new skill online on <br> your time</h2>
							<h4><span class="counter">57,000</span> Online Courses</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
							<a href="#" class="btn button-md">Join Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section-area section-sp1">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 m-b30">
						<h2 class="title-head ">Learn a new skill online<br> <span class="text-primary"> on your time</span></h2>
						<h4><span class="counter">57,000</span> Online Courses</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
						<a href="#" class="btn button-md">Join Now</a>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 m-b30">
								<div class="feature-container">
									<div class="feature-md text-white m-b20">
										<a href="#" class="icon-cell"><img src="<?php echo base_url(); ?>assets/frontweb/images/icon/icon1.png" alt=""></a>
									</div>
									<div class="icon-content">
										<h5 class="ttr-tilte">Our Philosophy</h5>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 m-b30">
								<div class="feature-container">
									<div class="feature-md text-white m-b20">
										<a href="#" class="icon-cell"><img src="<?php echo base_url(); ?>assets/frontweb/images/icon/icon2.png" alt=""></a>
									</div>
									<div class="icon-content">
										<h5 class="ttr-tilte">Kingster's Principle</h5>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 m-b30">
								<div class="feature-container">
									<div class="feature-md text-white m-b20">
										<a href="#" class="icon-cell"><img src="<?php echo base_url(); ?>assets/frontweb/images/icon/icon3.png" alt=""></a>
									</div>
									<div class="icon-content">
										<h5 class="ttr-tilte">Key Of Success</h5>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 m-b30">
								<div class="feature-container">
									<div class="feature-md text-white m-b20">
										<a href="#" class="icon-cell"><img src="<?php echo base_url(); ?>assets/frontweb/images/icon/icon4.png" alt=""></a>
									</div>
									<div class="icon-content">
										<h5 class="ttr-tilte">Our Philosophy</h5>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Testimonials -->
		<div class="section-area section-sp1 bg-fix ovbl-dark text-white" style="background-image:url(assets/images/background/bg1.jpg);">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-white heading-bx left">
						<h2 class="title-head text-uppercase">what people <span>say</span></h2>
						<p>It is a long established fact that a reader will be distracted by the readable
							content of a page</p>
					</div>
				</div>
				<div class="testimonial-carousel owl-carousel owl-btn-1 col-12 p-lr0">
					<div class="item">
						<div class="testimonial-bx">
							<div class="testimonial-thumb">
								<img src="<?php echo base_url(); ?>assets/frontweb/images/testimonials/pic1.jpg" alt="">
							</div>
							<div class="testimonial-info">
								<h5 class="name">Peter Packer</h5>
								<p>-Art Director</p>
							</div>
							<div class="testimonial-content">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
									Lorem Ipsum has been the industry's standard dummy text ever since the
									1500s, when an unknown printer took a galley of type...</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonial-bx">
							<div class="testimonial-thumb">
								<img src="<?php echo base_url(); ?>assets/frontweb/images/testimonials/pic2.jpg" alt="">
							</div>
							<div class="testimonial-info">
								<h5 class="name">Peter Packer</h5>
								<p>-Art Director</p>
							</div>
							<div class="testimonial-content">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
									Lorem Ipsum has been the industry's standard dummy text ever since the
									1500s, when an unknown printer took a galley of type...</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Testimonials END -->

		<!-- Recent News -->
		<div class="section-area section-sp2">
			<div class="container">
				<div class="row">
					<div class="col-md-12 heading-bx left">
						<h2 class="title-head">Recent <span>News</span></h2>
						<p>It is a long established fact that a reader will be distracted by the readable
							content of a page</p>
					</div>
				</div>
				<div class="recent-news-carousel owl-carousel owl-btn-1 col-12 p-lr0">
					<div class="item">
						<div class="recent-news">
							<div class="action-box">
								<img src="<?php echo base_url(); ?>assets/frontweb/images/blog/latest-blog/pic1.jpg" alt="">
							</div>
							<div class="info-bx">
								<ul class="media-post">
									<li><a href="#"><i class="fa fa-calendar"></i>Jan 02 2019</a></li>
									<li><a href="#"><i class="fa fa-user"></i>By William</a></li>
								</ul>
								<h5 class="post-title"><a href="blog-details.html">This Story Behind Education
										Will Haunt You Forever.</a></h5>
								<p>Knowing that, you’ve optimised your pages countless amount of times, written
									tons.</p>
								<div class="post-extra">
									<a href="#" class="btn-link">READ MORE</a>
									<a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>20
										Comment</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="recent-news">
							<div class="action-box">
								<img src="<?php echo base_url(); ?>assets/frontweb/images/blog/latest-blog/pic2.jpg" alt="">
							</div>
							<div class="info-bx">
								<ul class="media-post">
									<li><a href="#"><i class="fa fa-calendar"></i>Feb 05 2019</a></li>
									<li><a href="#"><i class="fa fa-user"></i>By John</a></li>
								</ul>
								<h5 class="post-title"><a href="blog-details.html">What Will Education Be Like
										In The Next 50 Years?</a></h5>
								<p>As desperate as you are right now, you have done everything you can on your.
								</p>
								<div class="post-extra">
									<a href="#" class="btn-link">READ MORE</a>
									<a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>14
										Comment</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="recent-news">
							<div class="action-box">
								<img src="<?php echo base_url(); ?>assets/frontweb/images/blog/latest-blog/pic3.jpg" alt="">
							</div>
							<div class="info-bx">
								<ul class="media-post">
									<li><a href="#"><i class="fa fa-calendar"></i>April 14 2019</a></li>
									<li><a href="#"><i class="fa fa-user"></i>By George</a></li>
								</ul>
								<h5 class="post-title"><a href="blog-details.html">Master The Skills Of
										Education And Be.</a></h5>
								<p>You will see in the guide all my years of valuable experience together with.
								</p>
								<div class="post-extra">
									<a href="#" class="btn-link">READ MORE</a>
									<a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>23
										Comment</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Recent News End -->

	</div>
	<!-- contact area END -->
</div>
<!-- Content END-->