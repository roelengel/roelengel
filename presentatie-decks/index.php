<?
	require("../util.inc.php");
	$sql = new MySQL_class;
	$sql->Create("$dbname");
	mysql_query( "SET NAMES 'utf8'" );

	include ('../_includes/mobile_check.php');
?>


<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta charset="utf-8">
		<title>Roel Engel | De beste presentaties; sales decks, strategie documenten en meer </title>
		<link type="text/css" rel="stylesheet" href="../style.css"/>
		<link type="text/css" rel="stylesheet" href="style-decks.css"/>
		
		<meta property="og:title" content="Roelengel.nl | PowerPoint decks">
		<meta property="og:image" content="http://www.roelengel.nl/_images/decks/3decks.jpg">
		
		
		<!--lottie files   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
		
		<!--voor en na effect javascript   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<script>
			// Code By Webdevtrick ( https://webdevtrick.com )
			function beforeAfter() {
			  document.getElementById('compare').style.width = document.getElementById('slider').value + "%";
			}
			
			function beforeAfter2() {
			  document.getElementById('compare2').style.width = document.getElementById('slider2').value + "%";
			}	
			function beforeAfter3() {
			  document.getElementById('compare3').style.width = document.getElementById('slider3').value + "%";
			}
			function beforeAfter4() {
			  document.getElementById('compare4').style.width = document.getElementById('slider4').value + "%";
			}
			function beforeAfter5() {
			  document.getElementById('compare5').style.width = document.getElementById('slider5').value + "%";
			}
					
			
		</script>

		
	
		
	</head>

	<body>

