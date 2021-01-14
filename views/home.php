
	<!-- jQuery Local -->
	<script type="text/javascript">
		$(document).ready(function(){

			$(".busca").hide();

			$(".logar-home").hide();

			$(".finding").hide();

			$(".abre").delay(5000).fadeOut(function(){

				$(".busca").show();

				$(".logar-home").show();

				$(".logar-home").on("click", function(){

					$(".busca").fadeOut(function(){

						window.location.href="<?php echo BASE_URL; ?>home/login";

					});

				});

				$("#find").on("click", function(){

					$(".logar-home").hide();

					$(".busca").fadeOut(function(){

						$(".finding").fadeIn().delay(5000).fadeOut(function(){

							window.location.href="<?php echo BASE_URL; ?>cliente";

						});

					});

				});

			});

		});
	</script>

	<!-- HTML -->
	<div class="logar-home">
		
		<div class="bolinha"></div>

		<p>Login</p>

	</div>

	<!-- Tela inicial -->
	<div class="abre">
		
		<div class="logo"><img alt="Logo" src="<?php echo BASE_URL; ?>assets/images/icon-logo-blue.svg"></div>

		<h2>DeuPane</h2>

		<h3>Deu Pane? Resolva seu problema!</h3>

		<img src="<?php echo BASE_URL; ?>assets/images/loading.gif">

	</div>

	<!-- Página de busca -->
	<div class="busca">
		
		<div class="logo"><img alt="Logo" src="<?php echo BASE_URL; ?>assets/images/icon-logo.svg"></div>

		<h2>DeuPane</h2>

		<h3>Deu Pane? Resolva seu problema!</h3>

		<div class="buscar">	

			<div class="tooltip">
				<div class="tooltip-text"><p>Clique neste ícone para saber onde você está!</p></div>
				<img alt="Triangle" src="<?php echo BASE_URL; ?>assets/images/triangle.svg">
			</div>

			<img id="find" alt="location-pin" src="<?php echo BASE_URL; ?>assets/images/location-pin.svg">
			
			<p>Nós descobrimos sua localização e procuramos um mecânico para você!</p>

		</div>

	</div>

	<!-- Loading -->
	<div class="finding">
		
		<img alt="location-pin-blue" src="<?php echo BASE_URL; ?>assets/images/location-pin-blue.svg">

		<div class="buscar">	

			<img alt="loading-gif" src="<?php echo BASE_URL; ?>assets/images/loading.gif">
			
			<p>Descobrindo sua localização e procurando por mecânicos</p>

		</div>

	</div>