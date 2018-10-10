<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Demandes extends CI_Controller
{

    public function index()
    {
        $this->load->helper('url');
        $this->load->model('Model_Demandes');
        
        
        $data['demandes'] = $this->Model_Demandes->getDemandes();
//var_dump($data);
        $this->load->view('header');
        $this->load->view('demandes', $data);
        $this->load->view('footer');

    }
    public function user($iduser)
    {
        $this->load->helper('url');
        $this->load->model('Model_Demandes');
        $this->load->model('Model_Users');
        $data['me'] = $this->Model_Users->me();
        $data['demandes'] = $this->Model_Demandes->getDemandesByIdUser($iduser);
//var_dump($data);
        $this->load->view('header');
        $this->load->view('demandes', $data);
        $this->load->view('footer');

    }

}
?>