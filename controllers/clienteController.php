<?php 
class clienteController extends controller {

	public function index(){

		$existe = new Localizacao();
		$existe->latitude = '51,50000000';
		$existe->longitude = '-0,10000000';
		$verifica = $existe->get_mecanico();

		$avaliacao = new Avaliacao();
		$avaliacao->id_usuario = $verifica['id'];

		$ip_cliente = new Trabalho();

		$dados = array(
			'verifica' => $verifica,
			'ip_cliente' => $ip_cliente->get_client_ip(),
			'avaliacao' => $avaliacao->get_avaliacao()
		);

		$this->loadTemplate('cliente', $dados);

	}

	public function avaliacao(){


		$dados = array();

		$this->loadTemplate('avaliacao', $dados);

	}

	public function compartilhe(){


		$dados = array();

		$this->loadTemplate('compartilhe', $dados);

	}
	
}