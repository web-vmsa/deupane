
	<script type="text/javascript">
		$(document).ready(function(){

			// Raiz
			var environment = "development";

			if (environment == "development") {
				var raiz = "http://localhost/deupane.com.br/";
			} else {
				raiz = "http://localhost/deupane.com.br/";
			}

			$(".convite").hide();
			$(".convite-entregue").hide();

			$(".decline").on("click", function(){

				$(".convite-recusado").fadeOut(function(){

					window.location.href="<?php echo BASE_URL; ?>";

				});

			});

			// Fica verificando o status do convite
			function loop_verifica(){

				var ip_cliente = $("#ip_cliente").val();

				$.ajax({
					type:'POST',
					url:raiz+'ajax/verifica_job',
					data:{ip_cliente:ip_cliente},
					success:function(result){
						if (result == 1) {

							// code...

						} else if(result == 0) {

							$(".convite").fadeOut(function(){

								$(".convite-recusado").fadeIn(function(){

								});

							});

						} else if(result == 2) {

							$(".convite").fadeOut(function(){

								$(".convite-aceito").fadeIn().delay(10000).fadeOut(function(){

									window.location.href="<?php echo BASE_URL; ?>cliente/avaliacao/";

								});

							});

						}
					}
				});
				
			}

			setInterval(loop_verifica, 3000);

			$(".confirm").on("click", function(){

				$(".busca").fadeOut(function(){

					$(".convite").fadeIn(function(){

						/*
						$(".convite-aceito").fadeIn().delay(10000).fadeOut(function(){

							window.location.href="<?php echo BASE_URL; ?>cliente/avaliacao/";

						});
						*/

						var id_usuario = <?php echo $verifica['id']; ?>;
						var ip_cliente = $("#ip_cliente").val();
						var latitude = "51,50000000";
						var longitude = "-0,10000000";

						$.ajax({
							type:'POST',
							url:raiz+'ajax/set_trabalho',
							data:{id_usuario:id_usuario, ip_cliente:ip_cliente, latitude:latitude, longitude:longitude},
							success:function(result){
								// code...
							}
						});

						//$(".convite-recusado").fadeIn();

					});

				});

			});

		});
	</script>

	<!-- Ip do cliente -->
	<input type="hidden" id="ip_cliente" name="ip_cliente" value="<?php echo $ip_cliente; ?>">

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

					<?php if($avaliacao['t'] >= 5): ?>
						
					<img src="<?php echo BASE_URL; ?>assets/images/star.svg">

					<?php endif; ?>

					<?php if($avaliacao['t'] >= 20): ?>

					<img src="<?php echo BASE_URL; ?>assets/images/star.svg">

					<?php endif; ?>

					<?php if($avaliacao['t'] >= 45): ?>
					<img src="<?php echo BASE_URL; ?>assets/images/star.svg">

					<?php endif; ?>

				</div>

				<?php if($avaliacao['t'] >= 45): ?>

				<p>3,0</p>

				<?php elseif($avaliacao['t'] >= 20): ?>

				<p>2,0</p>

				<?php elseif($avaliacao['t'] >= 5): ?>

				<p>1,0</p>

				<?php endif; ?>

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
				
					<img alt="Usuário: <?php echo $verifica['nome']; ?>" src="<?php echo BASE_URL; ?>users/images/<?php echo $verifica['foto']; ?>">

				</div>

			</div>

			<p><?php echo $verifica['nome']; ?></p>

			<div class="botao decline"><p>SAIR</p></div>

		</div>

	</div>