<?
	require("util.inc.php");
	$sql = new MySQL_class;
	$sql->Create("$dbname");
	mysql_query( "SET NAMES 'utf8'" );

	include ('_includes/mobile_check.php');
?>

<!--ROTATE SHOWREEL AANJAGER -->
<?
		if ($device == 'desktop'){
?>
<script>
window.onscroll = function () {
    scrollRotate();
};

function scrollRotate() {
    let image = document.getElementById("showreel-promo-D");
    image.style.transform = "rotate(" + window.pageYOffset/4 + "deg)";
}
</script>
<?
		}else{
?>
<script>
window.onscroll = function () {
    scrollRotate();
};

function scrollRotate() {
    let image = document.getElementById("showreel-promo-M");
    image.style.transform = "rotate(" + window.pageYOffset/4 + "deg)";
}
</script>
<?
		}
?>
<!--END ROTATE SHOWREEL AANJAGER -->

<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta charset="utf-8">
		<title>Roel Engel - visualisator</title>
		<link type="text/css" rel="stylesheet" href="style.css"/>
		<link type="text/css" rel="stylesheet" href="style-home.css"/>
		
		<meta name="title" content="Roel Engel - Freelancer">
		<meta name="description" content="Zoek je een Freelance Strateeg om jouw strategie goed op papier te krijgen of een Freelance Designer voor jouw logo, huisstijl of redesign?">
		
		<meta property="og:title" content="Roelengel.nl | Freelance Visualisator">
		<meta property="og:image" content="http://www.roelengel.nl/_images/home/roel-mobile.jpg">

		<!--voor en na effect javascript   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<script>
			// Code By Webdevtrick ( https://webdevtrick.com )
			
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

					
			
		</script>		<!--carroussel   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
		
<!--SHOWREEL PROMO   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    	
		<div id="showreel-promo-D">
			<a href="showreel/"><img src="_images/showreel-promo.png" style="width:100%;">	</a>
		</div>
 -->
		
<!--NAVIGATIE   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<div id="navigation-D">
			<div id="navigation-D-content">
				<div id="navigation-D-logo">
					<a href="index.php"><img src="../_images/logo.png" style="width: 112px;"></a>
				</div>
				<div id="navigation-D-urls">
					<div id="navigation-D-urls-top">
						<a href="powerpoint-academy">PowerPoint Academy</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
						<a href="over-mij">Over mij</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
						<a href="https://www.linkedin.com/in/roelengel/" target="_blank">LinkedIn</a>
					</div>
					<div id="navigation-D-urls-bottom">
						<div id="navigation-D-urls-links">
									<a href="presentatie-decks/">Decks</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a href="design-ux">Design &#38; UX</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a href="cases">Cases</a>						
						</div>
						<div id="navigation-D-urls-contactbt">
							<button class="button-topnav" onclick="location.href='contact'">Contact</button>	
						</div>
						<div id="space_1">&nbsp;</div></div>
					</div>

			</div>
		</div>
		
<!--HEADER DESKTOP  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<div id="header-home-D">
			<div id="header-home-D-content">
				<div id="header-home-D-visualisator">
					<h1 style="--x: 6; --y: -6;"><span style="--index: 0; --alpha-l: 0.125; --alpha-u: 0.25;">v</span><span style="--index: 1; --alpha-l: 0.125; --alpha-u: 0.25;">i</span><span style="--index: 2; --alpha-l: 0.125; --alpha-u: 0.25;">s</span><span style="--index: 3; --alpha-l: 0.125; --alpha-u: 0.25;">u</span><span style="--index: 4; --alpha-l: 0.125; --alpha-u: 0.25;">a</span><span style="--index: 5; --alpha-l: 0.125; --alpha-u: 0.25;">l</span><span style="--index: 6; --alpha-l: 0.125; --alpha-u: 0.25;">i</span><span style="--index: 7; --alpha-l: 0.125; --alpha-u: 0.25;">s</span><span style="--index: 8; --alpha-l: 0.125; --alpha-u: 0.25;">a</span><span style="--index: 9; --alpha-l: 0.125; --alpha-u: 0.25;">t</span><span style="--index: 10; --alpha-l: 0.125; --alpha-u: 0.25;">o</span><span style="--index: 11; --alpha-l: 0.125; --alpha-u: 0.25;">r</span></h1>
				</div>
				
				<div id="header-home-D-overmij">
					<div id="header-home-D-overmij-1">
						<a href="mailto: roel@roelengel.nl"><u>roel@roelengel.nl</u></a><br>
						Ik ben Roel Engel, freelance visualisator, <br>en ik maak kick-ass decks en designs.
					</div>
					<div id="header-home-D-overmij-2">
						/Freelance Strateeg<br>
						/Freelance Designer
					</div>

					<!--<lottie-player src="https://assets3.lottiefiles.com/packages/lf20_dgvlk8pz.json" background="transparent"  speed="1"  style="width: 40px; height: 40px; margin-left: 405px;" loop  autoplay></lottie-player>-->
				</div>
				
				<div id="header-home-D-image">
					<img src="_images/home/roel-transparant.png" style="height: 750px; z-index: auto; position: relative;">
				</div>
				


			</div>
		</div>
		
