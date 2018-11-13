<?php
class Model_Connexion extends CI_Model
{
    public function login_User($login,$mdp){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('login',$login);
        $this->db->where('mdp',$mdp);
    
        if($query=$this->db->get())
        {
          return $query->row_array();
        }
        else{
          return false;
        }
    
    
      }
      public function inscription_user($user){
    
        $this->db->insert('user', $user);
      }
      public function validation_login($login){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('login',$login);
        $query=$this->db->get();
      
        if($query->num_rows()>0){
          return false;
        }else{
          return true;
        }
      
      }
}
?>
<?php

class Model_Utilisateur extends CI_Model{
 
    public function enregistrement($user){
        $this->db->insert('user', $user);
        }

    public function verifconnection($login){
        $this->db->select('user');
        $this->db->from('user');
        $this->db->where('login',$login);
        $query=$this->db->get();
    }
      
      }
?>
