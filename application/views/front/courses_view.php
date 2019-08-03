	<!-- Content -->
	<div class="page-content bg-white">
		<!-- inner page banner -->
		<div class="page-banner ovbl-dark" style="background-image:url(<?php echo base_url(); ?>assets/frontweb/images/banner/banner3.jpg);">
			<div class="container">
				<div class="page-banner-entry">
					<h1 class="text-white">Our Courses</h1>
				</div>
			</div>
		</div>
		<!-- Breadcrumb row -->
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="#">Home</a></li>
					<li>Our Courses</li>
				</ul>
			</div>
		</div>
		<!-- Breadcrumb row END -->
		<!-- inner page banner END -->
		<div class="content-block">
			<!-- About Us -->
			<div class="section-area section-sp1">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-4 col-sm-12 m-b30">
							<div class="widget courses-search-bx placeani">
								<div class="form-group">
									<div class="input-group">
										<label>Search Courses</label>
										<input name="name" type="text" required class="form-control">
									</div>
								</div>
							</div>
							<div class="widget widget_archive">
								<h5 class="widget-title style-1">All Courses</h5>
								<?php if (!empty($categories)) { ?>
									<ul>
										<?php foreach ($categories as $category) { ?>
											<li class=""><a href="<?php echo base_url(); ?>courses/<?php echo strtolower($category->seo_url); ?>"><?php echo $category->name; ?></a></li>
										<?php } ?>
									</ul>
								<?php } ?>

							</div>
							<div class="widget">
								<a href="#"><img src="<?php echo base_url(); ?>assets/frontweb/images/adv/adv.jpg" alt="" /></a>
							</div>
							<div class="widget recent-posts-entry widget-courses">
								<h5 class="widget-title style-1">Recent Courses</h5>
								<div class="widget-post-bx">
									<div class="widget-post clearfix">
										<div class="ttr-post-media"> <img src="<?php echo base_url(); ?>assets/frontweb/images/blog/recent-blog/pic1.jpg" width="200" height="143" alt=""> </div>
										<div class="ttr-post-info">
											<div class="ttr-post-header">
												<h6 class="post-title"><a href="#">Introduction Codewife</a></h6>
											</div>
											<div class="ttr-post-meta">
												<ul>
													<li class="price">
														<del>$190</del>
														<h5>$120</h5>
													</li>
													<li class="review">03 Review</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="widget-post clearfix">
										<div class="ttr-post-media"> <img src="<?php echo base_url(); ?>assets/frontweb/images/blog/recent-blog/pic3.jpg" width="200" height="160" alt=""> </div>
										<div class="ttr-post-info">
											<div class="ttr-post-header">
												<h6 class="post-title"><a href="#">English For Tommorow</a></h6>
											</div>
											<div class="ttr-post-meta">
												<ul>
													<li class="price">
														<h5 class="free">Free</h5>
													</li>
													<li class="review">07 Review</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- courses box -->
						<?php if (!empty($all_courses)) { ?>
							<div class="col-lg-9 col-md-8 col-sm-12">
								<div class="row">
									<?php foreach ($all_courses as $all_course) { ?>
										<div class="col-md-6 col-lg-4 col-sm-6 m-b30">
											<div class="cours-bx">
												<div class="action-box">
													<img src="<?php echo base_url(); ?><?php echo $all_course->image; ?>" alt="">
													<a href="#" class="btn">Read More</a>
												</div>
												<div class="info-bx text-center">
													<h5><a href="<?php echo base_url(); ?>courses/<?php echo $all_course->seourl; ?>"><?php echo $all_course->title; ?></a></h5>
													<span><?php echo $all_course->category; ?></span>
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
														<del><i class="fa fa-inr"></i><?php echo $all_course->mrp; ?></del>
														<h5><i class="fa fa-inr"></i><?php echo $all_course->price; ?></h5>
													</div>
												</div>
											</div>
										</div>
									<?php } ?>
									<div class="col-lg-12 m-b20">
										<div class="pagination-bx rounded-sm gray clearfix">
											<ul class="pagination">
												<li class="previous"><a href="#"><i class="ti-arrow-left"></i> Prev</a></li>
												<li class="active"><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
												<li class="next"><a href="#">Next <i class="ti-arrow-right"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>

						<!-- End courses box -->
					</div>
				</div>
			</div>
		</div>
		<!-- contact area END -->

	</div>
	<!-- Content END-->