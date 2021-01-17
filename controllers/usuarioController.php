<?php 
class usuarioController extends controller {

	public function index(){


		$dados = array();

		$this->loadView('painel', $dados);

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

	public function trabalho(){


		$dados = array();

		$this->loadTemplate('trabalho', $dados);

	}

	public function trabalhoFinalizado(){


		$dados = array();

		$this->loadTemplate('trabalhoFinalizado', $dados);

	}
	
}