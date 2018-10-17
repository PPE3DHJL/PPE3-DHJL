<?php

class ModeleUtilisateur extends CI_Model{
 
    public function enregistrement($user){
        $this->db->insert('user', $user);
        }



    public function login_check($login){
        $this->db->select('user');
        $this->db->from('user');
        $this->db->where('login',$login);
        $query=$this->db->get();
    }
      
      }
?>



      
