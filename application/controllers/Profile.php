<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class profile extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        
    
    }

    function index() {
        $this->load->view('template/header');
        $this->load->view('profile');
        $this->load->view('template/footer');
    }

    function update() {
   
        

    }
}

?>