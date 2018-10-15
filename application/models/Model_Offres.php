<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_Offres extends CI_Model
{
    public function getOffreById($id)
    {

        $cmd = "SELECT `idOffre`, `descriptionOffre`, `dateOffre`, S.`idService`, `nomService`, `photoService`, C.`idCateg`, `nomCateg`, `photoCateg`
            , U.`idUser` ,nomUser FROM user U, `offre` O, `service` S,`categorie` C WHERE C.`idCateg`=S.`idCateg` AND  U.`idUser` = O.`idUser` AND S.`idService`=O.`idService`   AND idoffre='" . $id . "' LIMIT 1";

        $sql = $this->db->query($cmd);
        return $sql->result()[0];
    }
    public function getOffresByIdService($id)
    {
        //$cmd="SELECT * FROM users;";

        $cmd = "SELECT `idOffre`, `descriptionOffre`, `dateOffre`, S.`idService`, `nomService`, `photoService`, C.`idCateg`, `nomCateg`, `photoCateg`
                , U.`idUser` ,nomUser FROM user U, `offre` O, `service` S,`categorie` C WHERE C.`idCateg`=S.`idCateg` AND  U.`idUser` = O.`idUser` AND S.`idService`=O.`idService`   AND S.idservice='" . $id . "' ";

        $sql = $this->db->query($cmd);
        return $sql->result();
    }
    public function getOffres($limit = 50, $position = 1)
    {
        //$cmd="SELECT * FROM users;";

        $cmd = "SELECT `idOffre`, `descriptionOffre`, `dateOffre`, S.`idService`, `nomService`, `photoService`, C.`idCateg`, `nomCateg`, `photoCateg`
                , U.`idUser` ,nomUser FROM user U, `offre` O, `service` S,`categorie` C WHERE C.`idCateg`=S.`idCateg` AND  U.`idUser` = O.`idUser` AND S.`idService`=O.`idService` "; //"  LIMIT $position,$limit";

        $sql = $this->db->query($cmd);
        return $sql->result();
    }
}
