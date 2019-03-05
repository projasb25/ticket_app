<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tickets extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		if(!$this->session->userdata('email'))
			redirect(base_url().'login');
	}
	
	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$data['title'] = 'Login';
		$data['msg'] = $this->session->flashdata('msg');
		$data['style'] = $this->session->flashdata('style');
		$this->load->view('login/login',$data);
    }

  public function new()
	{
		$data['title'] = 'Login';
		$data['sub_title'] = 'Crear nuevo ticket';
		$data['msg'] = $this->session->flashdata('msg');
		$data['menu'] = 'tickets';
		$data['style'] = $this->session->flashdata('style');
		$this->load->view('layout/header',$data);
		$this->load->view('tickets/new_ticket',$data);
		$this->load->view('layout/footer');
	}
}