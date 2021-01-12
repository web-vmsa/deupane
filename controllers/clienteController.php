<?php 
class clienteController extends controller {

	public function index(){


		$dados = array();

		$this->loadView('cliente', $dados);

	}

	public function avaliacao(){


		$dados = array();

		$this->loadView('avaliacao', $dados);

	}
	
}