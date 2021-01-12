<!DOCTYPE html>
<html>
<head>
	<!-- Meta tags -->
	<title>DeuPane - Procure mecânicos na sua região!</title>
	<meta name="title" content="DeuPane - Procure por mecânicos na sua região">
	<meta name="description" content="O DeuPane é uma aplicação que busca mecânicos na sua região utilizando uma extensa base de dados.">
	<meta name="keywords" content="Mecânicos, problemas no carro, peças de automóvel, pane no carro. ">
	<meta name="robots" content="index, follow">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="Portuguese">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo BASE_URL; ?>">
	<meta property="og:title" content="DeuPane - Procure mecânicos na sua região!">
	<meta property="og:description" content="O DeuPane é uma aplicação que busca mecânicos na sua região utilizando uma extensa base de dados.">
	<meta property="og:image" content="<?php echo BASE_URL; ?>assets/images/deupane-twitter-card.png">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="<?php echo BASE_URL; ?>">
	<meta property="twitter:title" content="DeuPane - Procure mecânicos na sua região!">
	<meta property="twitter:description" content="O DeuPane é uma aplicação que busca mecânicos na sua região utilizando uma extensa base de dados.">
	<meta property="twitter:image" content="<?php echo BASE_URL; ?>assets/images/deupane-twitter-card.png">

	<!-- Favicon -->
	<link rel="icon" href="<?php echo BASE_URL; ?>assets/images/icon-logo-blue.svg" type="image/x-icon" />

	<!-- Css -->
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css">

	<!-- Javascript -->
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
</head>
<body>
	<script type="text/javascript">
		$(document).ready(function(){

			$(".convite").hide();
			$(".convite-entregue").hide();

			$(".decline").on("click", function(){

				$(".convite-recusado").fadeOut(function(){

					window.location.href="http://localhost/deupane.com.br/";

				});

			});

			$(".confirm").on("click", function(){

				$(".busca").fadeOut(function(){

					$(".convite").fadeIn().delay(10000).fadeOut(function(){

						$(".convite-aceito").fadeIn().delay(10000).fadeOut(function(){

							window.location.href="http://localhost/deupane.com.br/cliente/avaliacao/";

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

		<div class="buscar">	

			<img alt="location-pin" src="<?php echo BASE_URL; ?>assets/images/location-pin.svg">
			
			<p>Avenida Leonardo Malcher, rua Malvada - N. 1234 / CEP 1234567-8</p>

		</div>

		<div class="actions">
			
			<div id="n-resultados" class="n-resultados"><p>1</p></div>

			<p>mecânico encontrado na sua região, deseja solicitá-lo?</p>

			<div class="botao confirm"><p>CONFIRMAR</p></div>

		</div>

	</div>

	<!-- Enviando convite -->
	<div class="convite">
		
		<div class="logo">
			
			<div class="mecanico">
				
				<img alt="Usuário: Mark Zuckeberg" src="<?php echo BASE_URL; ?>assets/images/IMG-20200206-WA0016.jpg">

			</div>

		</div>

		<h3>Mark Zuckeberg</h3>

		<div class="buscar">	

			<img alt="loading-gif" src="<?php echo BASE_URL; ?>assets/images/loading.gif">
			
			<p>Esperando Mark aceitar o seu convite &#128540;</p>

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
			
			<p>Seu convite foi aceito, Mark está a caminho!</p>

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

	<!-- Resultado: Convite Recusado -->
	<div class="convite-entregue convite-recusado">

		<div class="caixa-resultado h3-vermelho">
			
			<img alt="Convite recusado" src="<?php echo BASE_URL; ?>assets/images/decline.svg">

			<h3>Recusado</h3>

		</div>
		
		<div class="buscar recusado">	

			<img alt="invitation-svg" src="<?php echo BASE_URL; ?>assets/images/invitation.svg">
			
			<p>Seu convite foi recusado, Mark não está a caminho!</p>

		</div>

		<div class="actions">

			<div class="usuario">
				
				<div class="mecanico">
				
					<img alt="Usuário: Mark Zuckeberg" src="<?php echo BASE_URL; ?>assets/images/IMG-20200206-WA0016.jpg">

				</div>

			</div>

			<p>Mark Zuckeberg</p>

			<div class="botao decline"><p>SAIR</p></div>

		</div>

	</div>
</body>
</html>