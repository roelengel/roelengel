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
		<title>Roel Engel | Design &#38; UX  </title>
		<link type="text/css" rel="stylesheet" href="../style.css"/>
		<link type="text/css" rel="stylesheet" href="style-design-ux.css"/>
		
		
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Newsreader">
		
		<meta property="og:title" content="Roelengel.nl | Design &#38; UX">
		<meta property="og:image" content="http://www.roelengel.nl/_images/design-ux/facebook-image.jpg">

		
		
		<!--lottie files   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
		
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
									<a href="../presentatie-decks/">Decks</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a href="../design-ux"class="navigation-D-active">Design &#38; UX</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
						Kan ik je helpen met<br>design &#38; UX?
				</div>
			</div>
			<div id="chat-D-foto">
				<img src="../_images/profile-picture.png" style="width:100px; ">
			</div>
		</div>
		</a>

		
		
		
<!--HEADER   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<!--
		<div id="header-D">
			<div id="space_200"></div>
			<div id="space_100"></div>			
			<div id="header-D-content">
				<div id="header-D-content-title">
					<h1 class="s44 white">Zullen we samen kleuren?</h1>
				</div>

				<div id="header-D-content-text">
					Kan jouw logo, huisstijl, site of app wel een opfrisbeurt gebruiken? 
				</div>

			</div>
			<div id="header-D-image">
				<div id="space_100"></div>
				<div id="space_50"></div>
				<lottie-player src="https://assets3.lottiefiles.com/packages/lf20_dgvlk8pz.json" background="transparent"  speed="1"  style="width: 40px; height: 40px; margin: auto;" loop  autoplay></lottie-player>
				<div id="space_50"></div>
			</div>
			<div id="space_50"></div>			
		</div>
		-->
		
<!--LOGO'S  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<div id="proces-D">
			<div id="proces-D-content">
				<div id="space_100"></div>
				<div id="space_50"></div>
				<div id="proces-D-content-title">
					<h1 class="s44">Logo en huisstijl?</h1>
				</div>
				<div id="proces-D-content-text">
					Begin je een nieuw bedrijf of kan jouw bedrijf wel een opfrisbeurt gebruiken? Ik design logo's en huisstijlen.
				</div>
				<div id="space_50"></div>
				<div id="space_20"></div>
				<div id="proces-3blok">
					<div id="proces-3blok-item">
						<div id="proces-3blok-item-image">
							<img src="../_images/design-ux/logo-1.jpg" style="width:100%;" class="line">
						</div>
						<div id="proces-3blok-titel">Aftasten en schetsen</div>
						<div id="proces-3blok-text">Gezamenlijk zoeken we een richting die aansluit bij jouw bedrijf.</div>
					</div>
					<div id="proces-3blok-item" class="margin-left">
						<div id="proces-3blok-item-image">
							<img src="../_images/design-ux/logo-2.jpg" style="width:100%;" class="line">
						</div>
						<div id="proces-3blok-titel">Logo uitwerking &#38; stijlboek</div>
						<div id="proces-3blok-text">De gekozen richting wordt verder uitgewerkt en vastgelegd in een stijlboek.</div>
					</div>	
					<div id="proces-3blok-item" class="margin-left" >
						<div id="proces-3blok-item-image" style="background-image: url(../_images/design-ux/logo-3.jpg); background-size: 400px 450px">
							<img src="../_images/design-ux/logo-envelop.png" style="width:60%; margin-left:-30px; margin-top:175px; position:relative; z-index: 9;">
							<img src="../_images/design-ux/logo-tas.png" style="width:40%; margin-left: -90px; position:relative; z-index: 8;" >
						</div>						
						
						<div id="proces-3blok-titel">Impressie</div>
						<div id="proces-3blok-text">Tot slot kijken hoe het logo en huisstijl uitpakken in online én offline vormen.</div>
					</div>	
				</div>
			</div>
			<div id="space_100"></div>
		</div>

