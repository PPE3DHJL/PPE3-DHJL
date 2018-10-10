<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {
   
    public function index(){
       $this->load->helper('url');
       $this->load->model("Model_Services");
      // $this->load->model("Model_Service");
       $data['services'] = $this->Model_Services->getServices();   
        $this->load->view('header');
        $this->load->view('services',$data);
        $this->load->view('footer');
     
    }
    function view($id){
        $this->load->helper('url');
        $this->load->model("Model_Services");
        $this->load->model("Model_Offres");
        $data['service'] = $this->Model_Services->getServiceById($id);   
        $data['offres'] = $this->Model_Offres->getOffresByIdService($id);   
        
        $this->load->view('header');
         $this->load->view('service',$data);
         $this->load->view('footer');

    }
    function edit($id){
        $this->load->helper('url');
        $this->load->model("Model_Services");
       // $this->load->model("Model_Service");
        $data['service'] = $this->Model_Services->getServiceById($id);   
         $this->load->view('header');
         $this->load->view('forms/service',$data);
         $this->load->view('footer');

    }
    // public function edit($id){
    //      $this->load->helper('url');
    //       $this->load->view('header');
    //       $this->load->view('forms/services');
    //       $this->load->view('footer');
       
    //   }
}
?>