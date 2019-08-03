<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Courses extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('course_model');
    }

    public function index($category = NULL)
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
            base_url() . 'assets/frontweb/css/color/color-1.css'

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
            base_url() . 'assets/frontweb/js/contact.js'
        );

        // Title & Menu
        $data['title'] = 'Codewife : All Courses';
        $data['menu'] = 'courses';

        // Get all categories
        $data['categories'] = $this->course_model->get_categories();

        // Get all Courses
        $data['all_courses'] = $this->course_model->get_all_courses();
        if (!empty($category)) {
            $data['all_courses'] = $this->course_model->get_all_courses_category_wise($category);
        }


        $this->load->view('includes/header', $data);
        $this->load->view('front/courses_view', $data);
        $this->load->view('includes/footer', $data);
    }
}
