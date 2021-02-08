<?php 

class Notificacao extends model {

	public $id;
	public $id_usuario;
	public $notificacao_tipo;
	public $msg;
	public $id_trabalho;
	public $lido;
	public $data;

	public function get_notifi(){

		$sql = "SELECT count(*) as t FROM notificacoes WHERE id_usuario = :id_usuario AND lido = '0'";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":id_usuario", $this->id_usuario);
		$sql->execute();
		if ($sql->rowCount() > 0) {
			return $sql->fetch();
		} else {
			return false;
		}

	}

	public function get_all_noti(){

		$sql = "SELECT * FROM notificacoes WHERE id_usuario = :id_usuario AND lido = '0' ORDER BY id DESC";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":id_usuario", $this->id_usuario);
		$sql->execute();
		if ($sql->rowCount() > 0) {
			return $sql->fetchAll();
		} else {
			return false;
		}

	}

}