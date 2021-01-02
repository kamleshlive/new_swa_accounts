<?php

class Admin_model extends CI_Model {

      function __construct()
    {
     parent::__construct();
     $this->load->database();
    }


    public function checkLogin($userData) {
        //query the table 'users' and get the result count
        $this->db->where('email', $userData['email']);
        $this->db->where('password', $userData['password']);
        $query = $this->db->get('admissions');
        return $query->num_rows();
    }
}