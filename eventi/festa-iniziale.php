<!doctype html>
<html lang="it">
<head>

<!-- Meta Tags ------------------------------------------------------------- -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- Title, Description and Author ----------------------------------------- -->
	<title>Amichiamoci | Festa Iniziale</title>
	<meta name="description" content="Informazioni sula festa iniziale">
	<meta name="author" content="Leonardo Puccini">

<!-- Open Graph ------------------------------------------------------------ -->
	<meta property="og:title" content="Amichiamoci | Festa Iniziale">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://www.amichiamoci.it/eventi/festa-iniziale.php/">
	<meta property="og:description" content="Informazioni sulla festa iniziale">
	<meta property="og:image" content="../assets/icons/favicon.png">

<!-- Icon ------------------------------------------------------------------ -->
	<link rel="icon" href="../assets/icons/favicon.png">
	<link rel="apple-touch-icon" href="../assets/icons/favicon.png">

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
	<link rel="stylesheet" href="../assets/css/main.css">

</head>

<body>

<div id="top"></div>
<a class="scroll-top" href="#top">
	<i class="fa-solid fa-caret-up"></i>
	<p>TOP</p>
</a>

<!-- Header ---------------------------------------------------------------- -->
	<header>
		<a class="logo" href="../index.php">
			<img src="../assets/icons/logo.png">
		</a>

		<ul class="navbar">
			<li><a href="#event">Festa Iniziale</a></li>
			<li><a class="button rounded" href="#contacts">Contatti</a></li>
		</ul>

		<div class="hamburger">
			<span></span>
			<span></span>
		</div>
	</header>

<div class="separator"></div>

<!-- Cover ----------------------------------------------------------------- -->
	<div class="cover small">
		<div class="cover-image parallax">
			<div class="filter"></div>
		</div>
		<div class="cover-content">
			<h1>Amichiamoci</h1>
			<h3>Prendete in mano la vostra vita e fatene un capolavoro!</h3>
			<p>
				Manifestazione annuale per giovani e giovanissimi della
				diocesi di Livorno.
			</p>
		</div>
	</div>

<!-- Event ----------------------------------------------------------------- -->
	<section id="event" class="event overlap">
		<div class="overlap-box">
			<div class="overlap-image">
				<img src="../assets/images/eventi/festa-iniziale.jpg">
			</div>
			<div class="overlap-content">
				<h2>Festa Iniziale</h2>
				<!-- TODO: Aggiornare la pagina e inserire il volantino -->
				<p>
	                Lo staff sta ancora lavorando all'organizzazione della
					nuova edizione di Amichiamoci 2023. Seguici sui nostri
					social per rimanere aggiornato su tutte le notizie che
					usciranno!
				</p>
				<!--
				<a class="button" href="../assets/docs/Volantino Festa Iniziale.pdf">
					Volantino
					<i class="fa-solid fa-download"></i>
				</a>
				-->
			</div>
		</div>
	</section>

<!-- Footer ---------------------------------------------------------------- -->
	<footer id="contacts">
		<div class="grid">
			<div class="column col-30">
				<h4>Social</h4>
				<div class="social">
					<a target="_blank" href="https://www.facebook.com/AmichiamociLivorno/">
						<i class="fa-brands fa-facebook-f"></i>
					</a>
					<a target="_blank" href="https://www.instagram.com/amichiamoci_/">
						<i class="fa-brands fa-instagram"></i>
					</a>
					<a target="_blank" href="https://www.youtube.com/channel/UC-Ue0hmZJq--HVkd2PokLaA/">
						<i class="fa-brands fa-youtube"></i>
					</a>
				</div>
				<img src="../assets/icons/logo.png">
			</div>
			<div class="column col-30">
				<h4>Link utili</h4>
				<div class="links">
					<a target="_blank" href="https://goo.gl/maps/6tVRarS1NX7SLEF4A">
						<i class="fa-solid fa-location-dot"></i>
						Livorno (LI), Italia
					</a>
					<a href="mailto:info@amichiamoci.it">
						<i class="fa-solid fa-envelope"></i>
						info@amichiamoci.it
					</a>
					<div class="legal">
						<a href="../crediti.php">Crediti</a>
						<a href="../privacy.php">Privacy</a>
						<a href="../admin">Admin</a>
					</div>
				</div>
			</div>
			<div class="column col-40">
				<div id="leaflet-map"></div>
			</div>
		</div>
	</footer>
	<div class="bottom-bar">
	    <p>&copy; Amichiamoci 2023</p>
	</div>

<!-- Leaflet --------------------------------------------------------------- -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.3/leaflet.js"></script>

<!-- Custom Scripts -------------------------------------------------------- -->
	<script src="../assets/js/main.js"></script>

</body>
</html>