<!--DESKTOP   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
<!--DESKTOP   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
<!--DESKTOP   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
<!--DESKTOP   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
<!--DESKTOP   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
<!--DESKTOP   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
<!--DESKTOP   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
<?
		if ($device == 'desktop'){
?>

<!--NAVIGATIE   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<div id="navigation-D">
			<div id="navigation-D-content">
				<div id="navigation-D-logo">
					<a href="../index.php"><img src="../_images/logo.png" style="width: 112px;"></a>
				</div>
				<div id="navigation-D-urls">
					<div id="navigation-D-urls-top">
						<a href="../powerpoint-academy">PowerPoint Academy</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
						<a href="../over-mij">Over mij</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
						<a href="https://www.linkedin.com/in/roelengel/" target="_blank">LinkedIn</a>
					</div>
					<div id="navigation-D-urls-bottom">
						<div id="navigation-D-urls-links">
									<a href="../presentatie-decks/"class="navigation-D-active">Decks</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a href="../design-ux">Design &#38; UX</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a href="../cases" >Cases</a>						
						</div>
						<div id="navigation-D-urls-contactbt">
							<button class="button-topnav" onclick="location.href='../contact'">Contact</button>	
						</div>
						<div id="space_1">&nbsp;</div></div>
					</div>

			</div>
		</div>
	
<!--CHATBOX   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		
		<a href="../contact">
		<div id="chat-D">
			<div id="chat-D-ballon">
				<div id="chat-D-ballon-tekst">
						Wil jij een kick-ass deck?<br>Neem contact op
				</div>
			</div>
			<div id="chat-D-foto">
				<img src="../_images/profile-picture.png" style="width:100px; ">
			</div>
		</div>
		</a>

		
		
		
<!--HEADER   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	


		<div id="header-D">
		<div id="space_200"></div>
		<div id="space_100"></div>			
			<div id="header-D-content">			
				<div id="header-D-content-title">
					<h1 class="s44">"Don't bore them to death!"</h1>
				</div>

				<div id="header-D-content-text">
					Een betere versie van jouw sales, strategie of investor pitch deck nodig? Zorg dat niemand meer in slaap valt door jouw <br>PowerPoint presentaties.
				</div>

				<br><br>
			</div>
			<div id="header-D-image">

				<div id="space_100"></div>
				<div id="space_50"></div>
				<lottie-player src="https://assets3.lottiefiles.com/packages/lf20_dgvlk8pz.json" background="transparent"  speed="1"  style="width: 40px; height: 40px; margin: auto;" loop  autoplay></lottie-player>
				<div id="space_50"></div>
			</div>
		</div>
		


	
		
		
		
<!--KICK ASS DECKS   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<div id="kickass-decks-D">
			<div id="kickass-decks-D-content">
				<div id="space_100"></div>
				<div id="kickass-decks-D-content-title">
					<h1 class="s44 white">Ik maak kick-ass<br>PowerPoint decks</h1>
				</div>
				<div id="kick-ass-decks-D-content-text">
					Met meer dan 10.000 slides op de teller help ik jou met je bedrijfspresentatie(s); zowel de vorm als de inhoud.
				</div>
				<div id="space_50"></div>
				<a href="../cases/index.php?categorie=deck"><img src="../_images/decks/3decks.jpg" style="width:1280px;"></a>
				<div id="space_20"></div>
				<div id="space_20"></div>
				
				<button class="button-dark-white-line" onclick="location.href='../cases/index.php?categorie=deck'">
					Toon alle cases &nbsp;&nbsp;>
				</button>
				&nbsp;&nbsp;&nbsp;
				<button class="button-pink-no-line" onclick="location.href='../contact'">
					Ik wil zo'n deck &nbsp;&nbsp;>
				</button>	
				<div id="space_50"></div>
				<div id="kick-ass-decks-D-content-text">
					Meer dan alleen de vormgeving van elke slide.<br>Ik help ook met storytelling (de flow in jouw verhaal) en via workshops komen we tot de kern van bijvoorbeeld jouw strategie, jouw propositie en/of de marktsituatie.
				</div>
				<div id="space_100"></div>
			</div>
		</div>
		
		
<!--POLL MERINO   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 
		<div id="poll-merino-D">
			<div id="poll-merino-D-content">		
				
				<div id="space_100"></div>
				<div id="space_50"></div>
				
				<div id="poll-merino-D-title">
					<h1 class="s44">Ik laat het je zien</h1>
				</div>
				<div id="poll-merino-D-text">
					Aan de hand van het fictieve biermerk Poll Merino laat ik hier zien hoe ik een kick-ass PowerPoint deck bouw.
				</div>
				<div id="poll-merino-D-blikje">
					<img src="../_images/decks/bierblik.png" style="width: 400px;" class="bounce-1 bounce-2">
				</div>
				
				
				<div id="slider-example-D">
					Sleep om "voor en na" te zien
					<div id="slider-example-D-back">
						<img src="../_images/icons/slider-button.png" class="slider-example-D-icon">
					</div>
					<div id="space_10"></div>
				</div>
				
				
               <!--VOOR EN NA 3  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 
				<div id="ppt-background">
					<div class="container3">
					  <figure>
						<div id="compare3"></div>
					  </figure>
					  <input oninput="beforeAfter3()" onchange="beforeAfter3()" type="range" min="0" max="100" value="50" id="slider3"/>
					</div>

					<div id="poll-merino-D-text">
						Een goede eerste openingsslide is belangrijk.<br> Deze staat vaak een tijd op het scherm en moet direct triggeren.
					</div>
				</div>
				
				
				<div id="space_100"></div>
				
				<!--VOOR EN NA 1  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 
				<div id="ppt-background">
					<div class="container">
					  <figure>
						<div id="compare"></div>
					  </figure>
					  <input oninput="beforeAfter()" onchange="beforeAfter()" type="range" min="0" max="100" value="50" id="slider"/>
					</div>

					<div id="poll-merino-D-text">
						Gebruik i.p.v. bullets bijvoorbeeld een model.<br>Over de 2 assen - prijs en en type bier - is de kans groter dat de positionering van Poll Merino 'blijft hangen'.
					</div>
				</div>	
				
				<div id="space_100"></div>
				
               <!--VOOR EN NA 5  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 
				<div id="ppt-background">
					<div class="container5">
					  <figure>
						<div id="compare5"></div>
					  </figure>
					  <input oninput="beforeAfter5()" onchange="beforeAfter5()" type="range" min="0" max="100" value="50" id="slider5"/>
					</div>

					<div id="poll-merino-D-text">
						Zorg voor een goed vloeiende storyline.<br> Daarnaast is het fijn als alle slides er gewoon verzorgd uitzien. Het oog wil ook wat ; -).
					</div>
				</div>
				
				<div id="space_100"></div>	
				
				
				<!--VOOR EN NA 2  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 
				<div id="ppt-background">
					<div class="container2">
					  <figure>
						<div id="compare2"></div>
					  </figure>
					  <input oninput="beforeAfter2()" onchange="beforeAfter2()" type="range" min="0" max="100" value="50" id="slider2"/>
					</div>

					<div id="poll-merino-D-text">
						Versterk de boodschap van je slide met de juiste visuals.<br> Door de twee verpakkingsmaterialen te tonen laat je duidelijk de transitie zien.
					</div>
				</div>
				
				<div id="space_100"></div>
				
               <!--VOOR EN NA 4  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 
				<div id="ppt-background">
					<div class="container4">
					  <figure>
						<div id="compare4"></div>
					  </figure>
					  <input oninput="beforeAfter4()" onchange="beforeAfter4()" type="range" min="0" max="100" value="50" id="slider4"/>
					</div>

					<div id="poll-merino-D-text">
						Maak slides niet te druk.<br> Highlight en laat vooral veel weg. Een P&#38;L - financiële balans - is eigenlijk voor de bijlage. 
					</div>
				</div>
				
				<div id="space_100"></div>
	
				
			
				
				
				
				<div id="space_200"></div>
			</div>
		</div>
		
		
