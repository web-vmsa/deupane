<?php 
class homeController extends controller {

	public function index(){


		$dados = array();

		$this->loadTemplate('home', $dados);

	}

	public function login(){


		$dados = array();

		$this->loadTemplate('login', $dados);

	}

	public function teste(){


		$dados = array();

		$this->loadTemplate('teste', $dados);

	}

	public function logout(){


		$dados = array();

		$this->loadTemplate('logout', $dados);

	}

	public function register(){


		$dados = array();

		$this->loadTemplate('register', $dados);

	}

	public function registerAlert(){


		$dados = array();

		$this->loadTemplate('registerAlert', $dados);

	}

	public function registerKey($chave_registro){

		$chave = new Usuario();
		$chave->chave_registro = $chave_registro;
		$chave->status = "1";
		$verifica_chave = $chave->verifica_chave();

		$dados = array(
			'chave_registro' => $chave_registro
		);

		if ($verifica_chave == true) {

			$atualiza_status = new Usuario();
			$atualiza_status->id = $verifica_chave['id'];
			$atualiza_status->status = "2";
			$atualiza_status->atualiza_status();
			
			$this->loadTemplate('registerKey', $dados);

		} else {

			$this->loadTemplate('compartilhe', $dados);

		}

	}
	
}