<!--ERVARING DESKTOP  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<div id="ervaring-home-D">
			<div id="space_100"></div>
			<div id="ervaring-home-D-content">
				
				<div id="ervaring-D-left">
					<h1 class="white">Ervaring</h1>
					De afgelopen 19 jaar heb ik o.a. NU.nl, de Postcode Loterij, LeasePlan en vtwonen mogen helpen in innovatie en digitalisering. In functies als Strategy Director, Business Consultant en Director of Digital Growth.
				</div>
				<div id="ervaring-D-right">
					Ik heb gewerkt voor o.a.<br><br>
					<span class="s36">
						NU.nl<br>
						vtwonen<br>
						Rijksoverheid<br>
						LeasePlan<br>
						NS<br>
						Postcode Loterij<br>
						LINDA.<br>
						538<br>
						Vattenfall<br>
						Transavia<br>
						Van Lanschot Kempen
					</span>
				</div>

				<div id="space_100"></div>
				<div id="space_50"></div>
		
			
			</div>
		</div>		

		
		
		
<!--DRIE DIENSTEN   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<div id="diensten-D">
			<div id="diensten-D-content">			
				<div id="space_100"></div>
				<div id="cases-D-text-left">
					<h1 class="s44">Wat ik doe</h1>
					<!--Ik visualiseer verhalen, merken en customer journey's. Plat gezegd maak ik kick-ass PowerPoint decks; zowel de vorm als de inhoud. En design ik logo's, huisstijlen en de UX/UI van jouw site of app. -->
					
				</div>
				<div id="space_20"></div>

				<div id="dienst-D">
					<!--<div id="dienst-D-image">
						<a href="presentatie-decks/">-->
							<!--<img src="_images/home/dienst-decks-D.jpg" style="width:100%">-->
						   <!--VOOR EN NA 2 (PPT DESKTOP)  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 
					<!--		<div id="ppt-background">
								<div class="container2">
								  <figure>
									<div id="compare2"></div>
								  </figure>
								  <input oninput="beforeAfter2()" onchange="beforeAfter2()" type="range" min="0" max="100" value="50" id="slider2"/>
								</div>
							</div>	
						</a>	
					</div>
					-->
					<div id="dienst-D-titel">
						<h2 class="s.20 poppins-medium">PowerPoint decks</h2>
					</div>
					<div id="dienst-D-text">
						Met meer dan 10.000 slides op de teller maak ik jouw strategie, sales of investor deck perfect. Zowel de vorm als de inhoud.<br>
					</div>
					<div id="dienst-D-button">
						<button class="button-pink" onclick="location.href='presentatie-decks'">
							Meer over decks &nbsp;&nbsp;>
						</button>
					</div>				
				</div>

				<div id="dienst-D" class="mar-left90">
					<!--<div id="dienst-D-image">
						<a href="design-ux">-->
							<!--<img src="_images/home/dienst-design.jpg" style="width:100%">-->
						   <!--VOOR EN NA 4 (PPT DESKTOP)  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 
					<!--		<div id="ppt-background">
								<div class="container4">
								  <figure>
									<div id="compare4"></div>
								  </figure>
								  <input oninput="beforeAfter4()" onchange="beforeAfter4()" type="range" min="0" max="100" value="50" id="slider4"/>
								</div>
							</div>							
						</a>
					</div>
					-->
					<div id="dienst-D-titel">
						<h2 class="s.20 poppins-medium">Design &#38; UX</h2>
					</div>
					<div id="dienst-D-text">
						Ik design logo's, huisstijlen tot complete UX en UI uitwerkingen (wireframes, redesigns, customer journey's en clickable demo's). <br>	
					</div>
					<div id="dienst-D-button">
						<button class="button-pink" onclick="location.href='design-ux'">
							Meer over design &nbsp;&nbsp;>
						</button>
					</div>
				</div>			

				<div id="dienst-D" class="mar-left90">
					<!--<div id="dienst-D-image-academy">
						<a href="powerpoint-academy/">
							<img src="_images/ppt-academy/powerpoint-academy-logo.png" style="height:155px; margin-top:25px;" >
						</a>
					</div>
					-->
					<div id="dienst-D-titel">
						<h2 class="s.20 poppins-medium">Powerpoint Academy</h2>

					</div>
					<div id="dienst-D-text">
							Wil jouw team/bedrijf vaardiger worden in PowerPoint? Ik organiseer tailor made trainingen in PowerPoint.<br>		
					</div>
					<div id="dienst-D-button">
						<button class="button-pink" onclick="location.href='powerpoint-academy'">
							Train mijn bedrijf &nbsp;&nbsp;>
						</button>
					</div>
				</div>	
				<div id="space_10"></div>			
			</div>
		</div>
		<div id="space_100"></div>
		
		
		
		
		