<!--UX en UI  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<div id="proces-D-dark">
			<div id="proces-D-content">
				<div id="space_100"></div>
				<div id="proces-D-content-title">
					<h1 class="s44 white">Nieuwe site of app?</h1>
				</div>
				<div id="proces-D-content-text" class="white">
					Ik werk ook de volledige UX en UI uit van sites en apps.<br>De logica (UX) en visuele uitwerking (UI).
				</div>
				<div id="space_50"></div>
				<div id="space_20"></div>
				<div id="proces-3blok" class="white">
					<div id="proces-3blok-item">
						<div id="proces-3blok-item-image">
							<img src="../_images/design-ux/ux-1.jpg" style="width:100%;" >
						</div>
						<div id="proces-3blok-titel">Wireframes (UX)</div>
						<div id="proces-3blok-text">Welke schermen en flows zijn nodig voor een logisch geheel? Via wireframes - een soort blueprint - zoeken we het uit.</div>
					</div>
					<div id="proces-3blok-item" class="margin-left">
						<div id="proces-3blok-item-image">
							<img src="../_images/design-ux/ux-2.jpg" style="width:100%;">
						</div>
						<div id="proces-3blok-titel">Uitwerking schermen (UI)</div>
						<div id="proces-3blok-text">Vervolgens worden alle schermen verder uitgedacht en ook visueel uitgewerkt. </div>
					</div>	
					<div id="proces-3blok-item" class="margin-left" >
						<div id="proces-3blok-item-image" style="background-image: url(../_images/design-ux/ux-3.jpg); background-size: 400px 450px">
							<img class="bounce-3" src="../_images/design-ux/ux-popup.png" style="width:60%; margin-left:80px; margin-top:80px;">
						</div>						
						
						<div id="proces-3blok-titel">Demo &#38; validatie</div>
						<div id="proces-3blok-text">Voordat IT aan de slag gaat, kan het product via een clickable demo gevalideerd worden onder gebruikers.</div>
					</div>	
				</div>
			</div>
			<div id="space_100"></div>
		</div>	
		
		
<!--MIJN WERK werk  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<div id="designcases-D">
			<div id="designcases-D-content">
				<div id="space_100"></div>
				<div id="proces-D-content-title">
					<h1 class="s44 ">Mijn werk</h1>
				</div>
				<div id="proces-D-content-text">
					Een paar toffe cases
				</div>		
				
				<div id="space_50"></div>
				
				<div id="designcases-D-item">
					<div id="designcases-D-item-pic">
						<img src="../_images/cases/extra/solar1.jpg" style="width:100%;">
					</div>
					<div id="designcases-D-item-space">&nbsp;</div>
					<div id="designcases-D-item-text">
						<div id="designcases-D-item-text-title">Solar Centraal</div>
						<div id="designcases-D-item-text-copy">Logo, huisstijl en site design voor Solar Centraal; zonnepanelen binnen 30 dagen.</div>
						<div id="space_20"></div>
						<button class="button-pink" onclick="location.href='../cases/case.php?jaar=2022&klant=solarcentraal'">Solar Centraal case &nbsp;&nbsp;&gt;</button>
					</div>
				</div>
				<div id="space_100"></div>
				<div id="space_20"></div>
				<div id="space_10"></div>
				<div id="designcases-D-item">
					<div id="designcases-D-item-text">
						<div id="designcases-D-item-text-title">Bank.nl</div>
						<div id="designcases-D-item-text-copy">Logo en redesign van Bank.nl</div>
						<div id="space_20"></div>
						<button class="button-pink" onclick="location.href='../cases/case.php?jaar=2023&klant=bank'">Bank.nl case &nbsp;&nbsp;&gt;</button>
					</div>

					<div id="designcases-D-item-space">&nbsp;</div>
					<div id="designcases-D-item-pic">
						<img src="../_images/cases/extra/bank-1D.jpg" style="width:100%;">
					</div>
				</div>
				<div id="space_100"></div>
				<div id="space_20"></div>
				<div id="space_10"></div>
				<div id="designcases-D-item">
					<div id="designcases-D-item-pic">
						<img src="../_images/design-ux/case-poll.jpg" style="width:100%;">
					</div>
					<div id="designcases-D-item-space">&nbsp;</div>
					<div id="designcases-D-item-text">
						<div id="designcases-D-item-text-title">Poll Merino</div>
						<div id="designcases-D-item-text-copy">Logo, huisstijl &#38; product design van Poll Merino</div>
						<div id="space_20"></div>
						<button class="button-pink" onclick="location.href='../cases/case.php?jaar=2022&klant=pollmerino'">Poll Merino case &nbsp;&nbsp;&gt;</button>
					</div>
				</div>
				<div id="space_100"></div>
				<div id="space_20"></div>
				<div id="space_10"></div>					
				<div id="designcases-D-item">

					<div id="designcases-D-item-text">
						<div id="designcases-D-item-text-title">Fittery</div>
						<div id="designcases-D-item-text-copy">Design van Fittery website en app</div>
						<div id="space_20"></div>
						<button class="button-pink" onclick="location.href='../cases/case.php?jaar=2024&klant=fittery'">Fittery case &nbsp;&nbsp;&gt;</button>
					</div>
					<div id="designcases-D-item-space">&nbsp;</div>
					<div id="designcases-D-item-pic">
						<img src="../_images/cases/extra/fittery2024-1D.jpg" style="width:100%;">
					</div>					
				</div>
				<div id="space_100"></div>
				<div id="space_20"></div>
				<div id="space_10"></div>				
				<div id="designcases-D-item">
					<div id="designcases-D-item-pic">
						<img src="../_images/cases/uitgelicht/2024holdfastandstipe-breed.jpg" style="width:100%;">
					</div>
					<div id="designcases-D-item-space">&nbsp;</div>
					<div id="designcases-D-item-text">
						<div id="designcases-D-item-text-title">Holdfast and Stipe</div>
						<div id="designcases-D-item-text-copy">Logo, huisstijl &#38; product design van Holdfast and Stipe</div>
						<div id="space_20"></div>
						<button class="button-pink" onclick="location.href='../cases/case.php?jaar=2024&klant=holdfastandstipe'">Holdfast and Stipe case &nbsp;&nbsp;&gt;</button>
					</div>
				</div>
				
				
				<div id="space_50"></div>
				<button class="button-pink" onclick="location.href='../cases/index.php?categorie=design'">Bekijk alle cases &nbsp;&nbsp;&gt;</button>
			</div>
			
			<div id="space_100"></div>
			<div id="space_50"></div>
		</div>
			
		
