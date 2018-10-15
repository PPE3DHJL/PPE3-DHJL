<?php

class Inscript extends CI_Controller
{
    public function inscription()
    {


        if (isset($_POST['inscription'])) {
            $this->form_validation_>set_rules('nom', 'prenom', 'required');
            $this->form_validation_>set_rules('Identifiant', 'motdepasse', 'required');
        }


        // Si l'inscription est correcte
        if ($this->form_validation->run() == TRUE) {
       
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