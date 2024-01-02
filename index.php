<!doctype html>
<html lang="it">
<head>

<!-- Meta Tags ------------------------------------------------------------- -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- Title, Description and Author ----------------------------------------- -->
	<title>Amichiamoci | Home</title>
	<meta name="description" content="Homepage del sito di Amichiamoci">
	<meta name="author" content="Leonardo Puccini">

<!-- Open Graph ------------------------------------------------------------ -->
	<meta property="og:title" content="Amichiamoci | Home">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://www.amichiamoci.it/index.php/">
	<meta property="og:description" content="Homepage del sito di Amichiamoci">
	<meta property="og:image" content="assets/icons/favicon.png">

<!-- Icon ------------------------------------------------------------------ -->
	<link rel="icon" href="assets/icons/favicon.png">
	<link rel="apple-touch-icon" href="assets/icons/favicon.png">

<!-- Leaflet --------------------------------------------------------------- -->
	<link rel="stylesheet" href="assets/leaflet/leaflet.css">

<!-- Font Awesome ---------------------------------------------------------- -->
	<link rel="stylesheet" href="assets/css/fontawesome.css">

<!-- Google Fonts ---------------------------------------------------------- -->
	<link rel="stylesheet" href="assets/css/fonts.css">

<!-- Custom Stylesheet ----------------------------------------------------- -->
	<link rel="stylesheet" href="assets/css/main.css">

</head>

<body>

<div id="top"></div>
<a class="scroll-top" href="#top">
	<i class="fa-solid fa-caret-up"></i>
	<p>TOP</p>
</a>

<!-- Header ---------------------------------------------------------------- -->
	<header>
		<a class="logo" href="index.php">
			<img src="assets/icons/logo.png">
		</a>

		<ul class="navbar">
			<li><a href="#about">Chi siamo</a></li>
			<li><a href="#sports">Tornei</a></li>
			<li><a href="#events">Eventi</a></li>
			<li><a href="#logos">Loghi</a></li>
			<li><a class="button rounded" href="#contacts">Contatti</a></li>
		</ul>

		<div class="hamburger">
			<span></span>
			<span></span>
		</div>
	</header>

<div class="separator"></div>

<!-- Cover ----------------------------------------------------------------- -->
	<div class="cover">
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
			<a class="button" href="#about">Scopri di pi&ugrave;</a>
		</div>
	</div>

<!-- About ----------------------------------------------------------------- -->
	<section id="about" class="about overlap">
		<div class="overlap-box">
			<div class="overlap-image">
				<img src="assets/images/staff.jpg">
			</div>
			<div class="overlap-content">
				<h2>Chi siamo</h2>
				<p>
					"Amichiamoci" è una manifestazione che comprende momenti
					di preghiera, tornei sportivi ed eventi di vario genere.
					Iniziata nel 2006, la manifestazione si svolge ogni anno,
					nel mese di settembre.
				</p>
				<a class="button" href="chi-siamo.php">
					Leggi tutto
				</a>
			</div>
		</div>
	</section>

<!-- Banner ---------------------------------------------------------------- -->
	<section class="banner fullscreen">
		<!-- TODO: trovare un'immagine e togliere la classe "no-image" -->
		<div class="banner-image no-image parallax">
			<!-- <div class="filter"></div> -->
		</div>
		<div class="banner-content">
			<h4>
				Un giovane che non &egrave; capace di sognare &egrave;
				recintato in se stesso.
			</h4>
			<h6>Papa Francesco</h6>
		</div>
	</section>

<!-- Sports ---------------------------------------------------------------- -->
	<section id="sports" class="sports cards">
		<div class="grid">
			<div class="column col-100">
				<h2>Tornei</h2>
			</div>
			<div class="column col-100">
				<div class="grid">
					<div class="card column col-30">
						<a class="card-image" href="tornei/calcio.php">
							<img src="assets/images/tornei/calcio.jpg">
							<span></span>
						</a>
						<div class="card-content">
							<h3>Calcio</h3>
							<p>
								Calcio a 8 e calcio a 5.
							</p>
							<a class="button" href="tornei/calcio.php">
								Scopri di pi&ugrave;
							</a>
						</div>
					</div>
					<div class="card column col-30">
						<a class="card-image" href="tornei/basket.php">
							<img src="assets/images/tornei/basket.jpg">
							<span></span>
						</a>
						<div class="card-content">
							<h3>Basket</h3>
							<p>
								Pallacanestro mista 3vs3.
							</p>
							<a class="button" href="tornei/basket.php">
								Scopri di pi&ugrave;
							</a>
						</div>
					</div>
					<div class="card column col-30">
						<a class="card-image" href="tornei/pallavolo.php">
							<img src="assets/images/tornei/pallavolo.jpg">
							<span></span>
						</a>
						<div class="card-content">
							<h3>Pallavolo</h3>
							<p>
								Pallavolo mista 6vs6.
							</p>
							<a class="button" href="tornei/pallavolo.php">
								Scopri di pi&ugrave;
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<!-- Banner ---------------------------------------------------------------- -->
	<section class="banner fullscreen">
		<!-- TODO: trovare un'immagine e togliere la classe "no-image" -->
		<div class="banner-image no-image parallax">
			<!-- <div class="filter"></div> -->
		</div>
		<div class="banner-content">
			<h4>
				Il tempo che oggi stiamo vivendo non ha bisogno di
				giovani-divano, ma di giovani con le scarpe.
			</h4>
			<h6>Papa Francesco</h6>
		</div>
	</section>

