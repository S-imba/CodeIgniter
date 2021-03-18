<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OpportunityController extends CI_Controller {

	public function __construct(){
        parent:: __construct();
        $this->load->model('Opportunity_model');
    }

	public function index(){
        //$data['result'] = $this->Opportunity_model->getAllData();
		$this->load->view('opportunityView');
	}
}