<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('bcrypt');
		$this->load->model('users_model');
		$this->load->library('session');
		if($this->session->userdata('email'))
			redirect(base_url());
	}
	
	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$data['title'] = 'Login';
		$data['error_msg'] = $this->session->flashdata('error_msg');
		$this->load->view('login/login',$data);
	}

	public function verification(){
		if($this->input->server('REQUEST_METHOD') == 'GET')
			redirect(base_url()); 
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$user = $this->users_model->getUser($email);
		if ($user){
			$verify_password = $this->bcrypt->check_password($password, $user->password);
			if($verify_password){
				$new_user = array(
					"id_user" => $user->id_user,
					"email" => $user->email,
					"permissions" => $user->permissions
				);
				$this->session->set_userdata($new_user);
				redirect(base_url());
			} else {
				$this->session->set_flashdata('error_msg', 'Contraseña incorrecta');
				redirect(base_url().'login');
			}
		} else {
			$this->session->set_flashdata('error_msg', 'Usuario no existe');
			redirect(base_url().'login');
		}
	}

	
}