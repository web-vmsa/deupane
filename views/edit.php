	
	<?php
	
		if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
			# code...
		} else {
			echo '
				<script type="text/javascript">
					window.location.href="'.BASE_URL.'";
				</script>
			';
		}

	?>
	
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

					<?php if($usuario['foto'] == ""): ?>
				
					<img id="altera-img" alt="Usuário: <?php echo $usuario['nome']; ?>" src="<?php echo BASE_URL; ?>users/images/unnamed.png">

					<?php else: ?>

					<img id="altera-img" alt="Usuário: <?php echo $usuario['nome']; ?>" src="<?php echo BASE_URL; ?>users/images/<?php echo $usuario['foto']; ?>">

					<?php endif; ?>

					<label for="imagem-perfil" class="edit-foto">
							
						<img title="Mudar foto de perfil" alt="Camera icon" src="<?php echo BASE_URL; ?>assets/images/camera.svg">	

					</label>

				</div>

			</div>

			<input type="text" name="nome" placeholder="SEU NOME" value="<?php echo $usuario['nome']; ?>">

			<input type="text" name="cep" placeholder="SEU CEP" value="<?php echo $usuario['cep']; ?>">

			<input type="text" name="caixa_postal" placeholder="CAIXA POSTAL" value="<?php echo $usuario['caixa_postal']; ?>">

			<input type="text" name="telefone" placeholder="TELEFONE" value="<?php echo $usuario['telefone']; ?>">

			<input id="endereco" type="text" name="endereco" placeholder="SEU ENDEREÇO">

			<input type="file" style="display: none;" name="imagem-perfil" id="imagem-perfil">

			<button type="submit">SALVAR ALTERAÇÕES</button>

		</form>

	</div>