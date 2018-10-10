<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AsyncAuth extends CI_Controller {

    function tokenizer($authKey){
        $data['loginHash']=$authKey;	
        $this->load->model("Model_Users");
        $data['user']=$this->Model_Users->getUserByHash($data['loginHash']);
        if($data['user']!=NULL)
        $this->load->view("login/Auth_Response",$data);
        else show_404();

    }
     
}?>