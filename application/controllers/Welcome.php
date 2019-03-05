<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Tickets_model');		
		if(!$this->session->userdata('email'))
			redirect(base_url().'login');
	}

	public function index()
	{
		$data['title'] = 'Inicio';
		$data['menu'] = 'cartelera';
		$data['sub_title'] = 'Cartelera';
		$data['tickets'] = $this->Tickets_model->getTickets();
		$this->load->view('layout/header',$data);
		$this->load->view('main',$data);
		$this->load->view('layout/footer');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'login');
	}
}
