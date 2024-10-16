<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper("form");
        $this->load->model('Dao_model', 'dao');
    }

	public function index()
	{
		$this->load->view('login');
	}

    public function login() {
        $email = $this->input->post("email");
        $pwd = $this->input->post("pass");

        $conditions = [
            "email_user" => $email, 
            "password_user" => $pwd 
        ];

        $response = $this->dao->select_where('v_users', $conditions);

        if($response){
            $this->session->set_userdata('info_user', $response[0]);
            redirect('home_controller');
        }else{
            $data['error'] = 'Mot de passe ou email incorrect';
            $this->load->view('login', $data);
        }
    }

    public function disconnect(){
        $this->session->unset_userdata('info_user');
        $this->session->sess_destroy();
        redirect("login_controller");
    }


}
