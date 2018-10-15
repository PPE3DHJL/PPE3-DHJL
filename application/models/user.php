<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Users extends CI_Model {
    function getUserById($id){
        //$cmd="SELECT * FROM users;";
         
            $cmd = "SELECT nomUser,photoUser,idUser FROM `user` WHERE idUser='".$id."' LIMIT 1";
        
            $sql = $this->db->query($cmd);
            return $sql->result()[0];
        } 
        function getUsers($limit=10,$position=1){
            //$cmd="SELECT * FROM users;";
             
                $cmd = "SELECT nomUser,photoUser,idUser FROM `user` WHERE true LIMIT $limit $position";
            
                $sql = $this->db->query($cmd);
                return $sql->result();
            } 
}

?>