<!--CASES  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<div id="cases-D">
			<div id="space_50"></div>
			
			<h2 class="s44 center">Mijn werk</h1>

			<div id="cases-D-content">
				<div id="space_50"></div>
				<div id="case-50">
					
					<a href="cases/case.php?jaar=2025&klant=alpine">
						<div id="image-home-D" style="background-image: url('_images/cases/uitgelicht/2025alpine.jpg'); background-size: 580px 609px;">
							&nbsp;
						</div>
						<div id="case-50-title">Alpine </div>
						<div id="case-50-text">Sales presentatie Alpine</div>	
					</a>
					
					<div id="space_100"></div>
					<div id="space_20"></div>
					<div id="space_10"></div>
					
					<a href="cases/case.php?jaar=2022&klant=jumbo">
						<div id="image-home-D" style="background-image: url('_images/cases/uitgelicht/2022jumbo.jpg'); background-size: 580px 609px;">
							&nbsp;
						</div>						
						<div id="case-50-title">Jumbo</div>
						<div id="case-50-text">App of the future Jumbo</div>	
					</a>
					

					
					<div id="space_100"></div>
					<div id="space_20"></div>
					<div id="space_10"></div>
					
					<a href="cases/case.php?jaar=2024&klant=holdfastandstipe">
						<div id="image-home-D" style="background-image: url('_images/cases/uitgelicht/2024holdfastandstipe.jpg'); background-size: 580px 609px;">
							&nbsp;
						</div>
						<div id="case-50-title">Holdfast and Stipe</div>
						<div id="case-50-text">Logo, huisstijl en product design</div>		
					</a>
				</div>
				
				<div id="case-50" class="case-50-margin">
					<div id="space_200"></div>
					<div id="space_50"></div>
					
					<a href="cases/case.php?jaar=2022&klant=pollmerino">
						<div id="image-home-D" style="background-image: url('_images/cases/uitgelicht/2022pollmerino.jpg'); background-size: 580px 609px;">
							&nbsp;
						</div>
						<div id="case-50-title">Poll Merino</div>
						<div id="case-50-text">Logo, huisstijl &#38; product design Poll Merino</div>
					</a>
					
					<div id="space_100"></div>
					<div id="space_20"></div>
					<div id="space_10"></div>
	
					<a href="cases/case.php?jaar=2023&klant=vanlanschotkempen">
						<div id="image-home-D" style="background-image: url('_images/cases/uitgelicht/2023vanlanschotkempen.jpg'); background-size: 580px 609px;">
							&nbsp;
						</div>
						<div id="case-50-title">Van Lanschot Kempen</div>
						<div id="case-50-text">Content strategie deck </div>		
					</a>					

					
					<div id="space_100"></div>
					<div id="space_20"></div>
					<div id="space_10"></div>
					
					<a href="cases/case.php?jaar=2024&klant=fittery">
						<div id="image-home-D" style="background-image: url('_images/cases/uitgelicht/2024fittery.jpg'); background-size: 580px 609px;">
							&nbsp;
						</div>
						<div id="case-50-title">Fittery</div>
						<div id="case-50-text">Web en app design </div>	
					</a>					
					
				</div>
				
				
			</div>
			
