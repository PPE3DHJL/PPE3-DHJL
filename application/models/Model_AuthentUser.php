<?php class Model_AuthentUser extends CI_Model{

function makeToken($hash,$date){
//check validity of date +/-2s
		$cmd="UPDATE `user` SET `token` = SHA2(CONCAT('"
				.$hash."',mdp,'".$date."'),256) , lastWriteAcces='".date('c',$date)."' WHERE SHA2(CONCAT(login,mdp,'".$date."'),256)='$hash';";
	 	//echo $cmd;
		$sql = $this->db->query($cmd);
		return $sql;
	}
	function disconnect($token){
		//check validity of date +/-2s
				$cmd="UPDATE `user` SET `token` = SHA2(CONCAT('"
						.$token."',mdp,'".date('c',rand(10000,1000000))."'),256)  WHERE token='$token';";
				 //echo $cmd;
				$sql = $this->db->query($cmd);
				return $sql;
			}
	function authentUser($login,$hash,$date){
		$this->makeToken($hash,$date);
		$cmd="SELECT `idUser`, `nomUser`, `login`, `photoUser`, `token` FROM user WHERE SHA2(CONCAT(login,mdp,'".$date."'),256)='$hash';";
		
     	$sql = $this->db->query($cmd);
	   return $sql->result();
	}
}

?>
