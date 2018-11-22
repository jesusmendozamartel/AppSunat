<?php 
class Login_model extends CI_Model{
	public function valida($username,$password){
		$query = $this->db->query("exec dncn_administrativo.dbo.sp_validar_usuario '$username','$password'");
		return $query->result();
	}
}
?>