<!--grid weergave  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
			<!--
			<div id="cases-D-content">
				<div id="space_35"></div>

				<a href="cases/case.php?jaar=2022&klant=enbeyay">
				<div id="case-D">
					<div id="case-D-image" style="background-image: url('_images/cases/2022enbeyay-aanjager.jpg'); background-size: 290px;">
						<img src="../_images/cases/2022enbeyay-logo.jpg" style="width:80px; margin-left:10px; margin-top: 280px;">
					</div>
					<div id="case-D-client">
						Enbeyay 
					</div>					
					<div id="case-D-title">
						Hobby: infographical site van 40 jaar NBA statistieken
					</div>
				</div>
				</a>
				
				<a href="cases/case.php?jaar=2019&klant=leaseplan">
				<div id="case-D" class="mar-left40">
					<div id="case-D-image" style="background-image: url('_images/cases/2019leaseplan-aanjager.jpg'); background-size: 290px;">
						<img src="../_images/cases/2019leaseplan-logo.jpg" style="width:80px; margin-left:10px; margin-top: 280px;">
					</div>
					<div id="case-D-client">
						Leaseplan 
					</div>					
					<div id="case-D-title">
						Content en Social Media strategie LeasePlan
					</div>
				</div>
				</a>
				
				<a href="cases/case.php?jaar=2022&klant=farout">
				<div id="case-D" class="mar-left40">

					<div id="case-D-image" style="background-image: url('_images/cases/2022farout-aanjager.jpg'); background-size: 290px;">
						<img src="../_images/cases/2022farout-logo.jpg" style="width:80px; margin-left:10px; margin-top: 280px;">
					</div>
					<div id="case-D-client">
						Far Out
					</div>					
					<div id="case-D-title">
						Logo &#38; huisstijl Far Out
					</div>
				</div>
				</a>
				
				<a href="cases/case.php?jaar=2021&klant=postcodeloterij">
				<div id="case-D" class="mar-left40">
					<div id="case-D-image" style="background-image: url('_images/cases/2021postcodeloterij-aanjager.jpg'); background-size: 290px;">
						<img src="../_images/cases/2021postcodeloterij-logo.jpg" style="width:80px; margin-left:10px; margin-top: 280px;">
					</div>
					<div id="case-D-client">
						Postcode Loterij 
					</div>					
					<div id="case-D-title">
						Opzetten AB test kalender en AB test organisatie
					</div>
				</div>
				</a>					
				
				<div id="space_1"></div>
			</div>	

	
			<div id="cases-D-content">
				<a href="cases/case.php?jaar=2022&klant=mindbodyconcept">
				<div id="case-D">
					<div id="case-D-image" style="background-image: url('_images/cases/2022mindbodyconcept-aanjager.jpg'); background-size: 290px;">
						<img src="../_images/cases/2022mindbodyconcept-logo.jpg" style="width:80px; margin-left:10px; margin-top: 280px;">
					</div>
					<div id="case-D-client">
						MindBody Concept
					</div>					
					<div id="case-D-title">
						Logo &#38; huisstijl MindBody Concept
					</div>
				</div>
				</a>	
				
				<a href="cases/case.php?jaar=2019&klant=ns">
				<div id="case-D" class="mar-left40">
					<div id="case-D-image" style="background-image: url('_images/cases/2019ns-aanjager.jpg'); background-size: 290px;">
						<img src="../_images/cases/2019ns-logo.jpg" style="width:80px; margin-left:10px; margin-top: 280px;">
					</div>
					<div id="case-D-client">
						NS
					</div>					
					<div id="case-D-title">
						Uitwerking prototype nieuw ticketing platform NS
					</div>
				</div>
				</a>					

				<a href="cases/case.php?jaar=2022&klant=fittery">
				<div id="case-D" class="mar-left40">
					<div id="case-D-image" style="background-image: url('_images/cases/2022fittery-aanjager.jpg'); background-size: 290px;">
						<img src="../_images/cases/2022fittery-logo.jpg" style="width:80px; margin-left:10px; margin-top: 280px;">
					</div>
					<div id="case-D-client">
						Fittery
					</div>					
					<div id="case-D-title">
						Huisstijl en UX/UI voor nieuwe sport app Fittery
					</div>
				</div>
				</a>

				<a href="cases/case.php?jaar=2022&klant=futurepresents">
				<div id="case-D" class="mar-left40">
					<div id="case-D-image" style="background-image: url('_images/cases/2022futurepresents-aanjager.jpg'); background-size: 290px;">
						<img src="../_images/cases/2022futurepresents-logo.jpg" style="width:80px; margin-left:10px; margin-top: 280px;">
					</div>
					<div id="case-D-client">
						Future Presents
					</div>					
					<div id="case-D-title">
						Logo, huisstijl en UX/UI voor Future Presents
					</div>
				</div>
				</a>				
				
				
				<div id="space_10"></div>
			</div>
			-->
			
			<div id="space_100"></div>


			<div id="toon-alle-cases">
						<button class="button-pink" onclick="location.href='/cases'">
							Bekijk meer cases &nbsp;&nbsp;>
						</button>	
			</div>
			
	

			<div id="space_100"></div>
		</div>	
		
		
