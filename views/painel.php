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
<!DOCTYPE html>
<html>
<head>
	<!-- Meta tags -->
	<title id="title">(2) DeuPane - Procure mecânicos na sua região!</title>
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
	<!-- JQuery da Página -->
	<script type="text/javascript">
		
	</script>

	<!-- HTML -->
	<div class="painel">
		
		<div class="guia-painel">

			<div class="div-painel gira-img lado-sair sair-guia">

				<img alt="Voltar icon" src="<?php echo BASE_URL; ?>assets/images/arrow_red.svg">

				<p>sair</p>

			</div>
			
			<div class="div-painel editar-guia">

				<p>editar</p>

				<img alt="Voltar icon" src="<?php echo BASE_URL; ?>assets/images/arrow.svg">

			</div>

		</div>

		<div class="logo">
			
			<div class="mecanico">

				<?php if($usuario['foto'] == ""): ?>
				
				<img alt="Usuário: <?php echo $usuario['nome']; ?>" src="<?php echo BASE_URL; ?>users/images/unnamed.png">

				<?php else: ?>

				<img alt="Usuário: <?php echo $usuario['nome']; ?>" src="<?php echo BASE_URL; ?>users/images/<?php echo $usuario['foto']; ?>">

				<?php endif; ?>

			</div>

		</div>

		<?php if($usuario['nome'] == ""): ?>

		<h3>Sem nome</h3>

		<?php else: ?>

		<h3><?php echo $usuario['nome']; ?></h3>

		<?php endif; ?>

		<a href="#">vmsa03@gmail.com</a>

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

		<div class="notificacoes">

		<?php if($usuario['nome'] == "" && $usuario['foto'] == ""): ?>

			<a href="">

				<div class="notificacao notificacao-vermelha" data-redirect="edit">
					
					<div class="tipo-noti"><img alt="Notificação" src="<?php echo BASE_URL; ?>assets/images/info.svg"></div>

					<p>Alerta! termine de preencher os seus dados para poder ser achado pelos clientes.</p>

				</div>

			</a>

		<?php endif; ?>

		</div>

	</div>
</body>
</html>