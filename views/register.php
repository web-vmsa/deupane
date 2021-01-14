
	<!-- jQuery Local -->
	<script type="text/javascript">
		$(document).ready(function(){

			$(".alerta").hide();

		});
	</script>

	<!-- HTML -->
	<div class="alerta">
		
		<p>Por favor, preencha todos os dados necessários!</p>

	</div>

	<!-- Registro -->
	<div class="login-page logo-register">
		
		<div class="logo"><img alt="Logo" src="<?php echo BASE_URL; ?>assets/images/icon-logo.svg"></div>

		<h2>DeuPane</h2>

		<h3>Deu Pane? Resolva seu problema!</h3>

		<div class="buscar">	

			<img alt="Login-key" src="<?php echo BASE_URL; ?>assets/images/plus.svg">
			
			<p>Realiza o seu registro e comece a trabalhar.</p>

		</div>

		<form class="caixa-form register-form" method="POST" autocomplete="off" id="form_register">

			<div class="perfil-icon">
				
				<img src="<?php echo BASE_URL; ?>assets/images/user_register.svg">

			</div>

			<input type="text" name="email" placeholder="UM E-MAIL">

			<input type="password" name="senha" placeholder="UMA SENHA">

			<button type="submit">REALIZAR CADASTRO</button>

			<div class="opcoes-form">

				<a href="<?php echo BASE_URL; ?>home/login">Já tenho conta</a>

			</div>

		</form>

	</div>