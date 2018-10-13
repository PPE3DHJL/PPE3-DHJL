<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {
   
   
    public function view($id){
         
              $this->load->helper('url');
               $this->load->model("Model_Services");
                $this->load->model("Model_Offres");
                $data['offres'] = $this->Model_Offres->getOffresByIdService($id);   
                print_r($data);
                $this->load->view('service',$data);
                
             
            }
    // public function edit($id){
    //      $this->load->helper('url');
    //       $this->load->view('header');
    //       $this->load->view('forms/services');
       
    //   }
}
?>