<!--KOFFIE   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<div id="koffie-D">
			<div id="koffie-D-content">
				<div id="space_100"></div>
				<div id="koffie-D-left">
					<h1 class="white">Koffie?</h1>
					Wil je kijken wat de mogelijkheden zijn om een perfect deck te krijgen? Stuur een mail of WhatsApp bericht!
				</div>
				<div id="koffie-D-right">
					<a href="mailto: roel@roelengel.nl"><u>roel@roelengel.nl</u></a><br>
					06 23 566 816
				</div>
				<div id="space_200"></div>
				<div id="koffie-D-logobarkop">
					Ik heb o.a. gewerkt voor:
				</div>
				<div id="koffie-D-logobar">
					<img src="../_images/home/beige-logos/florius-beige.png" class="beige-logo animate-flicker1">
					<img src="../_images/home/beige-logos/nu-beige.png" class="beige-logo animate-flicker2">
					<img src="../_images/home/beige-logos/rijksoverheid-beige.png" class="beige-logo animate-flicker5">
					<img src="../_images/home/beige-logos/vtwonen-beige.png" class="beige-logo animate-flicker3">
					<img src="../_images/home/beige-logos/radio538-beige.png" class="beige-logo animate-flicker1">
					<img src="../_images/home/beige-logos/vakantieveilingen-beige.png" class="beige-logo animate-flicker2">
					<img src="../_images/home/beige-logos/ns-beige.png" class="beige-logo animate-flicker5">
					<img src="../_images/home/beige-logos/postcodeloterij-beige.png" class="beige-logo animate-flicker2">
					<img src="../_images/home/beige-logos/linda-beige.png" class="beige-logo animate-flicker3">
					<img src="../_images/home/beige-logos/leaseplan-beige.png" class="beige-logo animate-flicker4">
					<img src="../_images/home/beige-logos/at5-beige.png" class="beige-logo animate-flicker5">
				</div>			
			</div>
		</div>
		

		
		
		

		
