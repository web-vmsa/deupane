<?php 

class Usuario extends model {

	public $id;
	public $email;
	public $senha;
	public $chave_registro;
	public $data_entrou;
	public $status;

	public function get_usuario(){

		$sql = "SELECT * FROM usuarios WHERE email = :email";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":email", $this->email);
		$sql->execute();
		if ($sql->rowCount() > 0) {
			return $sql->fetch();
		} else {
			return false;
		}

	}

	public function verifica_chave(){

		$sql = "SELECT * FROM usuarios WHERE chave_registro = :chave_registro AND status = :status";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":chave_registro", $this->chave_registro);
		$sql->bindValue(":status", $this->status);
		$sql->execute();
		if ($sql->rowCount() > 0) {
			return $sql->fetch();
		} else {
			return false;
		}

	}

	public function registro(){

		$sql = "INSERT INTO usuarios SET email = :email, senha = :senha, chave_registro = :chave_registro, data_entrou = :data_entrou, status = :status";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":email", $this->email);
		$sql->bindValue(":senha", $this->senha);
		$sql->bindValue(":chave_registro", $this->chave_registro);
		$sql->bindValue(":data_entrou", $this->data_entrou);
		$sql->bindValue(":status", $this->status);
		$sql->execute();

	}

	public function atualiza_status(){

		$sql = "UPDATE usuarios SET status = :status WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":status", $this->status);
		$sql->bindValue(":id", $this->id);
		$sql->execute();

	}

}