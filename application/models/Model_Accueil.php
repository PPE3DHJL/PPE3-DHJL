<?php
class Model_Accueil extends CI_model{
    function getUser($idLogin){
        $sql = $this->db->query("select idUser, nomUser, login, mdp, photoUser from user where idUser=$idLogin");
        return $sql->result();
    }
    public function getOffreById($id){
    $cmd = "SELECT `idOffre`, `descriptionOffre`, `dateOffre`, S.`idService`, `nomService`, `photoService`, C.`idCateg`, `nomCateg`, `photoCateg`
        , U.`idUser` ,nomUser FROM user U, `offre` O, `service` S,`categorie` C WHERE C.`idCateg`=S.`idCateg` AND  U.`idUser` = O.`idUser` AND S.`idService`=O.`idService`   AND idoffre='" . $id . "' LIMIT 1";
    $sql = $this->db->query($cmd);
    return $sql->result()[0];
    }
}
?>