<!--MOBILE   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
<!--MOBILE   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
<!--MOBILE   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
<!--MOBILE   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
<!--MOBILE   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
<!--MOBILE   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
<!--MOBILE   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
<!--MOBILE   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
<!--MOBILE   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
<!--MOBILE   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
<?
		 }
		  if ($device == 'mobile'){
?>	
		
<!--NAVIGATIE   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		
		<div id="navigation-M">
			<div id="navigation-M-logo">
				<a href="../index.php"><img src="../_images/logo.png" style="width: 90px;"></a>
			</div>
			<div id="navigation-M-hamburger">
				<a href="../mobile-menu/"><img src="../_images/icons/hamburger.png" style="width:20px; margin-top:10px;"></a>

			</div>
		</div>
		
<!--CHATBOX   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		
		<a href="../contact">
		<div id="chat-M">
			<div id="chat-M-ballon">
				<div id="chat-M-ballon-tekst">
						Wil jij een kick-ass deck?<br>Neem contact op
				</div>
			</div>
			<div id="chat-M-foto">
				<img src="../_images/profile-picture.png" style="width:60px; ">
			</div>
		</div>
		</a>	
		
		
<!--MOBILE HEADER  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 			
		<div id="header-decks-M">
			<div id="space_200"></div>
			<div id="header-decks-M-content">
				<h1 class="s30">"Don't bore them<br> to death"</h1>
				Een betere versie van jouw sales, strategie of investor pitch deck nodig? Zorg dat niemand meer in slaap valt door jouw
				PowerPoint presentaties. 
				<div id="space_50"></div>
				<lottie-player src="https://assets3.lottiefiles.com/packages/lf20_dgvlk8pz.json" background="transparent"  speed="1"  style="width: 40px; height: 40px; margin: auto;" loop  autoplay></lottie-player>
				<div id="space_50"></div>
			</div>
		</div>
		
		<div id="header-kickass-M">
			<div id="header-kickass-M-content">
				<div id="space_50"></div>
				<div id="space_20"></div>
				<div id="space_10"></div>
				<h1 class="s30 white">Ik maak kick-ass PowerPoint decks</h1>
				Met meer dan 10.000 slides op de teller help ik jou met je bedrijfspresentatie(s); zowel de vorm als de inhoud. 
				<div id="space_50"></div>
				<div id="space_20"></div>
				<div id="space_10"></div>
			</div>
			<div id="ppt-hor" style="background-image: url('../_images/decks/3decks.jpg');background-size: 300%;">
				<img src="../_images/decks/3decks.jpg" style="width: 100%; opacity: 0.0;"><br><br><br>
			</div>	
			<div id="header-kickass-M-content">

				<br>
				<button class="button-pink-no-line" onclick="location.href='../contact'" style="width:200px;">
					Ik wil zo'n deck &nbsp;&nbsp;>
				</button>	
				<div id="space_10"></div>
				<button class="button-dark-white-line" onclick="location.href='../cases/index.php?categorie=deck'" style="width:200px;">
					Toon alle cases &nbsp;&nbsp;>
				</button>
				
				<div id="space_20"></div>
				<div id="space_10"></div>
				Meer dan alleen de vormgeving van elke slide. Ik help ook met storytelling (de flow in jouw verhaal) en via workshops komen we tot de kern van bijvoorbeeld jouw strategie, jouw propositie en/of de marktsituatie.

				<div id="space_50"></div>
				<div id="space_20"></div>
				<div id="space_10"></div>
				
			</div>
		</div>
	
		
		
		<div id="poll-M">
			<div id="poll-M-content">
				<div id="space_50"></div>
				<h1 class="s26">Ik laat het je zien</h1>	
					Aan de hand van het fictieve biermerk Poll Merino laat ik hier zien hoe ik een kick-ass PowerPoint deck bouw.
				<div id="space_50"></div>
				
				
				<!-- before after 3 ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 			
				<div id="poll-M-before-before3">
					<div id="poll-M-before-after">
						<img src="../_images/decks/slide-3b.jpg" style="width:100%;border-radius: 15px; border: 1px solid #eeeeee;">
					</div>
				</div>
				<div id="poll-M-text">
					<div id="space_10"></div>
					Een goede eerste openingsslide is belangrijk. Deze staat vaak een tijd op het scherm en moet direct triggeren.
				</div>
				
				<div id="space_50"></div>

				<!-- before after 1 ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 			
				<div id="poll-M-before-before1">
					<div id="poll-M-before-after">
						<img src="../_images/decks/slide-1b.jpg" style="width:100%;border-radius: 15px; border: 1px solid #eeeeee;">
					</div>
				</div>
				<div id="poll-M-text">
					<div id="space_10"></div>
					Gebruik i.p.v. bullets bijvoorbeeld een model. Over de 2 assen - prijs en en type bier - is de kans groter dat de positionering van Poll Merino 'blijft hangen'.
				</div>	
				
				<div id="space_50"></div>

				<!-- before after 5 ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 			
				<div id="poll-M-before-before5">
					<div id="poll-M-before-after">
						<img src="../_images/decks/slide-5b.jpg" style="width:100%;border-radius: 15px; border: 1px solid #eeeeee;">
					</div>
				</div>
				<div id="poll-M-text">
					<div id="space_10"></div>
					Zorg voor een goed vloeiende storyline. Daarnaast is het fijn als alle slides er gewoon verzorgd uitzien. Het oog wil ook wat ; -).
				</div>
				
				<div id="space_50"></div>
				
				<!-- before after 2 ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 			
				<div id="poll-M-before-before2">
					<div id="poll-M-before-after">
						<img src="../_images/decks/slide-2b.jpg" style="width:100%;border-radius: 15px; border: 1px solid #eeeeee;">
					</div>
				</div>
				<div id="poll-M-text">
					<div id="space_10"></div>
					Versterk de boodschap van je slide met de juiste visuals. Door de twee verpakkingsmaterialen te tonen laat je duidelijk de transitie zien.				
				</div>					
				
				<div id="space_50"></div>

				<!-- before after 4 ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 			
				<div id="poll-M-before-before4">
					<div id="poll-M-before-after">
						<img src="../_images/decks/slide-4b.jpg" style="width:100%;border-radius: 15px; border: 1px solid #eeeeee;">
					</div>
				</div>
				<div id="poll-M-text">
					<div id="space_10"></div>
					Maak slides niet te druk. Highlight en laat vooral veel weg. Een P&#38;L - financiële balans - is eigenlijk voor de bijlage.
				</div>					
				


				
			</div>
			
			
			
			
			
			
			
		</div>
		<div id="space_100"></div>