<!-- Events ---------------------------------------------------------------- -->
	<section id="events" class="events cards">
		<div class="grid">
			<div class="column col-100">
				<h2>Eventi</h2>
			</div>
			<div class="grid">
				<div class="card column col-30">
					<a class="card-image" href="eventi/festa-iniziale.php">
						<img src="assets/images/eventi/festa-iniziale.jpg">
						<span></span>
					</a>
					<div class="card-content">
						<h3>Festa Iniziale</h3>
						<p>
							Una festa per inaugurare la nuova edizione di
							Amichiamoci.
						</p>
						<a class="button" href="eventi/festa-iniziale.php">
							Scopri di pi&ugrave;
						</a>
					</div>
				</div>
				<div class="card column col-30">
					<a class="card-image" href="eventi/caccia-al-tesoro.php">
						<img src="assets/images/eventi/caccia-al-tesoro.jpg">
						<span></span>
					</a>
					<div class="card-content">
						<h3>Caccia al Tesoro</h3>
						<p>
							Intrigante caccia (a premi) per le vie della
							citt&agrave;.
						</p>
						<a class="button" href="eventi/caccia-al-tesoro.php">
							Scopri di pi&ugrave;
						</a>
					</div>
				</div>
				<div class="card column col-30">
					<a class="card-image" href="eventi/veglia-di-preghiera.php">
						<img src="assets/images/eventi/veglia-di-preghiera.jpg">
						<span></span>
					</a>
					<div class="card-content">
						<h3>Veglia di Preghiera</h3>
						<p>
							Un momento di preghiera e di riflessione
							insieme.
						</p>
						<a class="button" href="eventi/veglia-di-preghiera.php">
							Scopri di pi&ugrave;
						</a>
					</div>
				</div>
				<div class="column col-100">
					<a class="button big rounded" href="eventi.php">
						Altri eventi
					</a>
				</div>
			</div>
		</div>
	</section>

<!-- Logos ----------------------------------------------------------------- -->
	<section id="logos" class="logos fullscreen">
		<div class="grid">
			<div class="column col-100">
				<h2>Loghi</h2>
			</div>
			<a id="logo-1" class="logo-box column col-20" href="loghi.php">
				<img src="assets/images/loghi/2016.jpg">
				<span class="slogan big">2016</span>
			</a>
			<a id="logo-2" class="logo-box column col-20" href="loghi.php">
				<img src="assets/images/loghi/2017.jpg">
				<span class="slogan big">2017</span>
			</a>
			<a id="logo-3" class="logo-box column col-20" href="loghi.php">
				<img src="assets/images/loghi/2018.jpg">
				<span class="slogan big">2018</span>
			</a>
			<a id="logo-4" class="logo-box column col-20" href="loghi.php">
				<img src="assets/images/loghi/2019.jpg">
				<span class="slogan big">2019</span>
			</a>
			<a id="logo-5" class="logo-box column col-20" href="loghi.php">
				<img src="assets/images/loghi/2022.jpg">
				<span class="slogan big">2022</span>
			</a>
			<div class="column col-100">
				<a class="button big rounded" href="loghi.php">
					Mostra tutti
				</a>
			</div>
		</div>
	</section>

<!-- Contacts -------------------------------------------------------------- -->
	<section id="contacts" class="contacts overlap">
		<div class="overlap-box">
			<div class="overlap-image no-image"></div>
			<div class="overlap-content no-image">
				<h2>Scrivici</h2>
				<p>Ti risponderemo appena possibile.</p>
				
				<?php
					if (isset($_GET["mail_result"]) == true)
					{
						if ($_GET["mail_result"] == "success")
						{
							echo "<p class='mail-result success'>La mail " .
								 "&egrave; stata inviata con successo.</p>";
						}
						else
						{
							echo "<p class='mail-result failure'>Siamo "   .
								 "spiacenti, ma si &egrave; verificato "   .
								 "un errore durante l'invio della mail. "  .
								 "Ti consigliamo di riprovare pi&ugrave; " .
								 "tardi.</p>";
						}
					}
				?>
				
				<form action="mail.php" method="post">
					<label>Nome e Cognome</label>
					<input type="text" name="user_name" required>
					<label>Indirizzo E-mail</label>
					<input type="email" name="user_mail" required>
					<label>Messaggio</label>
					<textarea name="user_msg" rows="4" required></textarea>
					<div class="captcha-wrapper">
                        <div class="captcha-box">
                            <div class="captcha">
								<canvas width="144" height="48"></canvas>
                            </div>
                            <div class="reload">
                            	<i class="fas fa-redo-alt"></i>
                            </div>
                        </div>
                        <div class="captcha-input">
                            <input type="text" placeholder="Captcha" maxlength="6" spellcheck="false" required>
                        </div>
                    </div>
                    <div class="status-text hide">Captcha errato! Riprova</div>
					<input class="button" value="Invia" type="submit" name="user_btn">
				</form>
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
				<img src="assets/icons/logo.png">
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
						<a href="crediti.php">Crediti</a>
						<a href="privacy.php">Privacy</a>
						<a href="admin">Admin</a>
					</div>
				</div>
			</div>
			<div class="column col-40">
				<div id="leaflet-map"></div>
			</div>
		</div>
	</footer>
	<div class="bottom-bar">
		<p>&copy; Amichiamoci 2024</p>
	</div>

<!-- Leaflet --------------------------------------------------------------- -->
	<script src="assets/leaflet/leaflet.js"></script>

<!-- Custom Scripts -------------------------------------------------------- -->
	<script src="assets/js/main.js"></script>

</body>
</html>
