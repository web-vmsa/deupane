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

			if ($email == "vmsa03@gmail.com") {
				
				$dados['resultado'] = 0;

			} else {

				$dados['resultado'] = 1;

			}

		}

		$this->loadView('ajax', $dados);

	}
	
}