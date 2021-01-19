<?php 
class usuarioController extends controller {

	public function index(){


		$usuario = new Usuario();
		$usuario->id = $_SESSION['id'];

		$dados = array(
			'usuario' => $usuario->get_dados()
		);

		$this->loadView('painel', $dados);

	}

	public function edit(){


		$usuario = new Usuario();
		$usuario->id = $_SESSION['id'];

		$dados = array(
			'usuario' => $usuario->get_dados()
		);

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