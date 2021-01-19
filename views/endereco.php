	
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

	<!-- JQuery da Página -->
	<script type="text/javascript">
		$(document).ready(function(){

			$(".finding").hide();

			$("#find").on("click", function(){

				$(".fundo-cinza").fadeOut(function(){

					$(".finding").fadeIn().delay(5000).fadeOut(function(){

						window.location.href="<?php echo BASE_URL; ?>usuario/enderecoResultado";

					});

				});

			});

		});
	</script>

	<!-- HTML -->
	<div class="fundo-cinza">

		<div class="painel">
			
			<div class="guia-painel">
				
				<div class="div-painel gira-img editar-guia">

					<img alt="Voltar icon" src="<?php echo BASE_URL; ?>assets/images/arrow.svg">

					<p>voltar</p>

				</div>

			</div>

		</div>

		<div class="edit-endereco">
			
			<img id="find" alt="location-pin-blue" src="<?php echo BASE_URL; ?>assets/images/location-pin-blue.svg">

			<h3>Salve seu endereço atual para poder trabalhar.</h3>

		</div>

	</div>

	<!-- Loading -->
	<div class="finding">
		
		<img alt="location-pin-blue" src="<?php echo BASE_URL; ?>assets/images/location-pin-blue.svg">

		<div class="buscar">	

			<img alt="loading-gif" src="<?php echo BASE_URL; ?>assets/images/loading.gif">
			
			<p>Descobrindo sua localização atual, aguarde!</p>

		</div>

	</div>