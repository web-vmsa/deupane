<?php 

class Avaliacao extends model {

	public $id_usuario;

	public function get_avaliacao(){

		$sql = "SELECT count(*) as t FROM avaliacoes WHERE id_usuario = :id_usuario AND avaliacao = '3'";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":id_usuario", $this->id_usuario);
		$sql->execute();
		if ($sql->rowCount() > 0) {
			return $sql->fetch();
		} else {
			return false;
		}

	}

}