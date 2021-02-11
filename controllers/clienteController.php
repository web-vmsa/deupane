<?php 
class clienteController extends controller {

	public function index(){

		$existe = new Localizacao();
		$existe->latitude = '51,50000000';
		$existe->longitude = '-0,10000000';
		$verifica = $existe->get_mecanico();

		$dados = array(
			'verifica' => $verifica
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