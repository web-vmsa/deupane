<?php 
class usuarioController extends controller {

	public function index(){


		$dados = array();

		$this->loadTemplate('painel', $dados);

	}

	public function edit(){


		$dados = array();

		$this->loadTemplate('edit', $dados);

	}

	public function endereco(){


		$dados = array();

		$this->loadTemplate('endereco', $dados);

	}

	public function enderecoResultado(){


		$dados = array();

		$this->loadTemplate('enderecoResultado', $dados);

	}
	
}