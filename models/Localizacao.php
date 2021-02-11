<?php 

class Localizacao extends model {

	public $latitude;
	public $longitude;

	public function get_mecanico(){

		$sql = "SELECT * FROM usuarios WHERE latitude = :latitude AND longitude = :longitude AND status = '2'";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":latitude", $this->latitude);
		$sql->bindValue(":longitude", $this->longitude);
		$sql->execute();
		if ($sql->rowCount() > 0) {
			return $sql->fetch();
		} else {
			return false;
		}

	}

}