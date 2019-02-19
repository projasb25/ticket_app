<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->library('table');
		if(!$this->session->userdata('email'))
			redirect(base_url().'login');
	}

	public function index()
	{
		$title['title'] = 'Inicio';
		$data['users'] = $this->db->query('SELECT * FROM users')->result();
		$this->load->view('layout/header',$title);
		$this->load->view('main',$data);
		$this->load->view('layout/footer');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'login');
	}
}
