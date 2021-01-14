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

	public function register(){


		$dados = array();

		$this->loadTemplate('register', $dados);

	}

	public function registerAlert(){


		$dados = array();

		$this->loadTemplate('registerAlert', $dados);

	}
	
}