<!-- Navigation Menu ==== -->
<div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
    <div class="menu-logo">
        <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/frontweb/images/logo.png" alt=""></a>
    </div>
    <ul class="nav navbar-nav">
        <li class="<?php echo $menu == 'home' ? 'active' : ''; ?>"><a href="<?php echo base_url(); ?>">Home</a></li>
        <li class="<?php echo $menu == 'courses' ? 'active' : ''; ?>"><a href="<?php echo base_url(); ?>courses">Courses</a></li>

        <li><a href="javascript:;">Pages <i class="fa fa-chevron-down"></i></a>
            <ul class="sub-menu">
                <li><a href="javascript:;">About<i class="fa fa-angle-right"></i></a>
                    <ul class="sub-menu">
                        <li><a href="about-1.html">About 1</a></li>
                        <li><a href="about-2.html">About 2</a></li>
                    </ul>
                </li>
                <li><a href="javascript:;">Event<i class="fa fa-angle-right"></i></a>
                    <ul class="sub-menu">
                        <li><a href="event.html">Event</a></li>
                        <li><a href="events-details.html">Events Details</a></li>
                    </ul>
                </li>
                <li><a href="javascript:;">FAQ's<i class="fa fa-angle-right"></i></a>
                    <ul class="sub-menu">
                        <li><a href="faq-1.html">FAQ's 1</a></li>
                        <li><a href="faq-2.html">FAQ's 2</a></li>
                    </ul>
                </li>
                <li><a href="javascript:;">Contact Us<i class="fa fa-angle-right"></i></a>
                    <ul class="sub-menu">
                        <li><a href="contact-1.html">Contact Us 1</a></li>
                        <li><a href="contact-2.html">Contact Us 2</a></li>
                    </ul>
                </li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="profile.html">Profile</a></li>
                <li><a href="membership.html">Membership</a></li>
                <li><a href="error-404.html">404 Page</a></li>
            </ul>
        </li>
        <li class="add-mega-menu"><a href="javascript:;">Our Courses <i class="fa fa-chevron-down"></i></a>
            <ul class="sub-menu add-menu">
                <li class="add-menu-left">
                    <h5 class="menu-adv-title">Our Courses</h5>
                    <ul>
                        <li><a href="courses.html">Courses </a></li>
                        <li><a href="courses-details.html">Courses Details</a></li>
                        <li><a href="profile.html">Instructor Profile</a></li>
                        <li><a href="event.html">Upcoming Event</a></li>
                        <li><a href="membership.html">Membership</a></li>
                    </ul>
                </li>
                <li class="add-menu-right">
                    <img src="<?php echo base_url(); ?>assets/frontweb/images/adv/adv.jpg" alt="" />
                </li>
            </ul>
        </li>
        <li><a href="javascript:;">Blog <i class="fa fa-chevron-down"></i></a>
            <ul class="sub-menu">
                <li><a href="blog-classic-grid.html">Blog Classic</a></li>
                <li><a href="blog-classic-sidebar.html">Blog Classic Sidebar</a></li>
                <li><a href="blog-list-sidebar.html">Blog List Sidebar</a></li>
                <li><a href="blog-standard-sidebar.html">Blog Standard Sidebar</a></li>
                <li><a href="blog-details.html">Blog Details</a></li>
            </ul>
        </li>
        <li class="nav-dashboard"><a href="javascript:;">Dashboard <i class="fa fa-chevron-down"></i></a>
            <ul class="sub-menu">
                <li><a href="admin/index.html">Dashboard</a></li>
                <li><a href="admin/add-listing.html">Add Listing</a></li>
                <li><a href="admin/bookmark.html">Bookmark</a></li>
                <li><a href="admin/courses.html">Courses</a></li>
                <li><a href="admin/review.html">Review</a></li>
                <li><a href="admin/teacher-profile.html">Teacher Profile</a></li>
                <li><a href="admin/user-profile.html">User Profile</a></li>
                <li><a href="javascript:;">Calendar<i class="fa fa-angle-right"></i></a>
                    <ul class="sub-menu">
                        <li><a href="admin/basic-calendar.html">Basic Calendar</a></li>
                        <li><a href="admin/list-view-calendar.html">List View Calendar</a></li>
                    </ul>
                </li>
                <li><a href="javascript:;">Mailbox<i class="fa fa-angle-right"></i></a>
                    <ul class="sub-menu">
                        <li><a href="admin/mailbox.html">Mailbox</a></li>
                        <li><a href="admin/mailbox-compose.html">Compose</a></li>
                        <li><a href="admin/mailbox-read.html">Mail Read</a></li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
    <div class="nav-social-link">
        <a href="javascript:;"><i class="fa fa-facebook"></i></a>
        <a href="javascript:;"><i class="fa fa-google-plus"></i></a>
        <a href="javascript:;"><i class="fa fa-linkedin"></i></a>
    </div>
</div>
<!-- Navigation Menu END ==== -->