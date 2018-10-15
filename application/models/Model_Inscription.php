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
         $limit=1;
         $offset=0;
         $requete = $this->db->get_where('users', array('id' => $id), $limit, $offset);
         return $this->db->query($requete )->result_array();
    }

}

?>