<?php 
class ajaxController extends controller {

	public function index(){


		$dados = array();

		if (!empty($_POST['email']) && !empty($_POST['senha'])) {
			
			$email = addslashes($_POST['email']);
			$senha = addslashes($_POST['senha']);

			if ($email == "vmsa03@gmail.com" && $senha == "123") {
				
				$dados['resultado'] = 1;

			} else {

				$dados['resultado'] = 0;

			}

		}

		$this->loadView('ajax', $dados);

	}

	public function registro(){


		$dados = array();

		if (!empty($_POST['email']) && !empty($_POST['senha'])) {
			
			$email = addslashes($_POST['email']);
			$senha = addslashes($_POST['senha']);

			$usuario = new Usuario();
			$usuario->email = $email;
			$existe = $usuario->get_usuario();

			if ($existe == true) {
				
				$dados['resultado'] = 0;

			} else {

				$novo_usuario = new Usuario();
				$novo_usuario->email = $email;
				$novo_usuario->senha = md5($senha);
				$novo_usuario->chave_registro = md5($email.$senha);
				$novo_usuario->data_entrou = date("Y/m/d");
				$novo_usuario->status = "1";
				$novo_usuario->registro();
				
				$dados['resultado'] = 1;

			}

		}

		$this->loadView('ajax', $dados);

	}

	public function edit_info(){


		$dados = array();

		if($_FILES['imagem-perfil']['size'] == 0) {

			$dados['resultado'] = 1;

		} else {

			$dados['resultado'] = 0;

		}

		$this->loadView('ajax', $dados);

	}
	
}