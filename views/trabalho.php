
	<script type="text/javascript">
		$(document).ready(function(){

			$(".convite-entregue").hide();

			$(".confirm-endereco").on("click", function(){

				$(".busca").fadeOut(function(){

					$(".convite-entregue").fadeIn().delay(10000).fadeOut(function(){

						window.location.href="<?php echo BASE_URL; ?>usuario/trabalhoFinalizado";

					});

				});

			});

			$(".decline-endereco").on("click", function(){

				$(".busca").fadeOut(function(){

					window.location.href="<?php echo BASE_URL; ?>usuario";

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
			
			<img alt="Mapa-icon" src="<?php echo BASE_URL; ?>assets/images/invitation_black.svg">

			<p>Você pode fazer este trabalho?</p>

			<div class="botoes-endereco">
				
				<div class="confirm-endereco">
					<p>SIM</p>
				</div>

				<div class="decline-endereco">
					<p>NÃO</p>
				</div>

			</div>

		</div>

	</div>

	<!-- Convite aceito -->
	<div class="convite-entregue convite-aceito">

		<div class="caixa-resultado">
			
			<img alt="Convite aceito" src="<?php echo BASE_URL; ?>assets/images/accept.svg">

			<h3>Convite aceito</h3>

		</div>
		
		<div class="buscar aceito">	

			<img alt="invitation-svg" src="<?php echo BASE_URL; ?>assets/images/invitation.svg">
			
			<p>Vá para a Aveninda Leonardo Malcher, rua 312</p>

		</div>

		<div class="actions">

			<div class="usuario">
				
				<div class="mecanico">
				
					<img alt="Usuário: Mark Zuckeberg" src="<?php echo BASE_URL; ?>assets/images/IMG-20200206-WA0016.jpg">

				</div>

			</div>

			<p>Mark Zuckeberg</p>

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