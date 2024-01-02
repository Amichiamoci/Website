<?php $DOMAIN = $_SERVER['HTTP_HOST']; ?>
<!doctype html>
<html lang="it">
<head>
<!-- Meta Tags ------------------------------------------------------------- -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- Title, Description and Author ----------------------------------------- -->
	<title>Amichiamoci | Errore! Pagina non trovata</title>
	<meta name="description" content="Pagina di error 404">
	<meta name="author" content="Leonardo Puccini">

<!-- Open Graph ------------------------------------------------------------ -->
	<meta property="og:title" content="Amichiamoci | Errore! Pagina non trovata">
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?= "https://$DOMAIN/not-found.php" ?>">
	<meta property="og:description" content="Pagina di error 404">
	<meta property="og:image" content="assets/icons/favicon.png">

<!-- Icon ------------------------------------------------------------------ -->
	<link rel="icon" href="<?= "https://$DOMAIN/assets/icons/favicon.png" ?>">
	<link rel="apple-touch-icon" href="<?= "https://$DOMAIN/assets/icons/favicon.png" ?>">

<!-- Leaflet --------------------------------------------------------------- -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.3/leaflet.css">

<!-- Font Awesome ---------------------------------------------------------- -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

<!-- Roboto ---------------------------------------------------------------- -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap">

<!-- Roboto Serif ---------------------------------------------------------- -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">

<!-- Roboto Slab ----------------------------------------------------------- -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap">

<!-- Custom Stylesheet ----------------------------------------------------- -->
	<link rel="stylesheet" href="<?= "https://$DOMAIN/assets/css/main.css" ?>">

</head>

<body>

<!-- Cover ----------------------------------------------------------------- -->
	<div class="cover error">
		<div class="cover-image parallax">
			<div class="filter"></div>
		</div>
		<div class="cover-content">
			<h1>Errore 404</h1>
			<h3>
				Siamo spiacenti, la pagina che stai cercando non &egrave;
				stata trovata!
			</h3>
			<a class="button" href="<?= "https://$DOMAIN/index.php" ?>">Homepage</a>
		</div>
	</div>

<!-- Custom Scripts -------------------------------------------------------- -->
	<script src="<?= "https://$DOMAIN/assets/js/main.js" ?>"></script>

</body>
</html>