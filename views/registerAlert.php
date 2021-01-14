
	<!-- jQuery Local -->
	<script type="text/javascript">
		$(document).ready(function(){

			$("#email").on("click", function(){

				$(".busca").fadeOut(function(){

					window.location.href="https://mail.google.com/mail";

				});

			});

		});
	</script>

	<!-- HTML -->
	<div class="busca">
		
		<div class="logo"><img alt="Logo" src="<?php echo BASE_URL; ?>assets/images/icon-logo.svg"></div>

		<h2>DeuPane</h2>

		<h3>Deu Pane? Resolva seu problema!</h3>

		<div class="buscar">	

			<div class="tooltip">
				<div class="tooltip-text"><p>Clique neste ícone para ir ao seu e-mail!</p></div>
				<img alt="Triangle" src="<?php echo BASE_URL; ?>assets/images/triangle.svg">
			</div>

			<img id="email" alt="Email icon" src="<?php echo BASE_URL; ?>assets/images/email.svg">
			
			<p>Para finalizar seu cadastro verifique o seu e-mail.</p>

		</div>

	</div>