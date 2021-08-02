<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Product_model extends CI_Model {

    function detail($id) {
        $this->db->select('*');
        $this->db->where('product_id', $id);
        return $this->db->get("products")->row();
    }

    function review($rid) {
        $this->db->select('*');
        $this->db->where('review_id', $rid);
        return $this->db->get("reviews")->row();
    }
    
}

?>