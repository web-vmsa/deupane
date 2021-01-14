<?php 
class usuarioController extends controller {

	public function index(){


		$dados = array();

		$this->loadTemplate('painel', $dados);

	}
	
}