<!--KOFFIE   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<div id="koffie-D">
			<div id="koffie-D-content">
				<div id="space_100"></div>
				<div id="koffie-D-left">
					<h1 class="white">Koffie?</h1>
					Wil je eens praten over jouw strategische of design uitdagingen? Stuur een mail of WhatsApp bericht!
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
					<img src="_images/home/beige-logos/florius-beige.png" class="beige-logo animate-flicker1">
					<img src="_images/home/beige-logos/nu-beige.png" class="beige-logo animate-flicker2">
					<img src="_images/home/beige-logos/rijksoverheid-beige.png" class="beige-logo animate-flicker5">
					<img src="_images/home/beige-logos/vtwonen-beige.png" class="beige-logo animate-flicker3">
					<img src="_images/home/beige-logos/radio538-beige.png" class="beige-logo animate-flicker1">
					<img src="_images/home/beige-logos/vakantieveilingen-beige.png" class="beige-logo animate-flicker2">
					<img src="_images/home/beige-logos/ns-beige.png" class="beige-logo animate-flicker5">
					<img src="_images/home/beige-logos/postcodeloterij-beige.png" class="beige-logo animate-flicker2">
					<img src="_images/home/beige-logos/linda-beige.png" class="beige-logo animate-flicker3">
					<img src="_images/home/beige-logos/leaseplan-beige.png" class="beige-logo animate-flicker4">
					<img src="_images/home/beige-logos/at5-beige.png" class="beige-logo animate-flicker5">
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
		
<!--SHOWREEL PROMO   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    	
		<div id="showreel-promo-M">
			<a href="showreel/"><img src="_images/showreel-promo.png" style="width:100%;">	</a>
		</div>

--> 
		
<!--NAVIGATIE   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<div id="navigation-M">
			<div id="navigation-M-logo">
				<a href="../index.php"><img src="../_images/logo.png" style="width: 90px;"></a>
			</div>
			<div id="navigation-M-hamburger">
				<a href="../mobile-menu/"><img src="../_images/icons/hamburger.png" style="width:20px; margin-top:10px;"></a>
			</div>
		</div>
		

		
<!--MOBILE HEADER  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 			
		<div id="header-home-M">
			<div id="header-home-M-content">
				<div id="space_100"></div>
				<div id="space_50"></div>
				<div id="space_10"></div>
				<div id="space_10"></div>
				<div id="space_10"></div>
				<a href="mailto: roel@roelengel.nl"><u>roel@roelengel.nl</u></a><br>
				Ik ben Roel Engel en ik maak<br>kick-ass decks en designs.<br>
				<br>
				<span style="font-family: poppins-medium; font-size:20px;">/Freelance Strateeg</span><br>
				<span style="font-family: poppins-medium; font-size:20px;">/Freelance Designer</span>
			</div>
			<img src="_images/home/roel-mobile.jpg" style="width:100%">
		</div>
		
<!--MOBILE ERVARING  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 			
		<div id="ervaring-M">
			<div id="ervaring-M-content">
				<div id="space_35"></div>
				<div id="ervaring-M-content-top">
					<h1 class="white s30">Ervaring</h1>
					De afgelopen 19 jaar heb ik o.a. NU.nl, de Postcode Loterij en vtwonen mogen helpen in innovatie en digitalisering. In functies als Strategy Director, Business Consultant en Director of Digital Growth. 
				</div>
				<div id="ervaring-M-content-bottom1">
					Ik heb gewerkt voor o.a.
				</div>
				<div id="ervaring-M-content-bottom2">
					NU.nl<br>
					vtwonen<br>
					Rijksoverheid<br>
					LeasePlan<br>
					NS<br>
					Postcode Loterij<br>
					LINDA.<br>
					538<br>
					Vattenfall<br>
					Transavia<br>
					Van Lanschot Kempen
				</div>
			</div>
			<div id="space_50"></div>
		</div>

