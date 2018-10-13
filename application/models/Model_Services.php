<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Services extends CI_Model {
    function getServiceById($id){
        //$cmd="SELECT * FROM users;";
         
            $cmd = "SELECT * FROM `service` WHERE idService='".$id."' LIMIT 1";
        
            $sql = $this->db->query($cmd);
            return $sql->result()[0];
        } 
        function getServices($limit=10,$position=1){
            //$cmd="SELECT * FROM users;";
             
                $cmd = "SELECT * FROM `service` WHERE true LIMIT  $position,$limit";
            
                $sql = $this->db->query($cmd);
                return $sql->result();
            } 
}

?>