<!-- MOBILE KOFFIE  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 			
		<div id="koffie-M">
			<div id="space_50"></div>
			<div id="koffie-M-content">
				<h1 class="white s26">Koffie?</h1>
				Kunnen jouw decks wel een upgrade gebruiken? Laten we eens zitten om te kijken wat er mogelijk is.
				<div id="space_20"></div>	
				<a href="mailto: roel@roelengel.nl"><u>roel@roelengel.nl</u></a>
				<div id="space_5"></div>
				<a href="https://wa.me/31623566816"><u>06 23 566 816 (whatsapp)</u></a>
				<div id="space_10"></div>
			</div>
			<div id="space_50"></div>
			<div id="space_50"></div>
			<div id="koffie-M-logobarkop">
				Ik heb o.a. gewerkt voor:
				<div id="space_10"></div>
			</div>
			<div id="koffie-M-logobar">
				<img src="../_images/home/beige-logos/florius-beige.png" class="beige-logo-M animate-flicker1">
				<img src="../_images/home/beige-logos/nu-beige.png" class="beige-logo-M animate-flicker2">
				<img src="../_images/home/beige-logos/rijksoverheid-beige.png" class="beige-logo-M animate-flicker5">
				<img src="../_images/home/beige-logos/vtwonen-beige.png" class="beige-logo-M animate-flicker3">
				<img src="../_images/home/beige-logos/radio538-beige.png" class="beige-logo-M animate-flicker1">
				<img src="../_images/home/beige-logos/vakantieveilingen-beige.png" class="beige-logo-M animate-flicker2">
				<img src="../_images/home/beige-logos/ns-beige.png" class="beige-logo-M animate-flicker5">
				<img src="../_images/home/beige-logos/postcodeloterij-beige.png" class="beige-logo-M animate-flicker2">
				<img src="../_images/home/beige-logos/linda-beige.png" class="beige-logo-M animate-flicker3">
				<img src="../_images/home/beige-logos/leaseplan-beige.png" class="beige-logo-M animate-flicker4">
				<img src="../_images/home/beige-logos/at5-beige.png" class="beige-logo-M animate-flicker5">
			</div>	
			<div id="space_100"></div>
		</div>			
		
	
		
<?
		}
?>
		

	
	</body>
</html>
