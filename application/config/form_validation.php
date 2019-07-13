<?php
defined('BASEPATH') or exit('No direct script access allowed');

$config = array(
    'register' => array(
        array(
            'field' => 'name',
            'label' => 'Name',
            'rules' => 'trim|required|min_length[4]|xss_clean'
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email|is_unique[users.email]|xss_clean',
            'errors' => array('valid_email' => 'Please make sure your email is correct.')
        ),
        array(
            'field' => 'mobile',
            'label' => 'Mobile',
            'rules' => 'trim|required|min_length[10]|max_length[10]|is_unique[users.phone]|xss_clean',
            'errors' => array('min_lenght' => 'Please make sure your mobile is correct.')
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'trim|required|min_length[4]|xss_clean'
        ),
        array(
            'field' => 'passconf',
            'label' => 'Password Confirmation',
            'rules' => 'trim|required|min_length[4]|matches[password]|xss_clean'
        )
    ),
    'login' => array(
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email|xss_clean',
            'errors' => array('valid_email' => 'Please make sure your email is correct.')
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'trim|required|min_length[4]|xss_clean'
        )
    ),
    'reset' => array(
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email|xss_clean',
            'errors' => array('valid_email' => 'Please make sure your email is correct.')
        )
    )
);
