
	<!-- jQuery Local -->
	<script type="text/javascript">
		$(document).ready(function(){

			$(".alerta").hide();

			$(".voltar").on("click", function(){

				$(".voltar").hide();

				$(".login-page").fadeOut(function(){

					window.location.href="<?php echo BASE_URL; ?>";

				});

			});

		});
	</script>

	<!-- HTML -->
	<div class="alerta">
		
		<p>Por favor, preencha todos os dados necessários!</p>

	</div>

	<!-- Voltar a Home -->
	<div class="voltar">

		<p>Voltar</p>

		<div class="bolinha"></div>

	</div>

	<!-- Login page -->
	<div class="login-page">
		
		<div class="logo"><img alt="Logo" src="<?php echo BASE_URL; ?>assets/images/icon-logo.svg"></div>

		<h2>DeuPane</h2>

		<h3>Deu Pane? Resolva seu problema!</h3>

		<div class="buscar recusado">	

			<img alt="Login-key" src="<?php echo BASE_URL; ?>assets/images/key.svg">
			
			<p>Faça Login na sua conta e deixe-a aberta para convites.</p>

		</div>

		<form class="caixa-form" method="POST" autocomplete="off" id="form_login">

			<div class="perfil-icon">
				
				<img src="<?php echo BASE_URL; ?>assets/images/user_login.svg">

			</div>

			<input type="text" name="email" placeholder="E-MAIL">

			<input type="password" name="senha" placeholder="SENHA">

			<button type="submit">ENTRAR</button>

			<div class="opcoes-form">
				
				<a href="">Esqueci a senha</a>

								|

				<a href="<?php echo BASE_URL; ?>home/register">Não tenho conta</a>

			</div>

		</form>

	</div>