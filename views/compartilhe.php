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
	<!-- jQuery Local -->
	<script type="text/javascript">
		$(document).ready(function(){

			$(".busca").hide();

			$(".logar-home").hide();

			$(".finding").hide();

			$(".abre").delay(5000).fadeOut(function(){

				$(".busca").show();

				$(".logar-home").show();

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

		<h3>Compartilhe nosso o App!</h3>

		<div class="share">
			
			<a href="https://api.whatsapp.com/send?text=<?php echo BASE_URL; ?>"><img alt="Compartilhe no Whatsapp!" src="<?php echo BASE_URL; ?>assets/images/whatsapp.svg"></a>
			<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo BASE_URL; ?>"><img alt="Compartilhe no Linkedin!" src="<?php echo BASE_URL; ?>assets/images/linkedin.svg"></a>
			<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo BASE_URL; ?>"><img alt="Compartilhe no Facebook!" src="<?php echo BASE_URL; ?>assets/images/facebook.svg"></a>

		</div>

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
</body>
</html>