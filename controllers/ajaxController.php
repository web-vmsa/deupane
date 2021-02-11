<?php 
class ajaxController extends controller {

	public function index(){


		$dados = array();

		if (!empty($_POST['email']) && !empty($_POST['senha'])) {
			
			$email = addslashes($_POST['email']);
			$senha = md5(addslashes($_POST['senha']));

			$login = new Usuario();
			$login->email = $email;
			$login->senha = $senha;
			$login->status = "2";
			$verifica = $login->login();

			if ($verifica == true) {
				
				$_SESSION['id'] = $verifica['id'];

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

			$id = $_SESSION['id'];
			$nome = htmlspecialchars($_POST['nome']);
			$cep = htmlspecialchars($_POST['cep']);
			$telefone = htmlspecialchars($_POST['telefone']);
			$caixa_postal = htmlspecialchars($_POST['caixa_postal']);

			$edita = new Usuario();
			$edita->id = $id;
			$edita->nome = $nome;
			$edita->cep = $cep;
			$edita->telefone = $telefone;
			$edita->caixa_postal = $caixa_postal;
			$edita->update_usuario();

			$dados['resultado'] = 0;

		} else {

			$id = $_SESSION['id'];
			$nome = htmlspecialchars($_POST['nome']);
			$cep = htmlspecialchars($_POST['cep']);
			$telefone = htmlspecialchars($_POST['telefone']);
			$caixa_postal = htmlspecialchars($_POST['caixa_postal']);

			$extensao = pathinfo($_FILES['imagem-perfil']['name'],  PATHINFO_EXTENSION);
			$pasta = "users/images/"; 
			$temporario = $_FILES['imagem-perfil']['tmp_name'];
			$novoNome = uniqid().".$extensao";

			move_uploaded_file($temporario, $pasta.$novoNome);

			$foto = $novoNome;

			$edita = new Usuario();
			$edita->id = $id;
			$edita->nome = $nome;
			$edita->foto = $foto;
			$edita->cep = $cep;
			$edita->telefone = $telefone;
			$edita->caixa_postal = $caixa_postal;
			$edita->update_foto();

			$dados['resultado'] = 1;

		}

		$this->loadView('ajax', $dados);

	}

	public function get_notifi() {

		$dados = array();

		$id_usuario = $_SESSION['id'];
		$notifi = new Notificacao();
		$notifi->id_usuario = $id_usuario;
		$get = $notifi->get_notifi();

		$dados['resultado'] = $get['t'];

		$this->loadView('ajax', $dados);

	}

	public function get_all() {

		$dados = array();

		$id_usuario = $_SESSION['id'];
		$notifi = new Notificacao();
		$notifi->id_usuario = $id_usuario;
		$get = $notifi->get_all_noti();

		foreach ($get as $noti) {
			echo '<a href="'.$noti['link'].'">

				<div class="notificacao">
					
					<div class="tipo-noti"><img alt="Notificação" src="'.BASE_URL.'assets/images/info.svg"></div>

					<p>'.$noti['msg'].' <span>- '.substr($noti['data'], 0,-8).'</span></p>

				</div>

			</a>';
		}

		$this->loadView('ajax', $dados);

	}

	public function avalia() {

		$dados = array();

		if (!empty($_POST['avaliacao'])) {
			
			$id_usuario = 1;
			$avaliacao = htmlspecialchars($_POST['avaliacao']);
			$data = date("Y/m/d");

			$coment = new Avaliacao();
			$coment->id_usuario = $id_usuario;
			$coment->avaliacao = $avaliacao;
			$coment->data = $data;
			$coment->set_avaliacao();

			$dados['resultado'] = 0;

		} else {

			$dados['resultado'] = 1;

		}

		$this->loadView('ajax', $dados);

	}
	
}