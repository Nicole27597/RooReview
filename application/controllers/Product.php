<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product extends CI_Controller {

    function __construct() {
		parent::__construct();
		
	}

    function index() {
        $this->load->view('template/header');
        $this->load->view('product_review');
        $this->load->view('template/footer');
    }

   function detail($id) {
        $this->load->model('Product_model');
        $product = $this->Product_model->detail($id);
        $data = array(
            'product' => $product,
        );
        $this->load->view('template/header');
        $this->load->view('product_review', $data);
        $this->load->view('template/footer');
   }

   function review($rid) {
       $this->load->model('Product_model');
       $review = $this->Product_model->review($rid);
       $data = array(
           'review' => $review,
       );
       $this->load->view('template/header');
       $this->load->view('product_review', $data);
       $this->load->view('template/footer');

   }
}

?>