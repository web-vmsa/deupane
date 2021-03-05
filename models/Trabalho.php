<?php 

class Trabalho extends model {

	public $id;
	public $id_usuario;
	public $ip_cliente;
	public $latitude;
	public $longitude;
	public $data;
	public $status;

	function get_client_ip() {
	    $ipaddress = '';
	    if (isset($_SERVER['HTTP_CLIENT_IP']))
	        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
	    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
	        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
	    else if(isset($_SERVER['HTTP_X_FORWARDED']))
	        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
	    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
	        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
	    else if(isset($_SERVER['HTTP_FORWARDED']))
	        $ipaddress = $_SERVER['HTTP_FORWARDED'];
	    else if(isset($_SERVER['REMOTE_ADDR']))
	        $ipaddress = $_SERVER['REMOTE_ADDR'];
	    else
	        $ipaddress = 'UNKNOWN';
	    return $ipaddress;
	}

	function set_trabalho() {

		$sql = "INSERT INTO trabalhos SET id_usuario = :id_usuario, ip_cliente = :ip_cliente, latitude = :latitude, longitude = :longitude, data = :data, status = :status";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id_usuario', $this->id_usuario);
		$sql->bindValue(':ip_cliente', $this->ip_cliente);
		$sql->bindValue(':latitude', $this->latitude);
		$sql->bindValue(':longitude', $this->longitude);
		$sql->bindValue(':data', $this->data);
		$sql->bindValue(':status', $this->status);
		$sql->execute();

	}

	function verifica_status() {

		$sql = "SELECT * FROM trabalhos WHERE ip_cliente = :ip_cliente ORDER BY id DESC";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":ip_cliente", $this->ip_cliente);
		$sql->execute();
		if ($sql->rowCount() > 0) {
			
			return $sql->fetch();

		} else {

			return false;

		}

	}

}