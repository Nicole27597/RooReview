<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 //put your code here
 class User_model extends CI_Model{

    // Log in
    public function login($email, $password){
        // Validate
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $result = $this->db->get('users');

        if($result->num_rows() == 1){
            $this->db->where('email', $email);
            $result = $this->db->get('users')->row()->name;
            return $result;
        } else {
            return false;
        }
    }

    // Registration
    public function check_user($name, $email) {
        $this->db->where('name', $name);
        $this->db->where('email', $email);
        $result = $this->db->get('users');
        $count = $result->num_rows();
        return $count;
    }

    public function insert_user($data) {
        return $this->db->insert('users', $data);
    }

    public function load_profile($query) {
        $this->db->select("*");
        $this->db->from("users");
        if($query != '') {
            $this->db->like('name');
        } else {
            return $this->db->get();
        }
    }
}
?>