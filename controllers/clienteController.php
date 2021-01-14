<?php 
class clienteController extends controller {

	public function index(){


		$dados = array();

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