<?php
defined(!'BASEPATH') OR exit('No direct script access allowed'); 

class Cookie extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('cookie');
    }


    function set() {

        $cookie = array(
            'name' => 'Home Cookie',
            'value' => 'You have reached the home cookie',
            'expire' => '3600'
            'domain' => 'https://infs3202-03187824.uqcloud.net',
            'path' => '/',
            'secure' => TRUE
        );
        $this->input->set_cookie($cookie);
        echo "Cookie is set";
    }

    function get() {
        echo $this->input->cookie('Home Cookie', true);
    }

}

?>