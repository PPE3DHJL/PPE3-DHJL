<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_Demandes extends CI_Model
{
    public function getDemandeById($id)
    {

        $cmd = "SELECT * FROM `demande` D, service S WHERE D.`idService`=S.`idService`   AND idDemande='" . $id . "' LIMIT 1";

        $sql = $this->db->query($cmd);
        return $sql->result()[0];
    }
    public function getDemandesByIdUser($id)
    {
        //$cmd="SELECT * FROM users;";

        $cmd = "SELECT * FROM `demande` D, service S WHERE D.`idService`=S.`idService` AND D.idUser='" . $id . "' ";

        $sql = $this->db->query($cmd);
        return $sql->result();
    }
    public function deleteDemandeById($id)
    {
        //$cmd="SELECT * FROM users;";

        $cmd = "DELETE  FROM `demande` D, service S WHERE D.`idService`=S.`idService` AND D.idDemande='" . $id . "' ";

        $sql = $this->db->query($cmd);
        return $sql->result();
    }
    public function getDemandes($limit = 50, $position = 1)
    {
        //$cmd="SELECT * FROM users;";

        $cmd = "SELECT * FROM `demande` D, service S WHERE D.`idService`=S.`idService`  LIMIT $position,$limit";

        $sql = $this->db->query($cmd);
        return $sql->result();
    }
}