<!--KOFFIE   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<div id="koffie-D">
			<div id="koffie-D-content">
				<div id="space_100"></div>
				<div id="koffie-D-left">
					<h1 class="white">Koffie?</h1>
					Wil je eens praten over jouw design uitdagingen? Stuur een mail of WhatsApp bericht!
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
						Kan ik je helpen met<br>design &#38; UX?
				</div>
			</div>
			<div id="chat-M-foto">
				<img src="../_images/profile-picture.png" style="width:60px; ">
			</div>
		</div>
		</a>	

<!--LOGO'S  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<div id="proces-M">
			<div id="proces-M-content">
				<div id="space_100"></div>
				<div id="space_50"></div>
				<div id="proces-M-content-title">
					<h1 class="s30">Logo en huisstijl?</h1>
				</div>
				<div id="proces-M-content-text">
					Begin je een nieuw bedrijf of kan jouw bedrijf wel een opfrisbeurt gebruiken? Ik design logo's en huisstijlen.
				</div>
				<div id="space_20"></div>
				<div id="space_20"></div>
				<span style="font-size:12px"><i>Swipe opzij</i></span>
				<div id="space_20"></div>
			</div>
			
			<div id="caroussel-M">
				<div id="space_20"></div>
				<div id="caroussel-M-item" class="slide-in-M">
					<img src="../_images/design-ux/logo-1.jpg" style="width:100%;" class="line">
					<div id="caroussel-M-titel">Aftasten en schetsen</div>
					<div id="caroussel-M-text">Gezamenlijk zoeken we een richting die aansluit bij jouw bedrijf.</div>
				</div>
				<div id="caroussel-M-item" class="slide-in-M">
					<img src="../_images/design-ux/logo-2.jpg" class="line" style="width:100%;">
					<div id="caroussel-M-titel">Logo uitwerking &#38; stijlboek</div>
					<div id="caroussel-M-text">De gekozen richting wordt verder uitgewerkt en vastgelegd in een stijlboek.</div>					
				</div>
				<div id="caroussel-M-item" class="slide-in-M">
					<div id="caroussel-M-item-image" style="background-image: url(../_images/design-ux/logo-3.jpg); background-size: 280px 315px">
							<img src="../_images/design-ux/logo-envelop.png" style="width:60%; margin-left:-20px; margin-top:105px; position:relative; z-index: 9;">
							<img src="../_images/design-ux/logo-tas.png" style="width:45%; margin-left: -65px; position:relative; z-index: 8;" >
					</div>
					<div id="caroussel-M-titel">Impressie</div>
					<div id="caroussel-M-text">Tot slot kijken hoe het logo en huisstijl uitpakken in online én offline vormen.</div>
				</div>	
				<div id="caroussel-M-emptyitem">
					&nbsp;
				</div>
				<div id="space_20"></div>
				<div id="space_10"></div>
			</div>
			<div id="space_50"></div>
		</div>
		
