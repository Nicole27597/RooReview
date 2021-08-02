<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class search extends CI_Controller {

    function index() {
     $this->load->view('home');
    }
   
    function fetch() {
     $output = '';
     $query = '';
     $this->load->model('search_model');
     if($this->input->post('query')) {
      $query = $this->input->post('query');
     }
     $data = $this->search_model->fetch_data($query);
     $output .= '';
     $url = base_url();
     if($data->num_rows() > 0) {
      foreach($data->result() as $row) {
       $output .= '
       <div class="container">
        <div class="row">
        <div class="col">
            <a href="product/detail/'.$row->product_id.'"><img src="'.$url.$row->img.'" class="img-thumbnail" width="500" height="600"></a>
        </div>
        <div class="col"><h3><a href="product/detail/'.$row->product_id.'">'.$row->product_name.'</a></h3>
            <br><br>
            <p>'.$row->description.'</p>
        </div>
        </div>
        <br>
        </div>';
        }
    } else {
      $output .= '<p colspan="5">No Products Found</p>';
     }
     $output .= '</div>';
     echo $output;
    }
}
?>
<!-- Webslesson. "Live Data Search in Codeigniter using Ajax JQuery." webslesson.info. 
https://www.webslesson.info/2018/03/live-data-search-in-codeigniter-using-ajax-jquery.html (accessed May 15, 2021). -->

<style>
    p {
        font-size: 18px;
    }


</style>
