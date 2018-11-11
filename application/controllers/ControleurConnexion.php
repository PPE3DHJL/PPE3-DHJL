<?php

class ControleurConnexion extends CI_Controller
{
<<<<<<< HEAD
    public function index()
    {
        $this->load->view('Connexion');
    }

=======
    public function construct(){

    parent::construct();
        $this->load->helper('url');
        $this->load->model('Model_Connexion');
        $this->load->library('session');

}
>>>>>>> 5c97ca0edbe715505c15e24c4af8d6eb9c2f8b3d
    public function pageConnexion()
    {
        $this->load->view('header');
        $this->load->view('Connexion');
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
}
?>