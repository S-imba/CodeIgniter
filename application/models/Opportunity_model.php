<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Opportunity_model extends CI_Model{

	public function __construct(){
        $this->load->database();
    }

    function createData(){
        $data = array(
            'username' => $this->input->post('oppo_name'),
            'salary' => $this->input->post('salary'),
            'account' => $this->input->post('account'),
            'opportunityDate' => $this->input->post('opportunityDate'),
            
        );
        $this->db->insert('opportunity', $data);
    }

    function getAllData(){
        $query = $this->db->query('SELECT * FROM opportunity');
        return $query->result();
    }
}