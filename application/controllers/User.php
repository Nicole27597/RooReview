<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form','url');
		$this->load->model('User_model');
		$this->load->library('session', 'form_validation');
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('registration');
		$this->load->view('template/footer');
	}

	public function signup() {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$count = $this->User_model->check_user($name, $email);

		if ($this->form_validation->set_rules(
			'password', 'Password',
			'trim|required|min_length[5]|max_length[25]',
			array(
				'required' => 'You have not provided %s'
			)
		)) {
			echo "Password needs to be between 5 and 25 characters";
		}

		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('template/header');
			$this->load->view('registration');
			$this->load->view('template/footer');
			return;
		}
		
		if ($count > 0) {
			echo "User Already Exists";
		} else {
			$data = array(
				'name' =>$_POST['name'],
				'email' =>$_POST['email'],
				'password' =>$_POST['password']
			);
			if ($this->User_model->insert_user($data)) {
				redirect('success');

			} else {
				redirect('home');
			}
		}

	}
}
?>
