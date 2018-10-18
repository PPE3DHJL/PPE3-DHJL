<?php
class Model_Connexion extends CI_Model
{
    public function getUser($mdp, $login)
    {
        $sql = $this->db->query("select idUser, nomUser, login, mdp,  from user where mdp = '".$mdp."' and login = '".$login."'");
        return $sql->result();
    }
}
?>