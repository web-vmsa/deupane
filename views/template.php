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
	
	<?php $this->loadViewInTemplate($viewName, $viewData); ?>
	
</body>
</html>