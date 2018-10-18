<?php
class Model_Connexion extends CI_Model
{
    public function getUser($login, $password)
    {
        $sql = $this->db->query("select nomUser, sexe, email, dateNaissance, login, mdp, photoUser from user where mdp = '".$mdp."' and login = '".$login."'");
        return $sql->result();
    }
}
?>