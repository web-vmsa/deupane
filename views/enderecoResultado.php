	
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
	
	<script type="text/javascript">
		$(document).ready(function(){

			$(".confirm-endereco").on("click", function(){

				$(".busca").fadeOut(function(){

					window.location.href="<?php echo BASE_URL; ?>usuario/edit";

				});

			});

			$(".decline-endereco").on("click", function(){

				$(".busca").fadeOut(function(){

					window.location.href="<?php echo BASE_URL; ?>usuario/endereco";

				});

			});

		});
	</script>

	<!-- HTML -->
	<div class="busca resultado">
		
		<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div></div>

		<div class="buscar">	

			<img alt="location-pin" src="<?php echo BASE_URL; ?>assets/images/location-pin.svg">
			
			<p>Avenida Leonardo Malcher, rua Malvada - N. 1234 / CEP 1234567-8</p>

		</div>

		<div class="actions-endereco">
			
			<img alt="Mapa-icon" src="<?php echo BASE_URL; ?>assets/images/map.svg">

			<p>Você mora aqui mesmo?</p>

			<div class="botoes-endereco">
				
				<div class="confirm-endereco">
					<p>SIM, MORO</p>
				</div>

				<div class="decline-endereco">
					<p>NÃO MORO</p>
				</div>

			</div>

		</div>

	</div>