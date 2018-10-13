<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    function index(){
        $data['loginType']='login';
        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('login',$data);

    }

}
?>