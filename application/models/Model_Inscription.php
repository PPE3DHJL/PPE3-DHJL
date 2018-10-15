<?php

class ModeleUtilisateur extends CI_Model{
    private $idUser;
    private $nomUser;
    private $login;
    private $mdp;

    function __construct(){
         parent::__construct();
    }

    function getById($id){
        
         $requete = $this->db->get_where('users', array('id' => $id), $limit, $offset);
         return $this->db->query($requete )->result_array();
    }

}

?>