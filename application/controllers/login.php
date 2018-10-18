<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
		/**
		 * 
		 **/
	
		 function index(){
			 //dependances de "heleper url"
			 //injection de "helper url" fais dans config/autoload $autoload['helper']=new Array('http','url');
			$this->load->view('frame/header');
			
			$this->web_component();
		
			$data['extraFooter']=	$this->injectMyJsScriptToCtrl();
			//dependances de "heleper url" autoload
			$this->load->view('frame/footer',$data);
		 }

		 function injectMyJsScriptToCtrl(){
			return  '<script>showLoginModule();</script>';
		 }
		 function web_component(){
			header("Access-Control-Allow-Origin: [::1]");
			$data['frameType']='login';
			
			//injection de datas dans la vue (si pas autoload)
			//helper url dispo dans la vue par autoload
			$this->load->view('frame/login',$data);	
			var_dump($_COOKIE);	
			
		 }
		function disconnect(){
		 $token=getallheaders()['token'];
		 $this->load->model('Model_AuthentUser');
		 $this->load->Model_AuthentUser->disconnect($token);
		 
		}
		 function tryAuthent2(){
	 
		 header("Access-Control-Allow-Origin: *");

		 $hash=getallheaders()['Hash'];
		 $log=getallheaders()['Login'];
		 $date=getallheaders()['AtDate'];
		// var_dump($hash);	
		 //verification de l'age de la demande delta +/-2s ==>4s
		$dateNow= date('U');
		
	/*	if( (intval($dateNow)-2)>intval($date) || intval($date)>(intval($dateNow)+2)){
			$message_403 = 'Forbiden 403<hr/><div style="display:inline-block"><img src="'+
			site_url( 'img/core/rabbit.png' )+'" ></div><div style="display:inline-block">You do not have access to the url you where trying to reach.</div>';
			echo $message_403 ;
			return;
		}
	*/	
		$this->load->model('Model_AuthentUser');
		
		 $users=$this->Model_AuthentUser->authentUser($log,$hash,$date);
		 
		 
		 if($users==null|| count($users)<=0){
		 	
		$message_404 = 'NOT FOUND 404<hr/><div style="display:inline-block"><img src="'+
		site_url( 'img/core/rabbit.png' )+'" ></div><div style="display:inline-block">login error.</div>';
	echo $message_404 ;
		//show_404(); 
		return ;
			}
//var_dump($users);
$user=$users[0];
		echo json_encode($user);
		
				// var_dump(getallheaders());
	 }
// 	function tryAuthent($login,$time,$hash){
			
		 
// 	header("Access-Control-Allow-Origin: *");
	

// 			$this->load->model('Model_AuthentUser');
// 			$users=$this->Model_AuthentUser->authentUser($log,$hash,$date);
// 			if(count($users)==0){

// 				show_404(); return ;
// 			}
// 			$user=$users[0];
			
// 			$this->input->set_cookie('token', $user->token,date('c',intval(date('u'))+5000),base_url(),'index.php' );
// //$this->input->set_cookie('name', 'value', 'expire', 'domain', 'path','prefix', 'secure');

			
// 			redirect('signup','refresh');

			
// 		 }
	}	
	