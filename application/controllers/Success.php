<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class success extends CI_Controller {

    public function index(){
        $this->load->view('template/header');
        $this->load->view('success');
        $this->load->view('template/footer');
    }
}
?>