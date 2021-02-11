<?php 

class Trabalho extends model {

	public $id;
	public $id_usuario;
	public $ip_cliente;
	public $localizacao;
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

		$sql = "INSERT INTO trabalhos SET id_usuario = :id_usuario, ip_cliente = :ip_cliente, localizacao = :localizacao, data = :data, status = :status";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id_usuario', $this->id_usuario);
		$sql->bindValue(':ip_cliente', $this->ip_cliente);
		$sql->bindValue(':localizacao', $this->localizacao);
		$sql->bindValue(':data', $this->data);
		$sql->bindValue(':status', $this->status);
		$sql->execute();

	}

}