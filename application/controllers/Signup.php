<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	/**
	 * 
	 **/

	 function index(){
		 //dependances de "heleper url"
		 //injection de "helper url" fais dans config/autoload $autoload['helper']=new Array('http','url');
		$this->load->view('frame/header');
		$data['frameType']='signup';
		
		//injection de datas dans la vue (si pas autoload)
		//helper url dispo dans la vue par autoload
		$this->load->view('login',$data);

		//dependances de "heleper url" autoload
		$this->load->view('frame/footer');
	 }
}	
