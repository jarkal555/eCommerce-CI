<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'third_party/vendor/autoload.php';

use Mailgun\Mailgun;


class Auth_model extends CI_Model
{

    public function setSession($user)
    {
        $userData = array(
            'email' => $user['email']
        );
        // Insert User Data
        $this->db->where($userData);
        $query = $this->db->get('users', 1);
        if ($query->num_rows() > 0) {
            $_userInfo = $query->result();
            $sessionData = array(
                'username'  => $_userInfo[0]->username,
                'email'  => $_userInfo[0]->email,
                'login_token'  => $_userInfo[0]->login_token,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($sessionData);
            return TRUE;
        }
        return FALSE;
    }

    public function check_user_exits($user)
    {
        $email = $user['email'];
        // Insert User Data
        $this->db->where('email', $email);
        $query = $this->db->get('users');
        if ($query->num_rows() > 0) {
            return TRUE;
        }
        return FALSE;
    }

    public function forgetpassword($userData)
    {
        $email = $userData['email'];
    }

    public function get_user_hash($email)
    {
        // Insert User Data
        $this->db->where('email', $email);
        $query = $this->db->get('users', 1);
        if ($query->num_rows() > 0) {
            $userData = $query->result();
            return $userData[0]->password;
        }
        return FALSE;
    }

    public function login($user)
    {
        $userData = array(
            'email' => $user['email'],
            'active' => 1
        );
        // Insert User Data
        $this->db->where($userData);
        $query = $this->db->get('users');
        if ($query->num_rows() > 0) {
            // Send Activation Mail
            $_storedHash = $this->get_user_hash($user['email']);
            $_checkPassword = $this->bcrypt->check_password($user['password'], $_storedHash);
            return $_checkPassword;
        }
        return FALSE;
    }

    public function register($user)
    {
        $verificationCode = md5(uniqid());
        $user = array(
            'oauth_provider' => '',
            'facebook_id' => '',
            'google_id' => '',
            'login_token' => md5(uniqid()),
            'verification_code' => $verificationCode,
            'salt' => uniqid(),
            'username' => $user['name'],
            'password' => $this->bcrypt->hash_password($user['password']),
            'gender' => '',
            'email' => $user['email'],
            'phone' => $user['mobile'],
            'address' => '',
            'pincode' => '',
            'state' => '',
            'active' => 0,
            'created_at' => date('Y-m-d H:i:s')
        );
        // Insert User Data
        $this->db->insert('users', $user);
        if ($this->db->affected_rows() == '1') {
            // Send Activation Mail
            $this->activationMail($user['email'], $verificationCode);
            return TRUE;
        }
        return FALSE;
    }

    public function activationMail($to_email, $code)
    {
        # Instantiate the client.
        $mgClient = new Mailgun('76268ecb35400b1013981622096d59bf-2b778fc3-f6e69677');
        $domain = "sandbox91636290ea694c4bad9ce8b0f8a47dad.mailgun.org";

        # Make the call to the client.
        $result = $mgClient->sendMessage(
            $domain,
            array(
                'from'    => 'Codewife <codewife@mailgun.org>',
                'to'      => $to_email,
                // 'cc'      => 'baz@example.com',
                // 'bcc'     => 'bar@example.com',
                'subject' => 'Activation Mail',
                'text'    => 'Testing some Mailgun awesomness!',
                'html'    => '<a href="' . base_url() . 'account-activation/' . $code . '">Activate Your Account!</html>'
            )
            // array(
            //     'attachment' => array('/path/to/file.txt', '/path/to/file.txt')
            // )
        );
    }

    public function account_activation($code)
    {
        $data = array(
            'active' => 1,
            'verification_code' => 0
        );
        $this->db->where('verification_code', $code);
        $this->db->update('users', $data);
        if ($this->db->affected_rows() == '1') {
            return TRUE;
        }
        return FALSE;
    }
}
