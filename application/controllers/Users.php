<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function index(){
        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('users');
        $this->load->view('footer');
     
    }
}
?>