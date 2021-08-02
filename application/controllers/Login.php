<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('User_model');
	}

	public function index() {
		$data['error']= "";
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->view('template/header');
		if (!$this->session->userdata('logged_in')) {
			if (get_cookie('remember')) {
				$email = get_cookie('email');
				$password = get_cookie('password');
				if ($this->User_model->login($email, $password)) {
					$user_data = array(
						'email' => $email,
						'logged_in' => true
					);
					$this->session->set_userdata($user_data);
					$this->load->view('home');

				}
			}
			$this->load->view('login', $data); //if user has not login ask user to login
		}else {
			$this->load->view('home'); //if user already logined show main page
		}
		$this->load->view('template/footer');
	}
	public function check_login() {
		$this->load->model('User_model');		//load user model
		$data['error']= "<div class=\"alert alert-danger\" role=\"alert\"> Incorrect email or password!! </div> ";
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->view('template/header');
		$email = $this->input->post('email'); //getting email from login form
		$password = $this->input->post('password'); //getting password from login form
		$remember = $this->input->post('remember');
		if(!$this->session->userdata('logged_in')) {	//Check if user already login
			if ($name = $this->User_model->login($email, $password)) {//check email and password
				$user_data = array(
					'name' => $name,
					'email' => $email,
					'logged_in' => true 	//create session variable
				);
				if ($remember) {
					echo $remember.'cookie';
					set_cookie("email", $email, '300');
					set_cookie("password", $password, '300');
					set_cookie("remember", $remember, '300');
				}
				$this->session->set_userdata($user_data); //set user status to login in session
				redirect('login'); // direct user home page
			} else {
				$this->load->view('login', $data);	//if email or password incorrect, show error msg and ask user to login
			}
		} else {
			{
				redirect('login'); //if user already logined direct user to home page
			}
		$this->load->view('template/footer');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in'); //delete login status
		$this->session->unset_userdata('name');
		redirect('home'); // redirect user back to login
	}
}
?>
