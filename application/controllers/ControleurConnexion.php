<?php

class ControleurConnexion extends CI_Controller
{
    public function construct(){

        parent::construct();
            $this->load->helper('url');
            $this->load->model('Model_Connexion');
            $this->load->library('session');
    
    }
        
	public function index()
	{
		$this->pageConnexion();
	}
    public function pageConnexion()
    {
        $this->load->view('header');
        $this->load->view('Connexion');
    }
    public function pageInscription()
    {
        $this->load->view('header');
        $this->load->view('inscription');
    }

     function login_User()
    {
        $login=array( 'login'=>$this->input->post('login'), 'mdp'=>$this->input->post('mdp'));
        $data=$this->Model_Connexion->login_User($login['login'],$mdp['mdp']);
        if ($data){
            $_SESSION['idUser']=$data['idUser'];
            $_SESSION['nomUser']=$data['nomUser'];
            $_SESSION['login']=$data['login'];
            $_SESSION['photoUser']=$data['photoUser'];
            redirect('home/index');
        }
    
    }
    public function inscription_User(){
        $user=array(
        'nomUser'=>$this->input->post('nomUser'),
        'login'=>$this->input->post('login'),
        'mdp'=>$this->input->post('mdp'),
         );
        $validation_login=$this->user_model->validation_login($user['login']);
        if($validation_login){
          $this->user_model->inscription_user($user);
          redirect('user/Connexion');
        }
        else{
          redirect('user/inscription');
        }
  }
  
}
?>