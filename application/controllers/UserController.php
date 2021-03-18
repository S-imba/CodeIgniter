<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	public function __construct(){
        parent:: __construct();
        $this->load->model('User_model');
    }

	public function index()
	{
        $data['result'] = $this->User_model->getAllData();
		$this->load->view('userView', $data);
	}

    public function create(){
        $this->User_model->createData();
        redirect("UserController");
    }

    public function login_view(){
        $this->load->view('login');
    }

    function login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->load->model('User_model');

        if($this->User_model->can_login($username, $password)){
            $this->index();
        } else {
            $this->load->view('login');
        }
    }

    public function createOpportunity(){
        $this->User_model->createDataOpportunity();
        redirect("UserController/opportunity");
    }

    
    public function opportunity(){
        $data = $this->User_model->getAllDataOpportunity();
        $oppo_data = array("opportunities" => $data);
		$this->load->view('opportunityView', $oppo_data);
	}
}
