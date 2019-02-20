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
		$data['msg'] = $this->session->flashdata('msg');
		$data['style'] = $this->session->flashdata('style');
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
				$msg = array(
					'msg' => 'Wrong password',
					'style' => 'danger'
				);
				$this->session->set_flashdata($msg);
				redirect(base_url().'login');
			}
		} else {
			$msg = array(
				'msg' => 'Username invalid',
				'style' => 'danger'
			);
			$this->session->set_flashdata($msg);
			redirect(base_url().'login');
		}
	}

	public function forgot_password(){
		if($this->input->server('REQUEST_METHOD') == 'GET'){
			$this->load->view('login/forgot_password'); 
		} else {
		date_default_timezone_set('America/Lima');
		$now = new DateTime("now");
		$ahora = $now->format('Y-m-d H:i:s');
		$tokenData = array(
			'id_user' => 1,
			'timestamp' => $ahora);
		$output['token'] = AUTHORIZATION::generateToken($tokenData);
		$this->load->library('email');
		$config = array(
			'protocol'  => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'projasb25@gmail.com',
			'smtp_pass' => 'Gmail.2017pr2503..',
			'mailtype'  => 'html',
			'charset'   => 'utf-8');
		$this->email->initialize($config);
		$this->email->set_mailtype("html");
		$this->email->set_newline("\r\n");
		
		$htmlContent = '<h1>Forgot password</h1>';
		$htmlContent .= '<p>Please click here to change your password <a href="'.base_url().'login/confirm_forgot_password/'.$output['token'].'">here</a></p>';
		
		$this->email->to('projas@bitinka.com');
		$this->email->from('sender@example.com','Ticket App');
		$this->email->subject('Password Reset Request');
		$this->email->message($htmlContent);
		
		$this->email->send();
		redirect(base_url().'login');
		}
	}

	public function confirm_forgot_password($token){
		$decodedToken = AUTHORIZATION::validateTimestamp($token);
		if($decodedToken){
			var_dump($decodedToken); }
		else { echo 'token expirado'; }
	}
	
}