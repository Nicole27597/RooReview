<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Search_model extends CI_Model {

    function fetch_data($query)
    {
     $this->db->select("*");
     $this->db->from("products");
     if($query != '') {
      $this->db->like('product_name', $query);
      $this->db->or_like('img', $query);
      $this->db->or_like('description', $query);
     }
     return $this->db->get();
    }
}
?>