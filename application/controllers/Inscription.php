<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscription extends CI_Controller {
    function index(){
        $data['loginType']='inscription';
        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('login',$data);
        $this->load->view('footer');
    }

}
?>