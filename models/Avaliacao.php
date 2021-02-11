<?php 

class Avaliacao extends model {

	public $id_usuario;
	public $avaliacao;
	public $data;

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

	public function set_avaliacao(){

		$sql = "INSERT INTO avaliacoes SET id_usuario = :id_usuario, avaliacao = :avaliacao, data = :data";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id_usuario', $this->id_usuario);
		$sql->bindValue(':avaliacao', $this->avaliacao);
		$sql->bindValue(':data', $this->data);
		$sql->execute();

	}

}