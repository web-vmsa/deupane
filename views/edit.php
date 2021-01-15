
	<!-- jQuery Local -->
	<script type="text/javascript">
		$(document).ready(function(){

			$(".alerta").hide();

		});
	</script>

	<!-- HTML -->
	<div class="alerta">
		
		<p>Seus dados foram atualizados com sucesso!</p>

	</div>

	<!-- Editar info -->
	<div class="login-page painel-edit">

		<div class="guia-painel">
			
			<div class="div-painel gira-img home-guia">

				<img alt="Voltar icon" src="<?php echo BASE_URL; ?>assets/images/arrow.svg">

				<p>voltar</p>

			</div>

		</div>

		<div class="buscar">	

			<img alt="User" src="<?php echo BASE_URL; ?>assets/images/user_white.svg">
			
			<p>Edite ou veja suas informações sempre que precisar.</p>

		</div>

		<form enctype="multipart/form-data" class="caixa-form register-form" method="POST" autocomplete="off" id="form_edit">

			<div class="usuario">
				
				<div class="mecanico">
				
					<img id="altera-img" alt="Usuário: Mark Zuckeberg" src="<?php echo BASE_URL; ?>assets/images/IMG-20200206-WA0016.jpg">

					<label for="imagem-perfil" class="edit-foto">
							
						<img title="Mudar foto de perfil" alt="Camera icon" src="<?php echo BASE_URL; ?>assets/images/camera.svg">	

					</label>

				</div>

			</div>

			<input type="text" name="nome" placeholder="SEU NOME">

			<input type="text" name="cep" placeholder="SEU CEP">

			<input type="text" name="caixa_postal" placeholder="CAIXA POSTAL">

			<input type="text" name="telefone" placeholder="TELEFONE">

			<input id="endereco" type="text" name="endereco" placeholder="SEU ENDEREÇO">

			<input type="file" style="display: none;" name="imagem-perfil" id="imagem-perfil">

			<button type="submit">SALVAR ALTERAÇÕES</button>

		</form>

	</div>