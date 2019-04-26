<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("login_models");
    }

    public function index() {
        $this->load->model('login_models');
    }

    public function login_user() {
        $email = $this->input->post('username');
        $password = $this->input->post('password');

        $login = $this->login_models->login($email,$password);
        if ($login) {
            $this->load->view('index');
        }else{
            $this->load->view('login');
        }
    }

    public function register(){
        $table = "esgotadoclone";
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        $username=$this->input->post('username');
        $data=array(
            'email'=>$email, 
            'password'=>$password,
            'username'=>$username
        );
        $insert = $this->login_models->register($data);
        if($insert){
            $this->load->view('index');
        }else {
            $this->load->view('register');
        }
    }

}