<!--MOBILE WAT IK DOE  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 			
		<div id="diensten-M">
			<div id="diensten-M-content">
				<div id="space_35"></div>
				<h1 class="s30">Wat ik doe</h1>
				</div>				
			</div>
		</div>
			
			
			
		<div id="diensten-M">
			<div id="diensten-M-content">
				<!-- ACCORDION MENU ALS BACKUP 
				<div class="accordionMenu">
					<!-- 1st menu  -->
				<!--
					<input type="radio" name="trg1" id="acc1" checked="checked">
					<label for="acc1">1/3 PowerPoint decks</label>
					<div class="content">
						<div class="inner">
							Een betere versie van jouw sales, strategie of investor pitch deck nodig? Met meer dan 15.000 slides op de teller help ik je met jouw deck; zowel de vorm als de inhoud.<br>
							<br>
							<button class="button-pink" onclick="location.href='presentatie-decks'">
								Meer over decks &nbsp;&nbsp;>
							</button>

						</div>
					</div>
					
					<div id="space_1"></div>
					<div id="accordion-line"></div>
					
					<!-- 2nd menu -->
					<!--
					<input type="radio" name="trg1" id="acc2">
					<label for="acc2">2/3 Design &#38; UX</label>
					<div class="content">
						<div class="inner">
							Ik design logo's, huisstijlen tot complete UX en UI uitwerkingen (wireframing, redesigns, customer journey mapping en clickable demo's). <br>
							<br>
							<button class="button-pink" onclick="location.href='design-UX'">
								Meer over design &nbsp;&nbsp;>
							</button>
						</div>
					</div>
					
					<div id="space_1"></div>
					<div id="accordion-line"></div>
					
					<!-- 3rd menu -->
					<!--
					<input type="radio" name="trg1" id="acc3">
					<label for="acc3">3/3 PowerPoint Academy</label>
					<div class="content">
						<div class="inner">
							Loop je deals mis door slechte sales presentaties? Update jouw team je met gedrochten van slides? Misschien is het dan tijd voor de PowerPoint Academy.<br>
							<br>
							<button class="button-pink" onclick="location.href='powerpoint-academy'">
								Meer over de Academy &nbsp;&nbsp;>
							</button>							
						</div>
					</div>
					
					<div id="space_1"></div>
					<div id="accordion-line"></div>
				</div>
				-->
			
				<!--
				<a href="presentatie-decks/">
				-->
					<!--<img src="_images/home/dienst-decks.jpg" style="width:80%">-->
				<!--	<div id="ppt-background">
						<div class="container3">
						  <figure>
							<div id="compare3"></div>
						  </figure>
						  <input oninput="beforeAfter3()" onchange="beforeAfter3()" type="range" min="0" max="100" value="50" id="slider3"/>
						</div>
					</div>	
				</a>
				<div id="space_20"></div>
				-->
				<span style="font-family: poppins-medium; font-size:20px;">PowerPoint decks</span>
				<div id="space_10"></div>
				Met meer dan 10.000 slides op de teller help ik je om een perfect strategie, sales of investor deck te maken. Zowel de vorm als de inhoud.<br>
				<br>
				<button class="button-white-black-line" onclick="location.href='presentatie-decks'">
					Meer over decks &nbsp;&nbsp;>
				</button>
				
				<div id="space_50"></div>
				<div id="space_20"></div>
				<div id="space_10"></div>
				
				<!--
				<a href="design-ux/">-->
					<!--<img src="_images/home/dienst-design.jpg" style="width:80%">-->
				<!--	<div id="ppt-background">
						<div class="container5">
						  <figure>
							<div id="compare5"></div>
						  </figure>
						  <input oninput="beforeAfter5()" onchange="beforeAfter5()" type="range" min="0" max="100" value="50" id="slider5"/>
						</div>
					</div>					
				</a>
				<div id="space_20"></div>
				-->
				<span style="font-family: poppins-medium; font-size:20px;">Design &#38; UX</span>
				<div id="space_10"></div>
				Ik design logo's, huisstijlen tot complete UX en UI uitwerkingen (wireframes, redesigns, customer journey mapping en clickable demo's). <br>
				<br>
				<button class="button-white-black-line" onclick="location.href='design-ux'">
					Meer over design &nbsp;&nbsp;>
				</button>
				
				<div id="space_50"></div>
				<div id="space_20"></div>
				<div id="space_10"></div>
				
				<!--
				<div id="dienst-academy-M">
					<div id="dienst-academy-M-left">
						<div id="dienst-academy-M-left-text">
							<div id="space_10"></div>
							<span style="font-family: poppins-medium; font-size:20px;">PowerPoint Academy</span>
							<div id="space_10"></div>
							Wil jouw team/bedrijf vaardiger worden in PowerPoint? Ik organiseer tailor made trainingen in PowerPoint.<br>
							<br>
							<button class="button-dark-white-line" onclick="location.href='powerpoint-academy'">
								Lees meer &nbsp;&nbsp;>
							</button>
							<div id="space_10"></div>
						</div>
					</div>
					<div id="dienst-academy-M-right">
						<img src="_images/ppt-academy/powerpoint-academy-logo.png" style="width: 125px;">
					</div>
					-->
				
				<span style="font-family: poppins-medium; font-size:20px;">PowerPoint Academy</span>
				<div id="space_10"></div>
				Wil jouw team/bedrijf vaardiger worden in PowerPoint? Ik organiseer tailor made trainingen in PowerPoint.<br>
				<br>
				<button class="button-white-black-line" onclick="location.href='powerpoint-academy'">
					Lees meer &nbsp;&nbsp;>
				</button>
				
				<div id="space_20"></div>
				<div id="space_10"></div>				
				
				</div>
			
			
			</div>
		</div>
			
			
			
			
			
			
			
				
		<div id="space_50"></div>
		
		
