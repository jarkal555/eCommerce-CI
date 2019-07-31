<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('course_model');
    }
    public function index()
    {
        // Metatags
        $data['meta_tags'] = array(
            '<meta charset="utf-8">',
            '<meta http-equiv="X-UA-Compatible" content="IE=edge">',
            '<meta name="keywords" content="Web Design, Education, Institute, Study" />',
            '<meta name="author" content="ThemeTrades" />',
            '<meta name="description" content="Codewife is a Fully Creative Mobile Responsive HTML Template. It is designed specifically for University, College, School, Training centre or other educational institute." />',
            '<meta property="og:url" content="index-2.html" />',
            '<meta property="og:site_name" content="Codewife : Education HTML Template" />',
            '<meta property="og:type" content="website" />',
            '<meta property="og:locale" content="en_us" />',
            '<meta property="og:title" content="Codewife : Education HTML Template" />',
            '<meta property="og:description" content="Codewife is a Fully Creative Mobile Responsive HTML Template. It is designed specifically for University, College, School, Training center or other educational institute." />',
            '<meta property="og:image" content="preview.png" />',
            '<meta name="twitter:card" content="summary">',
            '<meta name="twitter:url" content="index-2.html">',
            '<meta name="twitter:creator" content="@themetrades">',
            '<meta name="twitter:title" content="Codewife : Education HTML Template">',
            '<meta name="twitter:description" content="Codewife is a Fully Creative Mobile Responsive HTML Template. It is designed specifically for University, College, School, Training centre or other educational institute.">',
            '<meta name="format-detection" content="telephone=no">'
        );

        // Stylesheets
        $data['styles'] = array(
            // All PLUGINS CSS
            base_url() . 'assets/frontweb/css/assets.css',
            // TYPOGRAPHY
            base_url() . 'assets/frontweb/css/typography.css',
            // SHORTCODES
            base_url() . 'assets/frontweb/css/shortcodes/shortcodes.css',
            // STYLESHEETS
            base_url() . 'assets/frontweb/css/style.css',
            base_url() . 'assets/frontweb/css/color/color-1.css',
            base_url() . 'assets/frontweb/vendors/revolution/css/layers.css',
            base_url() . 'assets/frontweb/vendors/revolution/css/settings.css',
            base_url() . 'assets/frontweb/vendors/revolution/css/navigation.css'

        );

        // Javascript
        $data['scripts'] = array(
            // External JavaScripts
            base_url() . 'assets/frontweb/js/jquery.min.js',
            base_url() . 'assets/frontweb/vendors/bootstrap/js/popper.min.js',
            base_url() . 'assets/frontweb/vendors/bootstrap/js/bootstrap.min.js',
            base_url() . 'assets/frontweb/vendors/bootstrap-select/bootstrap-select.min.js',
            base_url() . 'assets/frontweb/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js',
            base_url() . 'assets/frontweb/vendors/magnific-popup/magnific-popup.js',
            base_url() . 'assets/frontweb/vendors/counter/waypoints-min.js',
            base_url() . 'assets/frontweb/vendors/counter/counterup.min.js',
            base_url() . 'assets/frontweb/vendors/imagesloaded/imagesloaded.js',
            base_url() . 'assets/frontweb/vendors/masonry/masonry.js',
            base_url() . 'assets/frontweb/vendors/masonry/filter.js',
            base_url() . 'assets/frontweb/vendors/owl-carousel/owl.carousel.js',
            base_url() . 'assets/frontweb/js/functions.js',
            base_url() . 'assets/frontweb/js/contact.js',
            // Revolution JavaScripts Files 
            base_url() . 'assets/frontweb/vendors/revolution/js/jquery.themepunch.tools.min.js',
            base_url() . 'assets/frontweb/vendors/revolution/js/jquery.themepunch.revolution.min.js',
            // Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems
            base_url() . 'assets/frontweb/vendors/revolution/js/extensions/revolution.extension.actions.min.js',
            base_url() . 'assets/frontweb/vendors/revolution/js/extensions/revolution.extension.carousel.min.js',
            base_url() . 'assets/frontweb/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js',
            base_url() . 'assets/frontweb/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js',
            base_url() . 'assets/frontweb/vendors/revolution/js/extensions/revolution.extension.migration.min.js',
            base_url() . 'assets/frontweb/vendors/revolution/js/extensions/revolution.extension.navigation.min.js',
            base_url() . 'assets/frontweb/vendors/revolution/js/extensions/revolution.extension.parallax.min.js',
            base_url() . 'assets/frontweb/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js',
            base_url() . 'assets/frontweb/vendors/revolution/js/extensions/revolution.extension.video.min.js'

        );

        // Title & Menu
        $data['title'] = 'Codewife : Educational Portal';
        $data['menu'] = 'home';

        // Get Popular Courses
        $data['popular_courses'] = $this->course_model->get_popular_courses(4);

        $this->load->view('includes/header', $data);
        $this->load->view('front/home_view', $data);
        $this->load->view('includes/footer', $data);
    }
}