<!--UX UI  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<div id="proces-M-dark">
			<div id="proces-M-content">
				<div id="space_50"></div>
				<div id="proces-M-content-title">
					<h1 class="s30 white">Nieuwe site of app?</h1>
				</div>
				<div id="proces-M-content-text" class="white">
					Ik werk ook de volledige UX en UI uit van sites en apps. De logica (UX) en visuele uitwerking (UI). 
				</div>
				<div id="space_20"></div>
				<div id="space_20"></div>
				<span style="font-size:12px"><i>Swipe opzij</i></span>
				<div id="space_20"></div>
			</div>
			
			<div id="caroussel-M-dark">
				<div id="space_20"></div>
				<div id="caroussel-M-item" class="slide-in-M">
					<img src="../_images/design-ux/ux-1.jpg" style="width:100%;" >
					<div id="caroussel-M-titel">Wireframes (UX)</div>
					<div id="caroussel-M-text">Welke schermen en flows zijn nodig voor een logisch geheel? Via wireframes - een soort blueprint - zoeken we het uit.</div>
				</div>
				<div id="caroussel-M-item" class="slide-in-M">
					<img src="../_images/design-ux/ux-2.jpg"  style="width:100%;">
					<div id="caroussel-M-titel">Uitwerking schermen (UI)</div>
					<div id="caroussel-M-text">Vervolgens worden alle schermen verder uitgedacht en ook visueel uitgewerkt. </div>					
				</div>
				<div id="caroussel-M-item" class="slide-in-M">
					<img src="../_images/design-ux/ux-3.jpg"  style="width:100%;">
					<div id="caroussel-M-titel">Demo &#38; validatie</div>
					<div id="caroussel-M-text">Voordat IT aan de slag gaat, kan het product via een clickable demo gevalideerd worden onder gebruikers.</div>
				</div>	
				<div id="caroussel-M-emptyitem">
					&nbsp;
				</div>
				<div id="space_50"></div>
			</div>
		</div>		
		
		<div id="designcases-M">
			<div id="designcases-M-content">

				<div id="space_50"></div>
				<div>
					<h1 class="s30">Mijn werk</h1>
				</div>
				<div >
					Een paar toffe cases.
				</div>
			</div>
			<div id="space_50"></div>
			
			<div id="designcases-M-content-title">Solar Centraal</div>
			<div id="space_20"></div>
			<img src="../_images/cases/extra/solar1-M.jpg" style="width:100%;">
			<div id="designcases-M-content-text">
				Logo, huisstijl en site design voor Solar Centraal; zonnepanelen binnen 30 dagen.
				<div id="space_10"></div>
				<a href="../cases/case.php?jaar=2022&klant=solarcentraal"><u>Solar Centraal case</u></a>
			</div>

			
			<div id="space_50"></div>
			<div id="space_20"></div>
			<div id="designcases-M-content-title">Bank.nl</div>
			<div id="space_20"></div>
			<img src="../_images/cases/extra/bank-1M.jpg" style="width:100%;">
			<div id="designcases-M-content-text">
				Logo, huisstijl en redesign Bank.nl
				<div id="space_10"></div>
				<a href="../cases/case.php?jaar=2023&klant=bank"><u>Bank.nl case</u></a>
			</div>
			
			<div id="space_50"></div>
			<div id="space_20"></div>			
			
			<div id="designcases-M-content-title">Poll Merino</div>
			<div id="space_20"></div>
			<img src="../_images/design-ux/case-pollM.jpg" style="width:100%;">
			<div id="designcases-M-content-text">
				Logo, huisstijl &#38; product design van Poll Merino
				<div id="space_10"></div>
				<a href="../cases/case.php?jaar=2022&klant=pollmerino"><u>Poll Merino case</u></a>
			</div>
			
			<div id="space_50"></div>
			<div id="space_20"></div>	
			
			<div id="designcases-M-content-title">Fittery</div>
			<div id="space_20"></div>
			<img src="../_images/cases/extra/fittery2024-1M.jpg" style="width:100%;">
			<div id="designcases-M-content-text">
				Redesign Fittery website en app
				<div id="space_10"></div>
				<a href="../cases/case.php?jaar=2024&klant=fittery"><u>Fittery case</u></a>
			</div>
			
			<div id="space_50"></div>
			<div id="space_20"></div>			
			
			<div id="designcases-M-content-title">Holdfast and Stipe</div>
			<div id="space_20"></div>
			<img src="../_images/cases/uitgelicht/2024holdfastandstipe.jpg" style="width:100%;">
			<div id="designcases-M-content-text">
				Logo, huisstijl en product design Holdfast and Stipe
				<div id="space_10"></div>
				<a href="../cases/case.php?jaar=2024&klant=holdfastandstipe"><u>Holdfast and Stipe case</u></a>
			</div>			
			
			
			
			<div id="space_50"></div>
			<div id="space_20"></div>
			<center><button class="button-pink" onclick="location.href='../cases/index.php?categorie=design'">Bekijk alle cases &nbsp;&nbsp;&gt;</button></center>
		</div>
	
		<div id="space_100"></div>
	
<!-- MOBILE KOFFIE  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 			
		<div id="koffie-M">
			<div id="space_50"></div>
			<div id="koffie-M-content">
				<h1 class="white s26">Koffie?</h1>
					Wil je eens praten over jouw design uitdagingen? Stuur een mail of WhatsApp bericht!
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

