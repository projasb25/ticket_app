<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tickets_model extends CI_Model{

    function __contruct(){
        parent::construct();
    }

    function getTickets(){
        $query = $this->db->query('SELECT * from tickets ORDER BY status DESC');
        if($query->num_rows()>0)
            return $query->result();
        else 
            return false;
    }

}

?>