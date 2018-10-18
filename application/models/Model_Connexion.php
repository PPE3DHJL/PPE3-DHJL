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
}
?>