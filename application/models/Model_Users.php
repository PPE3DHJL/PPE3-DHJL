<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Users extends CI_Model {
 function me(){
     print_r($_COOKIE);
  //  $cmd = "SELECT * FROM user U WHERE idUser='".$id."' LIMIT 1";
 }
 public function getUserByHash($hash)
 {
   
     $cmd = "SELECT  iduser  FROM `user` WHERE SHA2(concat(`login`,`mdp`),256)='".$hash."'";
//var_dump($cmd);
     $sql = $this->db->query($cmd);
     $res= $sql->result();
    // var_dump();
     $cmd = "UPDATE `user` SET `token` =  SHA2(concat(`login`,`mdp`,now()),256) WHERE `user`.`idUser` =". $res[0]->iduser ." LIMIT 1";
      $sql = $this->db->query($cmd);
      $cmd = "SELECT `token`,`idUser`, `nomUser`, `login`,  `photoUser`  FROM `user` WHERE `user`.`idUser` =". $res[0]->iduser ." LIMIT 1";
      //var_dump($cmd);
              $sql = $this->db->query($cmd);
            //  $res= $sql->result();
        
      return $sql->result()[0];
 }
    function getUserById($id){
        //$cmd="SELECT * FROM users;";
         
            $cmd = "SELECT * FROM user U WHERE idUser='".$id."' LIMIT 1";
        
            $sql = $this->db->query($cmd);
            return $sql->result()[0];
        } 
       
        function getUsers($limit=50,$position=1){
            //$cmd="SELECT * FROM users;";
             
                $cmd = "SELECT ` U.`idUser` ,nomUser FROM user U,  WHERE true  LIMIT $position,$limit";
            
                $sql = $this->db->query($cmd);
                return $sql->result();
            } 
}

?>