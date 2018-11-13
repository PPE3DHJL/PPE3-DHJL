<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function index()
	{
		$this->homePage();
	}
	public function homePage(){
		$this->load->view("header");
	}
}
