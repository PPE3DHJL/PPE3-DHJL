<?php class Model_Demande extends CI_Model{
    
function getDemandesByIdUser($idUser){
    $sql = $this->db->query("select service.nomService, demande.idDemande, demande.descriptionDemande, demande.dateDemande, demande.idService, idUser from demande inner join service on demande.idService = service.idService where idUser=".$idUser);
    return $sql->result();
}
function getDetailsDemande($idDemande){
    $sql = $this->db->query("select idDemande, descriptionDemande, dateDemande, nomService, from demande inner join service on demande.idService=service.idService where idDemande =".$idDemande);
    return $sql->result();
}
}
?>