<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
    }
    
    public function shop()
	{
		$this->load->view('shop');
    }
    
    public function blog(){
        $this->load->view('blog');
    }

    public function contact(){
        $this->load->view('contact');
    }
}
