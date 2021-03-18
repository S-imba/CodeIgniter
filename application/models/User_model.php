<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{

	public function __construct(){
        $this->load->database();
    }

    function createData(){
        $data = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'account' => $this->input->post('account'),
            'address' => $this->input->post('address'),
            'mobile' => $this->input->post('mobile'),
            'password' => $this->input->post('password'),

        );
        $this->db->insert('user', $data);
    }

    function getAllData(){
        $query = $this->db->query('SELECT * FROM user');
        return $query->result();
    }
    

    function can_login($username, $password){
        $this->db->select("*");
        $this->db->from('user');
        $this->db->where('username', $username);
        $query = $this->db->get();
        //$query = $this->db->get('user'); //
        foreach ($query->result() as $row){
            
            if ($row->password == $password){
                
                return true;
            } else {
                
                return false;
                
            }
        }
    }

    function createDataOpportunity(){
        $data = array(
            'oppo_name' => $this->input->post('oppo_name'),
            'salary' => $this->input->post('salary'),
            'account' => $this->input->post('account'),
            
            
        );
        $this->db->insert('opportunity', $data);
    }

    function getAllDataOpportunity(){
        $query = $this->db->query('SELECT * FROM opportunity');
        
        return $query->result();
    }
}
