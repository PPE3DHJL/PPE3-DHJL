<?php

class Inscript extends CI_Controller
{
    public function inscription()
    {

        $user=array(
            'nomUser'=>$this->input->post('nomUser'),
            'login'=>$this->input->post('login'),
            'mdp'=>$this->input->post('mdp'),
              );

            }
        // Si l'inscription est correcte
        
       
        }
        //base de donnée
        $data = array(
            'nom'=>$_POST['nomUser']
        );

        $this->db->insert('user',$data);


        //Chargement de la vue
        $this->load->view('inscription');

}
}
?>
   
