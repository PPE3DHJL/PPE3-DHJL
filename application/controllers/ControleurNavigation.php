<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControleurNavigation extends CI_Controller {

	public function index()
	{
		$this->homePage();
	}
	public function AfficherOffres(){
		$this->load->Model("Model_Offre");
	}
	public function AfficherDemandes(){
		$this->load->Model("Model_Demande");
	}
}