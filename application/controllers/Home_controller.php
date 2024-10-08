<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

class Home_controller extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $data['info_user'] = $this->session->userdata('info_user');
        $this->load->view('home', $data);
    }


}