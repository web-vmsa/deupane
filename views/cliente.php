
	<script type="text/javascript">
		$(document).ready(function(){

			$(".convite").hide();
			$(".convite-entregue").hide();

			$(".decline").on("click", function(){

				$(".convite-recusado").fadeOut(function(){

					window.location.href="<?php echo BASE_URL; ?>";

				});

			});

			$(".confirm").on("click", function(){

				$(".busca").fadeOut(function(){

					$(".convite").fadeIn().delay(10000).fadeOut(function(){

						$(".convite-aceito").fadeIn().delay(10000).fadeOut(function(){

							window.location.href="<?php echo BASE_URL; ?>cliente/avaliacao/";

						});

						//$(".convite-recusado").fadeIn();

					});

				});

			});

		});
	</script>

	<!-- HTML -->
	<div class="busca resultado">
		
		<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div></div>

		<?php if($verifica == true): ?>

			<div class="buscar">	

		<?php else: ?>

			<div class="buscar recusado">

		<?php endif; ?>

			<img alt="location-pin" src="<?php echo BASE_URL; ?>assets/images/location-pin.svg">
			
			<p>Avenida Leonardo Malcher, rua Malvada - N. 1234 / CEP 1234567-8</p>

		</div>

		<div class="actions">
			
			<?php if($verifica == true): ?>

			<div id="n-resultados" class="n-resultados"><p>1</p></div>

			<p>Mecânico encontrado na sua região, deseja solicitá-lo?</p>

			<div class="botao confirm"><p>CONFIRMAR</p></div>

			<?php else: ?>

			<div id="n-resultados" class="n-resultados"><p>0</p></div>

			<p>Nenhum mecânico encontrado! Lamentamos o ocorrido.</p>

			<div class="botao decline"><p>SAIR</p></div>

			<?php endif; ?>

		</div>

	</div>

	<!-- Enviando convite -->
	<div class="convite">
		
		<div class="logo">
			
			<div class="mecanico">
				
				<img alt="Usuário: <?php echo $verifica['nome']; ?>" src="<?php echo BASE_URL; ?>users/images/<?php echo $verifica['foto']; ?>">

			</div>

		</div>

		<h3><?php echo $verifica['nome']; ?></h3>

		<div class="buscar">	

			<img alt="loading-gif" src="<?php echo BASE_URL; ?>assets/images/loading.gif">
			
			<p>Esperando <?php echo $verifica['nome']; ?> aceitar o seu convite &#128540;</p>

		</div>

	</div>

	<!-- Resultado: Convite aceito -->
	<div class="convite-entregue convite-aceito">

		<div class="caixa-resultado">
			
			<img alt="Convite aceito" src="<?php echo BASE_URL; ?>assets/images/accept.svg">

			<h3>Aceito</h3>

		</div>
		
		<div class="buscar aceito">	

			<img alt="invitation-svg" src="<?php echo BASE_URL; ?>assets/images/invitation.svg">
			
			<p>Seu convite foi aceito, <?php echo $verifica['nome']; ?> está a caminho!</p>

		</div>

		<div class="actions">

			<div class="usuario">
				
				<div class="mecanico">
				
					<img alt="Usuário: <?php echo $verifica['nome']; ?>" src="<?php echo BASE_URL; ?>users/images/<?php echo $verifica['foto']; ?>">

				</div>

			</div>

			<p><?php echo $verifica['nome']; ?></p>

			<div class="nota-geral">
				
				<div class="stars">
					
					<img src="<?php echo BASE_URL; ?>assets/images/star.svg">
					<img src="<?php echo BASE_URL; ?>assets/images/star.svg">
					<img src="<?php echo BASE_URL; ?>assets/images/star.svg">

				</div>

				<p>5,0</p>

			</div>

		</div>

	</div>

	<!-- Resultado: Convite Recusado -->
	<div class="convite-entregue convite-recusado">

		<div class="caixa-resultado h3-vermelho">
			
			<img alt="Convite recusado" src="<?php echo BASE_URL; ?>assets/images/decline.svg">

			<h3>Recusado</h3>

		</div>
		
		<div class="buscar recusado">	

			<img alt="invitation-svg" src="<?php echo BASE_URL; ?>assets/images/invitation.svg">
			
			<p>Seu convite foi recusado, <?php echo $verifica['nome']; ?> não está a caminho!</p>

		</div>

		<div class="actions">

			<div class="usuario">
				
				<div class="mecanico">
				
					<img alt="Usuário: <?php echo $verifica['nome']; ?>" src="<?php echo BASE_URL; ?>users/images/<?php echo $verifica['nome']; ?>">

				</div>

			</div>

			<p><?php echo $verifica['nome']; ?></p>

			<div class="botao decline"><p>SAIR</p></div>

		</div>

	</div>