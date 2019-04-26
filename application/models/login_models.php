<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_models extends CI_model {

    function __construct() {
        parent::__construct();
    }

    public function register($data){
        $this->load->database();
        $insert = $this->db->insert('akun', $data);
        if ($insert) {
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function login($email,$password){
        $this->load->database();
        $this->db->where('email', $email);
        $login = $this->db->where('password', $password);
        if ($login) {
            return TRUE;
        }else {
            return FALSE;
        }
    }

}