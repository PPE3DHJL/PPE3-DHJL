<?php

class ModeleUtilisateur extends CI_Model{
 
    public function register_user($user){
        $this->db->insert('user', $user);
        }

    }
?>