<!--MOBILE CASES  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<div id="space_20"></div>
		<div id="cases-titel-M">
			<h1 class="s30">Mijn werk</h1>
		</div>
		<a href="cases/case.php?jaar=2025&klant=alpine">
			<img src="_images/cases/uitgelicht/2025alpine.jpg" style="width:100%;">
			<div id="case-M-big-title">Alpine</div>
			<div id="case-M-big-text">Nieuwe sales presentatie Alpine</div>	
		</a>

		<div id="space_50"></div>
		<div id="space_10"></div>

		<a href="cases/case.php?jaar=2022&klant=pollmerino">
			<img src="_images/design-ux/case-pollM.jpg" style="width:100%;">
			<div id="case-M-big-title">Poll Merino</div>
			<div id="case-M-big-text">Logo, huisstijl &#38; product design Poll Merino</div>
		</a>
	

		<div id="space_50"></div>
		<div id="space_10"></div>
	
		<a href="cases/case.php?jaar=2023&klant=vanlanschotkempen">
			<img src="_images/cases/uitgelicht/2023vanlanschotkempen.jpg" style="width:100%;">
			<div id="case-M-big-title">Van Lanschot Kempen</div>
			<div id="case-M-big-text">Content strategie deck</div>		
		</a>

		<div id="space_50"></div>
		<div id="space_10"></div>

		<a href="cases/case.php?jaar=2022&klant=jumbo">
			<img src="_images/cases/uitgelicht/2022jumbo.jpg" style="width:100%;">
			<div id="case-M-big-title">Jumbo</div>
			<div id="case-M-big-text">App of the future Jumbo</div>		
		</a>

		<div id="space_50"></div>
		<div id="space_10"></div>

		<a href="cases/case.php?jaar=2024&klant=holdfastandstipe">
			<img src="_images/cases/uitgelicht/2024holdfastandstipe.jpg" style="width:100%;">
			<div id="case-M-big-title">Holdfast and Stipe</div>
			<div id="case-M-big-text">Logo, huisstijl en product design</div>	
		</a>

		<div id="space_50"></div>
		<div id="space_10"></div>

		<a href="cases/case.php?jaar=2024&klant=fittery">
			<img src="_images/cases/uitgelicht/2024fittery.jpg" style="width:100%;">
			<div id="case-M-big-title">Fittery</div>
			<div id="case-M-big-text">Web en app design</div>	
		</a>

		<div id="space_50"></div>
		<div id="space_10"></div>

