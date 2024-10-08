<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper("form");
    }

	public function index()
	{
		$this->load->view('login');
	}

    public function login(){
        $email = $this->input->post("email");
        $pwd = $this->input->post("pass");

        
    }


}
