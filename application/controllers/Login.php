<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
    }
    public function index()
    {
        if ($this->session->userdata('logged_in')) {
            redirect('home');
        }
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

        $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
        // Title & Menu
        $data['title'] = 'Codewife : Login';
        $data['menu'] = 'login';

        if ($this->form_validation->run('login') == FALSE) {
            $this->load->view('front/login_view', $data);
        } else {
            $userData = array(
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            );

            // check user exits or not
            $_isExits = $this->auth_model->check_user_exits($userData);
            if ($_isExits) {
                // active or invalid password
                $_checkPassword = $this->auth_model->login($userData);
                if ($_checkPassword) {
                    // set session data
                    $this->auth_model->setSession($userData);
                    redirect('home');
                }
                $this->session->set_flashdata('alert', '<div class="alert alert-danger">Invalid password or user not varified! Please reset you account.</div>');
                redirect('login');
            }
            $this->session->set_flashdata('alert', '<div class="alert alert-danger">User email not found! Please register.</div>');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('home');
    }

    public function activation($code)
    {
        $res = $this->auth_model->account_activation($code);
        if ($res) {
            $this->session->set_flashdata('alert', '<div class="alert alert-success">Your Account Successfully Activated!.</div>');
        } else {
            $this->session->set_flashdata('alert', '<div class="alert alert-danger">Something went wrong! Please try again.</div>');
        }
        redirect('login');
    }

    public function reset()
    {
        print_r($this->input->post('email'));
        exit;
    }
}