<!--MOBILE CASES GALLERY BACKUP ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
	<!--<div id="case-gallery-M">	
			<a href="cases/case.php?jaar=2022&klant=farout">
			<div id="case-gallery-M-item">
				<div id="case-gallery-M-image">
					<img src="../_images/cases/2022farout-aanjager.jpg" style="width:100%;">				   
				</div>
				<div id="case-gallery-M-logo">
					<img src="../_images/cases/2022farout-logo.jpg" style="width:60px;">
				</div>
				<div id="case-gallery-M-klant">
					Far Out Campers
				</div>								
				<div id="case-gallery-M-title">
					Logo &#38; huisstijl Far Out Campers
				</div>
			</div>
			</a>
			<div id="case-gallery-M-space"><img src="_images/pixel.png"></div>
			<a href="cases/case.php?jaar=2022&klant=enbeyay">
			<div id="case-gallery-M-item">
				<div id="case-gallery-M-image">
					<img src="../_images/cases/2022enbeyay-aanjager.jpg" style="width:100%;">				   
				</div>
				<div id="case-gallery-M-logo">
					<img src="../_images/cases/2022enbeyay-logo.jpg" style="width:60px;">
				</div>
				<div id="case-gallery-M-klant">
					Enbeyay
				</div>								
				<div id="case-gallery-M-title">
					Hobby: site met toffe weergaves van 40 jaar NBA
				</div>
			</div>
			</a>			
		</div>
				
		<div id="case-gallery-M">	
			<a href="cases/case.php?jaar=2019&klant=leaseplan">
			<div id="case-gallery-M-item">
				<div id="case-gallery-M-image">
					<img src="../_images/cases/2019leaseplan-aanjager.jpg" style="width:100%;">				   
				</div>
				<div id="case-gallery-M-logo">
					<img src="../_images/cases/2019leaseplan-logo.jpg" style="width:60px;">
				</div>
				<div id="case-gallery-M-klant">
					LeasePlan
				</div>								
				<div id="case-gallery-M-title">
					Content en Social Media strategie LeasePlan
				</div>
			</div>
			</a>
			<div id="case-gallery-M-space"><img src="_images/pixel.png"></div>
			<a href="cases/case.php?jaar=2022&klant=fittery">
			<div id="case-gallery-M-item">
				<div id="case-gallery-M-image">
					<img src="../_images/cases/2022fittery-aanjager.jpg" style="width:100%;">				   
				</div>
				<div id="case-gallery-M-logo">
					<img src="../_images/cases/2022fittery-logo.jpg" style="width:60px;">
				</div>
				<div id="case-gallery-M-klant">
					Fittery
				</div>								
				<div id="case-gallery-M-title">
					Huisstijlen UX/UI voor nieuwe sport app Fittery
				</div>
			</div>
			</a>			
		</div>		
	
		<div id="case-gallery-M">	
			<a href="cases/case.php?jaar=2019&klant=ns">
			<div id="case-gallery-M-item">
				<div id="case-gallery-M-image">
					<img src="../_images/cases/2019ns-aanjager.jpg" style="width:100%;">				   
				</div>
				<div id="case-gallery-M-logo">
					<img src="../_images/cases/2019ns-logo.jpg" style="width:60px;">
				</div>
				<div id="case-gallery-M-klant">
					NS
				</div>								
				<div id="case-gallery-M-title">
					Uitwerking nieuw ticketing platform NS
				</div>
			</div>
			</a>
			<div id="case-gallery-M-space"><img src="_images/pixel.png"></div>
			<a href="cases/case.php?jaar=2021&klant=postcodeloterij">
			<div id="case-gallery-M-item">
				<div id="case-gallery-M-image">
					<img src="../_images/cases/2021postcodeloterij-aanjager.jpg" style="width:100%;">				   
				</div>
				<div id="case-gallery-M-logo">
					<img src="../_images/cases/2021postcodeloterij-logo.jpg" style="width:60px;">
				</div>
				<div id="case-gallery-M-klant">
					Postcode Loterij
				</div>								
				<div id="case-gallery-M-title">
					Opzetten AB test kalender en AB test organisatie
				</div>
			</div>
			</a>			
		</div>	
-->
	
		<div id="toon-alle-cases">
			<button class="button-pink" onclick="location.href='/cases'">
				Bekijk meer cases &nbsp;&nbsp;>
			</button>	
		</div>	
		
		<div id="space_50"></div>
		
<!--KOFFIE MOBILE  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 			
		<div id="koffie-M">
			<div id="koffie-M-content">
				<div id="space_50"></div>
				<h1 class="white s30">Koffie?</h1>
				Wil je eens praten over jouw strategische of design uitdagingen? Stuur een mail of WhatsApp bericht!
				<div id="space_20"></div>	
				<a href="mailto: roel@roelengel.nl"><u>roel@roelengel.nl</u></a>
				<div id="space_5"></div>
				<a href="https://wa.me/31623566816"><u>06 23 566 816 (whatsapp)</u></a>
				<div id="space_10"></div>
			</div>

			<div id="space_100"></div>
		</div>			
		
		
		
<?
		}
?>
		

	
	</body>
</html>
