<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demande extends CI_Controller {
   
    public function index($id){
       $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('demandes');
        $this->load->view('footer');
     
    }
    
      public function delete($id){
        $this->load->helper('url');
         $this->load->view('header');
         $this->load->view('demandes');
         $this->load->view('footer');
      
     }
}
?>