<?php 

class Inscript extends CI_Controller {
    public function index()
    {
        $this->load->view('inscription');
    }

    public function inscription(){
      $user=array(
      'nomUser'=>$this->input->post('nomUser'),
      'mdp'=>$this->input->post('mdp'),
      'login'=>$this->input->post('login'),
          );


    $login_check=$this->user_model->verifconnection($user['login']);

    if($login_check){
        $this->user_model->model_inscription($user);
        $this->session->set_flashdata("Vous avez bien été enregistré!");
        $this->load->view('Connexion');
      }
      else{
        $this->session->set_flashdata("Ce login est déjà pris. Veuillez-vous reconnecter s'il vous plaît.");
        $this->load->view('inscription');
      }
}

}

?>