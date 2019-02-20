<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tickets_model extends CI_Model{

    function __contruct(){
        parent::construct();
    }

    function getTickets(){
        $query = $this->db->query('SELECT tk.*,sts.status_name from tickets tk
                                JOIN status sts on tk.status = sts.id_status
                                ORDER BY status DESC');
        if($query->num_rows()>0)
            return $query->result();
        else 
            return false;
    }

}

?>