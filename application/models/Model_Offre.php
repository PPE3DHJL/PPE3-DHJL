<?php class Model_Offre extends CI_Model{

function getOffresByIdUser($idUser){
    $sql = $this->db->query("select service.nomService, offre.idOffre, offre.descriptionOffre, offre.dateOffre, offre.idService, idUser from offre inner join service on offre.idService = service.idService where idUser=".$idUser);
    return $sql->result();
}

function getDetailsOffre($idOffre){
    $sql = $this->db->query("select idOffre, descriptionOffre, dateOffre, nomService from offre inner join service on offre.idService=service.idService where idOffre =".$idOffre);
    return $sql->result();
}
}
?>