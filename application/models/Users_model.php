<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model{

    function __contruct(){
        parent::construct();
    }

    function getUser($email){
        $this->db->where('email',$email);
        $query = $this->db->get('users');
        if($query->num_rows()>0)
            return $query->result()[0];
        else 
            return false;
    }

}

?>