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
		<title>Roel Engel | PowerPoint Academy </title>
		<link type="text/css" rel="stylesheet" href="../style.css"/>
		<link type="text/css" rel="stylesheet" href="style-ppt-academy.css"/>
		
		<meta property="og:title" content="PowerPoint Academy">
		<meta property="og:image" content="http://www.roelengel.nl/_images/ppt-academy/facebook-image.jpg">
		
		
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Newsreader">
		
		<!--lottie files   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
		
		<!--prijs indicatie calculatie  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
<?		
			$deelnemers = $_GET['deelnemers'];

			//check of het nummer goed is en maak t tussen de 10 en 100 en rounded
			if (is_numeric($deelnemers)) {
				if($deelnemers < "1"){$deelnemers = "10";}
				if($deelnemers > "100"){$deelnemers = "100";}
			}
			else{
				$deelnemers = "20";
			}
			$deelnemers = round($deelnemers);

			//uurtarief
			$uurtarief = "150";
			
			//bereken aantal keren, uren en euros
			//1 voorbereiding stuk theorie
			$een_uureenheid = "14";
			$een_bedrag = $een_uureenheid * $uurtarief;
			$een_bedrag_punt = number_format($een_bedrag);
			
			//2 theorie presentatie per 10 personen
			$twee_keren = $deelnemers / 10;
				if($twee_keren > "0" && $twee_keren <= "1" ){$twee_keren = "1";}
				if($twee_keren > "1" && $twee_keren <= "2" ){$twee_keren = "2";}
				if($twee_keren > "2" && $twee_keren <= "3" ){$twee_keren = "3";}
				if($twee_keren > "3" && $twee_keren <= "4" ){$twee_keren = "4";}
				if($twee_keren > "4" && $twee_keren <= "5" ){$twee_keren = "5";}
				if($twee_keren > "5" && $twee_keren <= "6" ){$twee_keren = "6";}
				if($twee_keren > "6" && $twee_keren <= "7" ){$twee_keren = "7";}
				if($twee_keren > "7" && $twee_keren <= "8" ){$twee_keren = "8";}
				if($twee_keren > "8" && $twee_keren <= "9" ){$twee_keren = "9";}
				if($twee_keren > "9" && $twee_keren <= "10" ){$twee_keren = "10";}
			$twee_uureenheid = "4";
			$twee_bedrag = $twee_keren * $twee_uureenheid * $uurtarief;
			$twee_bedrag_punt = number_format($twee_bedrag);
			
			//3 feedback maken per huiswerk deck
			$drie_keren = $deelnemers / 2;
				$drie_keren = round($drie_keren);
			$drie_uureenheid = "1";
			$drie_bedrag = $drie_keren * $drie_uureenheid * $uurtarief;
			$drie_bedrag_punt = number_format($drie_bedrag);
		
			//4 itratie maken per huiswerk deck
			$vier_keren = $deelnemers / 2;
				$vier_keren = round($vier_keren);
			$vier_uureenheid = "1";
			$vier_bedrag = $vier_keren * $vier_uureenheid * $uurtarief;
			$vier_bedrag_punt = number_format($vier_bedrag);			
	
			//5 feedbacksessie
			$vijf_keren = $deelnemers / 2;
				$vijf_keren = round($vijf_keren);
			$vijf_uureenheid = "1";
			$vijf_bedrag = $vijf_keren * $vijf_uureenheid * $uurtarief;
			$vijf_bedrag_punt = number_format($vijf_bedrag);	
			
			//Totalen
			$totaal_bedrag = $een_bedrag + $twee_bedrag + $drie_bedrag + $vier_bedrag + $vijf_bedrag;
			$totaal_bedrag_punt = number_format($totaal_bedrag);	
			$bedrag_per_deelnemer = $totaal_bedrag / $deelnemers;
			$bedrag_per_deelnemer = round($bedrag_per_deelnemer);
?>
		
	
		
	
	
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
						<a href="../powerpoint-academy" class="navigation-D-active2">PowerPoint Academy</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
						<a href="../over-mij">Over mij</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
						<a href="https://www.linkedin.com/in/roelengel/" target="_blank">LinkedIn</a>
					</div>
					<div id="navigation-D-urls-bottom">
						<div id="navigation-D-urls-links">
									<a href="../presentatie-decks/" >Decks</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
		
		<a href="../contact/index.php?type=academy">
		<div id="chat-D">
			<div id="chat-D-ballon">
				<div id="chat-D-ballon-tekst">
						Kan jouw bedrijf wel een PowerPoint training gebruiken?
				</div>
			</div>
			<div id="chat-D-foto">
				<img src="../_images/profile-picture.png" style="width:100px; ">
			</div>
		</div>
		</a>

		
		
		
<!--HEADER   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<div id="header-D">
			<div id="space_100"></div>
			<div id="space_50"></div>
			<div id="header-D-content">
				<div id="header-D-content-title">
					<h1 class="s44 white">"Do you suck at PowerPoint?"</h1>
				</div>

				<div id="header-D-content-text">
					<img src="../_images/ppt-academy/powerpoint-academy-logo.png" style="width:280px; clear:both;"><br><br>
					Loop je deals mis door slechte sales presentaties? Update jouw team je met gedrochten van slides? Loop je vast in jouw investors deck? 
					Misschien is het dan tijd voor de PowerPoint Academy.
				</div>

			</div>
			<div id="header-D-image">
				<div id="space_50"></div>
				<lottie-player src="https://assets3.lottiefiles.com/packages/lf20_dgvlk8pz.json" background="transparent"  speed="1"  style="width: 40px; height: 40px; margin: auto;" loop  autoplay></lottie-player>
				<div id="space_20"></div>
			</div>
			<div id="space_50"></div>			
		</div>
		
<!--SUMMARY  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<div id="summary-D">
			<div id="summary-D-content">
				<div id="space_100"></div>
				<div id="kickass-decks-D-content-title">
					<h1 class="s44 line15">Snelle &#38; pragmatische<br>PowerPoint training</h1>
				</div>
				<div id="summary-D-content-text">
					In een pragmatische training leer ik jouw team of bedrijf hoe storytelling werkt, hoe je heldere en overtuigende slides bouwt  en hoe je sneller in PowerPoint werkt.
				</div>
				<div id="space_50"></div>
				<button class="button-grey-black-line" onclick="location.href='#watgajeleren-D'">
					Wat ga je leren? &nbsp;&nbsp;>
				</button>
				&nbsp;&nbsp;&nbsp;
				<button class="button-grey-black-line" onclick="location.href='#prijs-D-anchor'">
					Prijsindicatie &nbsp;&nbsp;>
				</button>
				&nbsp;&nbsp;&nbsp;
				<button class="button-grey-black-line" onclick="location.href='#prijs-D-2-tag'">
					Programma &nbsp;&nbsp;>
				</button>

				&nbsp;&nbsp;&nbsp;				
				<button class="button-pink-todark-no-line" onclick="location.href='../contact/index.php?type=academy'">
					Neem contact op &nbsp;&nbsp;>
				</button>	
				<div id="space_100"></div>
			</div>
		</div>
		
		
<!--WAT GA JE LEREN  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 
		<div id="watgajeleren-D">
			<div id="watgajeleren-D-content">		
				
				<div id="space_100"></div>

			<!--STORYTELLING  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 				
				<div id="watgajeleren-D-blok-rechts" class="storytelling">
					<div id="watgajeleren-D-blok-rechts-titel" >
						Leer hoe storytelling werkt
					</div>
					<div id="watgajeleren-D-storytelling">
						<div id="space_100"></div>
						
						<div id="slide-small-D">
							<div id="slide-small-D-text1"></div><div id="slide-small-D-text2"></div><div id="slide-small-D-text3"></div><div id="slide-small-D-text4"></div><div id="slide-small-D-text5"></div>
						</div>
						<div id="slide-small-D-space"></div>
						<div id="slide-small-D">
							<div id="slide-small-D-text1"></div><div id="slide-small-D-text2"></div><div id="slide-small-D-text3"></div><div id="slide-small-D-text4"></div><div id="slide-small-D-text5"></div>
						</div>						
						<div id="slide-small-D-space"></div>
						<div id="slide-small-D-grey-empty">
							<div id="slide-small-D"  class="slide-small-D-ani1" style="margin-left:-2px; margin-top:-2px;">
								<div id="slide-small-D-text1"></div><div id="slide-small-D-text2"></div><div id="slide-small-D-text3"></div><div id="slide-small-D-text4"></div><div id="slide-small-D-text5"></div>
							</div>								
						</div>

						
						<div id="space_20"></div>
						
						<div id="slide-small-D-space2"></div>
						<div id="slide-small-D" class="slide-small-D-ani2">
							<div id="slide-small-D-text1"></div><div id="slide-small-D-text2"></div><div id="slide-small-D-text3"></div><div id="slide-small-D-text4"></div><div id="slide-small-D-text5"></div>
						</div>
						<div id="slide-small-D-space"></div>
						<div id="slide-small-D" class="slide-small-D-ani3">
							<div id="slide-small-D-text1"></div><div id="slide-small-D-text2"></div><div id="slide-small-D-text3"></div><div id="slide-small-D-text4"></div><div id="slide-small-D-text5"></div>
						</div>					
					</div>
				</div>
				<div id="space_20"></div>
				<div id="watgajeleren-D-subtext-rechts">
					Leer hoe je een goede flow in jouw verhaal krijgt en hoe de kernboodschap blijft hangen. Dit doen we aan de hand van de pyramid principle en andere slimme modellen.
				</div>
				
				<div id="space_100"></div>
				
			<!--SLIDE OPBOUWEN  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 				
				<div id="watgajeleren-D-blok-links" class="slide-opbouwen">
					<div id="watgajeleren-D-slide-opbouwen">
						<div id="slide-D-text-container">
							<div id="slide-D-text1"></div><div id="slide-D-text2"></div><div id="slide-D-text3"></div>
						</div>
						<div id="slide-D-text-container">
							<div id="slide-D-text4"></div><div id="slide-D-text5"></div>
						</div>
						<div id="space_50"></div>
						<div id="slide-D-block-container">
							<div id="slide-D-block">
								<div id="slide-D-block-image">
									<img src="../_images/ppt-academy/image-icon-black.png" style="width:30px; margin-top: 60px;">
								</div>
								<div id="slide-D-block-title" class="slide-D-ani1">
									Titel 1
								</div>
								<div id="slide-D-block-tags" class="slide-D-ani2">
									<div id="slide-D-block-tag">&nbsp;</div>
									<div id="slide-D-block-tag-space">&nbsp;</div>
									<div id="slide-D-block-tag">&nbsp;</div>
									<div id="slide-D-block-tag-space">&nbsp;</div>
									<div id="slide-D-block-tag">&nbsp;</div>
								</div>
							</div>
							
							<div id="slide-D-block-space">&nbsp;</div>
							
							<div id="slide-D-block" class="slide-D-ani3">
								<div id="slide-D-block-image">
									<img src="../_images/ppt-academy/image-icon-black.png" style="width:30px; margin-top: 60px;">
								</div>
								<div id="slide-D-block-title">
									Titel 2
								</div>
								<div id="slide-D-block-tags">
									<div id="slide-D-block-tag">&nbsp;</div>
									<div id="slide-D-block-tag-space">&nbsp;</div>
									<div id="slide-D-block-tag">&nbsp;</div>
									<div id="slide-D-block-tag-space">&nbsp;</div>
									<div id="slide-D-block-tag">&nbsp;</div>
								</div>
							</div>							
							
							<div id="slide-D-block-space">&nbsp;</div>
							
							<div id="slide-D-block" class="slide-D-ani4">
								<div id="slide-D-block-image">
									<img src="../_images/ppt-academy/image-icon-black.png" style="width:30px; margin-top: 60px;">
								</div>
								<div id="slide-D-block-title">
									Titel 3
								</div>
								<div id="slide-D-block-tags">
									<div id="slide-D-block-tag">&nbsp;</div>
									<div id="slide-D-block-tag-space">&nbsp;</div>
									<div id="slide-D-block-tag">&nbsp;</div>
									<div id="slide-D-block-tag-space">&nbsp;</div>
									<div id="slide-D-block-tag">&nbsp;</div>
								</div>
							</div>	
						
						</div>

					</div>
				</div>
				<div id="watgajeleren-D-blok-links-titel" >
					Leer hoe je een slide opbouwt
				</div>
				<div id="space_20"></div>
				<div id="watgajeleren-D-subtext-links">
					Bouw slides die blijven hangen. Leer hoe je overzichtelijke slides bouwt en wanneer je tekst, foto, video, grafieken etc. gebruikt.
				</div>				
				<div id="space_100"></div>
				
			<!--SLIDE MOOI MAKEN  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 				
				<div id="watgajeleren-D-blok-rechts" class="slide-mooi">
					<div id="watgajeleren-D-blok-rechts-titel" >
						Leer hoe je elke slide perfect designt
					</div>
					<div id="watgajeleren-D-slide-designen">
						<div id="slide-D-text-container">
							<div id="slide-D-text1"></div><div id="slide-D-text2"></div><div id="slide-D-text3"></div>
						</div>
						<div id="slide-D-text-container">
							<div id="slide-D-text4"></div><div id="slide-D-text5"></div>
						</div>
						<div id="space_50"></div>
						<div id="slide-D-block-container">
							<div id="slide-D-block2">
								<div id="slide-D-block2-image">
									<div id="slide-D-block2-image-circlebg">
										<div class="blob-D1">
											<svg xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 310 350"> <path d="M156.4,339.5c31.8-2.5,59.4-26.8,80.2-48.5c28.3-29.5,40.5-47,56.1-85.1c14-34.3,20.7-75.6,2.3-111  c-18.1-34.8-55.7-58-90.4-72.3c-11.7-4.8-24.1-8.8-36.8-11.5l-0.9-0.9l-0.6,0.6c-27.7-5.8-56.6-6-82.4,3c-38.8,13.6-64,48.8-66.8,90.3c-3,43.9,17.8,88.3,33.7,128.8c5.3,13.5,10.4,27.1,14.9,40.9C77.5,309.9,111,343,156.4,339.5z"/>
  											</svg> 
										</div>
									</div>
									<div id="slide-D-block2-image-circletext">#1</div>
									<div id="slide-D-block2-image-image" class="blik-D-bounce-ani1">
										<img src="../_images/ppt-academy/blik1.png" style="height:165px;  transform: rotate(-20deg);">
									</div>
								</div>
								<div id="slide-D-block2-title">
									Space Invaders
								</div>
								<div id="slide-D-block2-tags">
									<div id="slide-D-block2-tag1">&nbsp;</div>
									<div id="slide-D-block-tag-space">&nbsp;</div>
									<div id="slide-D-block2-tag1">&nbsp;</div>
									<div id="slide-D-block-tag-space">&nbsp;</div>
									<div id="slide-D-block2-tag1">&nbsp;</div>
								</div>
							</div>
							
							<div id="slide-D-block-space">&nbsp;</div>
							
							<div id="slide-D-block2">
								<div id="slide-D-block2-image">
									<div id="slide-D-block2-image-circlebg">
										<div class="blob-D2">
											<svg xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 310 350"> <path d="M156.4,339.5c31.8-2.5,59.4-26.8,80.2-48.5c28.3-29.5,40.5-47,56.1-85.1c14-34.3,20.7-75.6,2.3-111  c-18.1-34.8-55.7-58-90.4-72.3c-11.7-4.8-24.1-8.8-36.8-11.5l-0.9-0.9l-0.6,0.6c-27.7-5.8-56.6-6-82.4,3c-38.8,13.6-64,48.8-66.8,90.3c-3,43.9,17.8,88.3,33.7,128.8c5.3,13.5,10.4,27.1,14.9,40.9C77.5,309.9,111,343,156.4,339.5z"/>
  											</svg> 
										</div>
									</div>
									<div id="slide-D-block2-image-circletext">#2</div>
									<div id="slide-D-block2-image-image" class="blik-D-bounce-ani2">
										<img src="../_images/ppt-academy/blik2.png" style="height:165px;  transform: rotate(-20deg);">
									</div>
								</div>
								<div id="slide-D-block2-title">
									Nachtuil
								</div>
								<div id="slide-D-block2-tags">
									<div id="slide-D-block2-tag2">&nbsp;</div>
									<div id="slide-D-block-tag-space">&nbsp;</div>
									<div id="slide-D-block2-tag2">&nbsp;</div>
									<div id="slide-D-block-tag-space">&nbsp;</div>
									<div id="slide-D-block2-tag2">&nbsp;</div>
								</div>
							</div>
							
							<div id="slide-D-block-space">&nbsp;</div>
							
							<div id="slide-D-block2">
								<div id="slide-D-block2-image">
									<div id="slide-D-block2-image-circlebg">
										<div class="blob-D3">
											<svg xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 310 350"> <path d="M156.4,339.5c31.8-2.5,59.4-26.8,80.2-48.5c28.3-29.5,40.5-47,56.1-85.1c14-34.3,20.7-75.6,2.3-111  c-18.1-34.8-55.7-58-90.4-72.3c-11.7-4.8-24.1-8.8-36.8-11.5l-0.9-0.9l-0.6,0.6c-27.7-5.8-56.6-6-82.4,3c-38.8,13.6-64,48.8-66.8,90.3c-3,43.9,17.8,88.3,33.7,128.8c5.3,13.5,10.4,27.1,14.9,40.9C77.5,309.9,111,343,156.4,339.5z"/>
  											</svg> 
										</div>
									</div>
									<div id="slide-D-block2-image-circletext">#3</div>
									<div id="slide-D-block2-image-image" class="blik-D-bounce-ani3">
										<img src="../_images/ppt-academy/blik3.png" style="height:165px;  transform: rotate(-20deg);">
									</div>
								</div>
								<div id="slide-D-block2-title">
									Sand Storm
								</div>
								<div id="slide-D-block2-tags">
									<div id="slide-D-block2-tag3">&nbsp;</div>
									<div id="slide-D-block-tag-space">&nbsp;</div>
									<div id="slide-D-block2-tag3">&nbsp;</div>
									<div id="slide-D-block-tag-space">&nbsp;</div>
									<div id="slide-D-block2-tag3">&nbsp;</div>
								</div>
							</div>							
							
							
						</div>

					
					</div>
				</div>
				<div id="space_20"></div>
				<div id="watgajeleren-D-subtext-rechts">
					 Hoe suf het ook klinkt; slide decks die er goed uit zien resoneren beter.<br>Leer hoe je jouw slides die extra finesse meegeeft om een<br>slide deck te perfectioneren.
				</div>
				
				<div id="space_100"></div>				
			</div>
		</div>
		
<!--REVIEW  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 
		<div id="review-D">
			<div id="review-D-content">	
				<div id="review-D-block">
					<div id="space_50"></div>
					<img src="../_images/ppt-academy/talpa.png" style="width:130px;">
					<div id="space_10"></div>
					<div id="review-D-block-text">
						"Een uitstekende powerpoint training op maat! Relevant, praktisch en nuttig!"
					</div>
					<div id="space_5"></div>
					<div id="review-D-block-persoon">
						<span style="font-size:14px;">Jean van Rijkswijk - Senior HR Business Partner</span>
					</div>
					<div id="space_10"></div>
					<div id="review-D-block-stars"><img src="../_images/ppt-academy/stars45.png" style="width:120px;"></div>
				
				</div>
				
				<div id="prijs-D-anchor"></div>
			</div>
		</div>

<!--PRIJS  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 		

		<div id="prijs-D">
			<div id="space_100"></div>
			<div id="prijs-D-content">	
				<div id="prijs-D-1">
					Krijg een prijsindicatie  
				</div>
				<div id="prijs-D-2">
					<div id="prijs-D-2-input">
						<div id="prijs-D-2-input1">Aantal deelnemers:</div>
						<form action="?deelnemers=#prijs-D-anchor" method="get">
							<div id="prijs-D-2-input2"><input type="number" inputmode="numeric" pattern="[0-9]*"  name="deelnemers" value="<? if ($deelnemers == ""){echo "20";}else{ echo $deelnemers;}?>" class="input-field1" style="width:77px;"></input></div>
							<div id="prijs-D-2-input3"><button type="submit" class="button-pink-no-line">Bereken</button></div>
						</form>
					</div>
				</div>
				<div id="prijs-D-2">
					
								<!--

					<div id="prijs-D-2-tabel">
						<div id="space_50"></div>
						<div id="prijs-D-2-tabel1">Voorbereiding theorie - customizen van training voor klant</div>
						<div id="prijs-D-2-tabel2">1x</div>
						<div id="prijs-D-2-tabel3"><? echo $een_uureenheid;?> uur</div>
						<div id="prijs-D-2-tabel4">€ <? echo $een_bedrag_punt;?></div>
					</div>
					<div id="prijs-D-2-tabel">
						<div id="space_10"></div>
						<div id="prijs-D-2-tabel1">Theorie: training in groepen van 10 deelnemers</div>
						<div id="prijs-D-2-tabel2"><? echo $twee_keren;?>x</div>
						<div id="prijs-D-2-tabel3"><? echo $twee_uureenheid;?> uur</div>
						<div id="prijs-D-2-tabel4">€ <? echo $twee_bedrag_punt;?></div>
					</div>	
					<div id="prijs-D-2-tabel">
						<div id="space_50"></div>
						<div id="prijs-D-2-tabel1">Feedback verzamelen op huiswerk decks - per 2 deelnemers</div>
						<div id="prijs-D-2-tabel2"><? echo $drie_keren;?>x</div>
						<div id="prijs-D-2-tabel3"><? echo $drie_uureenheid;?> uur</div>
						<div id="prijs-D-2-tabel4">€ <? echo $drie_bedrag_punt;?></div>
					</div>
					<div id="prijs-D-2-tabel">
						<div id="space_10"></div>
						<div id="prijs-D-2-tabel1">Iteratie 10-15 slides op huiswerk decks - per 2 deelnemers</div>
						<div id="prijs-D-2-tabel2"><? echo $vier_keren;?>x</div>
						<div id="prijs-D-2-tabel3"><? echo $vier_uureenheid;?> uur</div>
						<div id="prijs-D-2-tabel4">€ <? echo $vier_bedrag_punt;?></div>
					</div>	
					<div id="prijs-D-2-tabel">
						<div id="space_50"></div>
						<div id="prijs-D-2-tabel1">Feedback sessie - per 2 deelnemers</div>
						<div id="prijs-D-2-tabel2"><? echo $vijf_keren;?>x</div>
						<div id="prijs-D-2-tabel3"><? echo $vijf_uureenheid;?> uur</div>
						<div id="prijs-D-2-tabel4">€ <? echo $vijf_bedrag_punt;?></div>
						<div id="space_20"></div>						
					</div>	
					<div id="prijs-D-2-tabel-line"></div>

-->
					<div id="space_35"></div>
					<div id="prijs-D-2-tabel-total">
						<div id="space_20"></div>
						<div id="prijs-D-2-tabel1">Totale prijsindicatie - excl. BTW</div>
						<div id="prijs-D-2-tabel2">&nbsp;</div>
						<div id="prijs-D-2-tabel3">&nbsp;</div>
						<div id="prijs-D-2-tabel4">€ <? echo $totaal_bedrag_punt;?></div>
					</div>	
					
					<div id="prijs-D-2-tabel-total-deelnemer">
						<div id="space_20"></div>
						<div id="prijs-D-2-tabel1">Per deelnemer - excl. BTW</div>
						<div id="prijs-D-2-tabel2">&nbsp;</div>
						<div id="prijs-D-2-tabel3">&nbsp;</div>
						<div id="prijs-D-2-tabel4"><span style="font-size:34px">€ <? echo $bedrag_per_deelnemer;?></span></div>
					</div>						
					
					<!--<div id="space_20"></div>
					<div id="prijs-D-2-tag">
						<div id="prijs-D-2-tag-tekst">per deelnemer<br><span style="font-family: poppins-bold; font-size: 30px;">€ <? echo $bedrag_per_deelnemer;?></span></div>
					</div>
					-->
					<div id="space_50"></div>
				</div>
			
			</div>
			<div id="space_50"></div>
		</div>		
<!--PROGRAMMA  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 		

		<div id="programma-D">
			<div id="space_50"></div>
			<div id="programma-D-content">		
				<div id="programma-D-1">
					Programma;<br>een investering van 1,5 dag
				</div>
				<div id="programma-D-2">
					<div id="programma-D-dagdeel">
						<div id="programma-D-2a">
							<u>Onderdeel</u>
						</div>
						<div id="programma-D-2b">
							<u>Programma</u>
						</div>						
					</div>
					<div id="space_20"></div>
					
					<div id="programma-D-dagdeel">
						<div id="programma-D-2a">
							<div id="programma-D-2a-bol">&nbsp;</div>
							<div id="programma-D-2a-titel">4 uur<br> <span class="onderdeel-D">Training - theorie</span></div>
						</div>
						<div id="programma-D-2b">
							<div id="programma-D-2b-bol">&nbsp;</div>
							<div id="programma-D-2b-tekst">
								<span class="programmapart-D">Powerpoint 'de tool' training</span><br>
								De tips &#38; tricks om sneller te werken in het programma PowerPoint
							</div>
							<div id="space_20"></div>
							<div id="programma-D-2b-bol">&nbsp;</div>
							<div id="programma-D-2b-tekst">
								<span class="programmapart-D">Storytelling</span><br>
								Zorg voor een perfecte flow in jouw verhaal. O.a. aan de hand van de pyramid principle
							</div>							
							<div id="space_20"></div>
							<div id="programma-D-2b-bol">&nbsp;</div>
							<div id="programma-D-2b-tekst">
								<span class="programmapart-D">Slide opbouw</span><br>
								Leer wat je op een slide moet zetten (copy, beeld, modellen, grafieken) om op elke slide de boodschap kracht bij te zetten
							</div>	
							<div id="space_20"></div>
							<div id="programma-D-2b-bol">&nbsp;</div>
							<div id="programma-D-2b-tekst">
								<span class="programmapart-D">Design tweaking</span><br>
								Geef jouw slides de extra finesse in vormgeving om van een goed deck een perfect deck te maken
							</div>								
						</div>						
					</div>
					<div id="space_100"></div>
					<div id="programma-D-dagdeel">
						<div id="programma-D-2a">
							<div id="programma-D-2a-bol">&nbsp;</div>
							<div id="programma-D-2a-titel">8 uur<br> <span class="onderdeel-D">Huiswerk - praktijk</span></div>
						</div>
						<div id="programma-D-2b">
							<div id="programma-D-2b-bol">&nbsp;</div>
							<div id="programma-D-2b-tekst">
								<span class="programmapart-D">Huiswerk</span><br>
								Je leert het meest door te doen. In overleg stemmen we af wat een nuttige huiswerkopdracht is. Oftewel met welke decks de deelnemers aan de slag gaan. Het werk van alle deelnemers wordt in het volgende onderdeel beoordeeld en aangepast.
							</div>							
						</div>						
					</div>
					<div id="space_100"></div>
					<div id="programma-D-dagdeel">
						<div id="programma-D-2a">
							<div id="programma-D-2a-bol">&nbsp;</div>
							<div id="programma-D-2a-titel">1 uur<br> <span class="onderdeel-D">Present-back</span></div>
						</div>
						<div id="programma-D-2b">
							<div id="programma-D-2b-bol">&nbsp;</div>
							<div id="programma-D-2b-tekst">
								<span class="programmapart-D">Iteratieslag op decks (door mij)</span><br>
								Ik ga door al het huiswerk heen. Wat inhoudt dat ik feedback geef op elk deck (10-15 slides). Plus ik maak een iteratieslag op al deze slides met diverse verbeteringen
							</div>
							<div id="space_20"></div>
							<div id="programma-D-2b-bol">&nbsp;</div>
							<div id="programma-D-2b-tekst">
								<span class="programmapart-D">Present-back &#38; feedback</span><br>
								Deelnemers presenteren - in teams van 2 - hun deck terug aan mij. In deze één uur durende sessie pak ik ook mijn iteratieslag op het deck erbij
							</div>								
						</div>						
					</div>
					
				</div>
			</div>
			<div id="space_100"></div>
		</div>
		
		
<!--CONTACT  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 
		<div id="contact-D">
			<div id="contact-D-content">

				<div id="contact-D-2">
					<div id="space_100"></div>
					<div id="space_50"></div>
					<div id="contact-D-2-title">
						<h2 class="s44 white line15">Inschrijven, offerte of een vraag?</h1>
					</div>
					<div id="contact-D-2-text">
						Schrijf jouw bedrijf in voor de PowerPoint Academy, vraag een offerte op of stel een vraag. <br><br>
						<button class="button-white-no-line" onclick="location.href='../contact/index.php?type=academy'">
							Neem contact op &nbsp;&nbsp;>
						</button>
					</div>
				</div>
				
				<div id="contact-D-1">
					<div id="space_100"></div>
					<div id="space_50"></div>
					<img src="../_images/ppt-academy/powerpoint-academy-logo.png" style="width:240px">
				</div>
				
				
				<div id="space_200"></div>
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
		
		<a href="../contact/index.php?type=academy">
		<div id="chat-M">
			<div id="chat-M-ballon">
				<div id="chat-M-ballon-tekst">
					Kan jouw bedrijf wel een PowerPoint training gebruiken?
				</div>
			</div>
			<div id="chat-M-foto">
				<img src="../_images/profile-picture.png" style="width:60px; ">
			</div>
		</div>
		</a>	

<!--MOBILE HEADER  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 			
		<div id="header-academy-M">
			<div id="space_100"></div>
			<div id="space_20"></div>
			<div id="space_20"></div>
			<div id="header-academy-M-content">
				<h1 class="s30 white">"Do you suck at PowerPoint?"</h1>
				<img src="../_images/ppt-academy/powerpoint-academy-logo.png" style="width:130px;">
				<div id="space_20"></div>
				Loop je deals mis door slechte sales presentaties? Update jouw team je met gedrochten van slides? Misschien is het dan tijd voor de PowerPoint Academy. 
				<div id="space_20"></div>
				<lottie-player src="https://assets3.lottiefiles.com/packages/lf20_dgvlk8pz.json" background="transparent"  speed="1"  style="width: 40px; height: 40px; margin: auto;" loop  autoplay></lottie-player>
				<div id="space_50"></div>
			</div>
		</div>	
	
		<div id="header-summary-M">
			<div id="header-summary-M-content">
				<div id="space_50"></div>
				<h1 class="s30 line15">Pragmatische PowerPoint training</h1>
				<!--Leer hoe storytelling werkt, hoe je heldere en overtuigende slides bouwt en hoe je sneller in PowerPoint werkt.-->
				<div id="space_20"></div>
				<div id="anchor-links-M">
					<div id="anchor-links-M-link">
						<a href="#watgajeleren-M-anchor">Wat ga je leren?</a>
					</div>
					<div id="anchor-links-M-link">
						<a href="#prijs-M-anchor">Prijs</a>
					</div>
					<div id="anchor-links-M-link">
						<a href="#programma-M-anchor">Programma</a>
					</div>					
				</div>
				<div id="watgajeleren-M-anchor"></div>
			</div>
		</div>
	
<!--WAT GA JE LEREN  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 			
		<!--STORYTELLING  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 				
		<div id="watgajeleren-M">
			<div id="watgajeleren-M-content">
				<div id="slide-M" class="storytelling-M">
					<div id="space_50"></div>
					<div id="slide-small-M-spaceL"></div>
					<div id="slide-small-M">
						<div id="slide-small-M-text1"></div><div id="slide-small-M-text2"></div><div id="slide-small-M-text3"></div><div id="slide-small-M-text4"></div><div id="slide-small-M-text5"></div>
					</div>
					<div id="slide-small-M-spaceS"></div>
					<div id="slide-small-M">
						<div id="slide-small-M-text1"></div><div id="slide-small-M-text2"></div><div id="slide-small-M-text3"></div><div id="slide-small-M-text4"></div><div id="slide-small-M-text5"></div>
					</div>
					<div id="slide-small-M-spaceS"></div>
					<div id="slide-small-M-grey-empty">
						<div id="slide-small-M-ingrey" class="slide-small-M-ani1">
							<div id="slide-small-M-text1"></div><div id="slide-small-M-text2"></div><div id="slide-small-M-text3"></div><div id="slide-small-M-text4"></div><div id="slide-small-M-text5"></div>
						</div>
					</div>

					
					<div id="space_10"></div>
					<div id="slide-small-M-spaceXL"></div>
					<div id="slide-small-M" class="slide-small-M-ani2">
						<div id="slide-small-M-text1"></div><div id="slide-small-M-text2"></div><div id="slide-small-M-text3"></div><div id="slide-small-M-text4"></div><div id="slide-small-M-text5"></div>
					</div>
					<div id="slide-small-M-spaceS"></div>
					<div id="slide-small-M" class="slide-small-M-ani3">
						<div id="slide-small-M-text1"></div><div id="slide-small-M-text2"></div><div id="slide-small-M-text3"></div><div id="slide-small-M-text4"></div><div id="slide-small-M-text5"></div>
					</div>
				</div>
				<div id="watgajeleren-M-titel">Leer hoe storytelling werkt</div>
				<div id="watgajeleren-M-text">Leer hoe je een goede flow in jouw verhaal krijgt en hoe de kernboodschap blijft hangen. Dit doen we aan de hand van de pyramid principle en andere slimme modellen.</div>
			</div>
			<div id="space_50"></div>
			<div id="space_20"></div>
		</div>
	
		<!--SLIDE OPBOUW  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 				
		<div id="watgajeleren-M">
			<div id="watgajeleren-M-content">
				<div id="slide-M" class="slide-opbouw-M">
					<div id="slide-large-M-title">
						<div id="slide-large-M-text1"></div><div id="slide-large-M-text2"></div><div id="slide-large-M-text3"></div><div id="slide-large-M-text4"></div><div id="slide-large-M-text5"></div>
					</div>
					<div id="slide-large-M-content">
						<div id="slide-large-M-kolom">
							<div id="slide-large-M-kolom-image">
								<img src="../_images/ppt-academy/image-icon-black.png" style="width:20px; margin-top:30px;">
							</div>
							<div id="slide-large-M-kolom-text" class="slide-M-ani1">
								titel 1
								<div id="space_5"></div>
								<div id="slide-large-M-kolom-text-woord1"></div><div id="slide-large-M-kolom-text-woord2"></div><div id="slide-large-M-kolom-text-woord2"></div>
							</div>
						</div>
						<div id="slide-large-M-kolom-space">&nbsp;</div>
						<div id="slide-large-M-kolom" class="slide-M-ani3">
							<div id="slide-large-M-kolom-image">
								<img src="../_images/ppt-academy/image-icon-black.png" style="width:20px; margin-top:30px;">
							</div>
							<div id="slide-large-M-kolom-text">
								titel 2
								<div id="space_5"></div>
								<div id="slide-large-M-kolom-text-woord1"></div><div id="slide-large-M-kolom-text-woord2"></div><div id="slide-large-M-kolom-text-woord2"></div>
							</div>						
						</div>
						<div id="slide-large-M-kolom-space">&nbsp;</div>
						<div id="slide-large-M-kolom" class="slide-M-ani4">
							<div id="slide-large-M-kolom-image">
								<img src="../_images/ppt-academy/image-icon-black.png" style="width:20px; margin-top:30px;">
							</div>
							<div id="slide-large-M-kolom-text" >
								titel 3
								<div id="space_5"></div>
								<div id="slide-large-M-kolom-text-woord1"></div><div id="slide-large-M-kolom-text-woord2"></div><div id="slide-large-M-kolom-text-woord2"></div>
							</div>						
						</div>
						<div id="space_1"></div>
					</div>					
				</div>
				<div id="watgajeleren-M-titel">Leer hoe je een slide opbouwt</div>
				<div id="watgajeleren-M-text">Bouw slides die blijven hangen. Leer hoe je overzichtelijke slides bouwt en wanneer je tekst, foto, video, grafieken etc. gebruikt. </div>
			</div>
			<div id="space_50"></div>
			<div id="space_20"></div>
		</div>	
	
		<!--SLIDE DESIGNEN  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 				
		<div id="watgajeleren-M">
			<div id="watgajeleren-M-content">
				<div id="slide-M" class="slide-design-M">
					<div id="slide-large-M-title">
						<div id="slide-large-M-text1"></div><div id="slide-large-M-text2"></div><div id="slide-large-M-text3"></div><div id="slide-large-M-text4"></div><div id="slide-large-M-text5"></div>
					</div>
					<div id="slide-large-M-content">
						<div id="slide-large-M-kolom-blik1">
							<div id="slide-large-M-kolom-image2" class="blik-M-bounce-ani1">
								<img src="../_images/ppt-academy/blik1.png" style="height:100%;  transform: rotate(-20deg);">
							</div>
							<div id="slide-large-M-kolom-text2">
								titel 1
								<div id="space_5"></div>
								<div id="slide-large-M-kolom-text-blik1-woord1"></div><div id="slide-large-M-kolom-text-blik1-woord2"></div><div id="slide-large-M-kolom-text-blik1-woord2"></div>
							</div>
						</div>
						<div id="slide-large-M-kolom-space">&nbsp;</div>
						<div id="slide-large-M-kolom-blik2">
							<div id="slide-large-M-kolom-image2" class="blik-M-bounce-ani2">
								<img src="../_images/ppt-academy/blik2.png" style="height:100%;  transform: rotate(-20deg);">
							</div>
							<div id="slide-large-M-kolom-text2">
								titel 2
								<div id="space_5"></div>
								<div id="slide-large-M-kolom-text-blik2-woord1"></div><div id="slide-large-M-kolom-text-blik2-woord2"></div><div id="slide-large-M-kolom-text-blik2-woord2"></div>
							</div>
						</div>
						<div id="slide-large-M-kolom-space">&nbsp;</div>
						<div id="slide-large-M-kolom-blik3">
							<div id="slide-large-M-kolom-image2" class="blik-M-bounce-ani3">
								<img src="../_images/ppt-academy/blik3.png" style="height:100%;  transform: rotate(-20deg);">
							</div>
							<div id="slide-large-M-kolom-text2">
								titel 3
								<div id="space_5"></div>
								<div id="slide-large-M-kolom-text-blik3-woord1"></div><div id="slide-large-M-kolom-text-blik3-woord2"></div><div id="slide-large-M-kolom-text-blik3-woord2"></div>
							</div>
						</div>
						<div id="space_1"></div>
					</div>					
				</div>
				<div id="watgajeleren-M-titel">Leer hoe je elke slide<br>perfect designt</div>
				<div id="watgajeleren-M-text"> Hoe suf het ook klinkt; slide decks die er goed uit zien resoneren beter. Leer hoe je jouw slides die extra finesse meegeeft om een slide deck te perfectioneren.</div>
			</div>
			<div id="space_50"></div>
			
			<!--REVIEW  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 				
			<div id="review-M">
				<div id="review-M-content">
					<div id="space_50"></div>
					<div id="space_20"></div>
					<img src="../_images/ppt-academy/talpa.png" style="width:100px;">
					<div id="space_50"></div>
					<span style="font-family: poppins-medium; font-size:20px;">"Een uitstekende powerpoint training op maat! Relevant, praktisch en nuttig!" </span><br>
					<div id="space_10"></div>
					 Jean van Rijkswijk - Senior HR Business Partner
					<div id="space_10"></div>
					<img src="../_images/ppt-academy/stars45.png" style="width:100px;">
					<div id="space_50"></div>
				</div>
			</div>
			<div id="prijs-M-anchor"></div>
		</div>	
	
		<!--PRIJS  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 				
		<div id="prijs-M">
			<div id="prijs-M-content">
				<div id="space_50"></div>
				<h1 class="s30 white">Prijsindicatie</h1>
				<div id="space_10"></div>
					<div id="prijs-M-input">
						<div id="prijs-M-input1">Aantal<br>deelnemers:</div>
						<form action="?deelnemers=#prijs-M-anchor" method="get">
							<div id="prijs-M-input2"><input type="number" inputmode="numeric" pattern="[0-9]*"  name="deelnemers" value="<? if ($deelnemers == ""){echo "20";}else{ echo $deelnemers;}?>" class="input-field1" style="width:100%;"></input></div>
							<div id="prijs-M-input3"><button type="submit" class="button-pink-no-line" style="width:100%;">Bereken</button></div>
						</form>
					</div>
					<div id="space_1"></div>
					<!--
					<div id="prijs-M-2-tabel">
						<div id="space_50"></div>
						<div id="prijs-M-2-tabel1">Voorbereiding theorie - customizen van training voor klant</div>
						<div id="prijs-M-2-tabel2">1x</div>
						<div id="prijs-M-2-tabel3"><? echo $een_uureenheid;?> uur</div>
						<div id="prijs-M-2-tabel4">€ <? echo $een_bedrag_punt;?></div>
					</div>
					<div id="prijs-M-2-tabel">
						<div id="space_10"></div>
						<div id="prijs-M-2-tabel1">Theorie: training in groepen van 10 deelnemers</div>
						<div id="prijs-M-2-tabel2"><? echo $twee_keren;?>x</div>
						<div id="prijs-M-2-tabel3"><? echo $twee_uureenheid;?> uur</div>
						<div id="prijs-M-2-tabel4">€ <? echo $twee_bedrag_punt;?></div>
					</div>	
					<div id="prijs-M-2-tabel">
						<div id="space_50"></div>
						<div id="prijs-M-2-tabel1">Feedback verzamelen op huiswerk decks - per 2 deelnemers</div>
						<div id="prijs-M-2-tabel2"><? echo $drie_keren;?>x</div>
						<div id="prijs-M-2-tabel3"><? echo $drie_uureenheid;?> uur</div>
						<div id="prijs-M-2-tabel4">€ <? echo $drie_bedrag_punt;?></div>
					</div>
					<div id="prijs-M-2-tabel">
						<div id="space_10"></div>
						<div id="prijs-M-2-tabel1">Iteratie 10-15 slides op huiswerk decks - per 2 deelnemers</div>
						<div id="prijs-M-2-tabel2"><? echo $vier_keren;?>x</div>
						<div id="prijs-M-2-tabel3"><? echo $vier_uureenheid;?> uur</div>
						<div id="prijs-M-2-tabel4">€ <? echo $vier_bedrag_punt;?></div>
					</div>	
					<div id="prijs-M-2-tabel">
						<div id="space_50"></div>
						<div id="prijs-M-2-tabel1">Feedback sessie - per 2 deelnemers</div>
						<div id="prijs-M-2-tabel2"><? echo $vijf_keren;?>x</div>
						<div id="prijs-M-2-tabel3"><? echo $vijf_uureenheid;?> uur</div>
						<div id="prijs-M-2-tabel4">€ <? echo $vijf_bedrag_punt;?></div>
						<div id="space_20"></div>						
					</div>	
					<div id="prijs-M-2-tabel-line"></div>
					-->
			<div id="space_20"></div>
					<div id="prijs-M-2-tabel-total">
						<div id="space_20"></div>
						<div id="prijs-M-2-tabel1">Totale prijsindicatie <span style="font-family: poppins-light; font-size:14px;"><br>excl. BTW</span></div>
						<div id="prijs-M-2-tabel234">€ <? echo $totaal_bedrag_punt;?></div>
					</div>	
					
					<div id="prijs-M-2-tabel-total-deelnemer">
						<div id="space_20"></div>
						<div id="prijs-M-2-tabel1">Per deelnemer <span style="font-family: poppins-light; font-size:14px;"><br>excl. BTW</span></div>
						<div id="prijs-M-2-tabel234"><span style="font-size:24px">€ <? echo $bedrag_per_deelnemer;?></span></div>
					</div>						

					<div id="programma-M-anchor"></div>
			</div>
		</div>

		<!--PROGRAMMA  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 				
		<div id="programma-M">
			<div id="programma-M-content">
				<div id="space_50"></div>
				<div id="space_20"></div>
				<h1 class="s30">Programma</h1>
				Een investering van 1,5 dag 
			

					<div id="space_50"></div>
					
					<div id="programma-M-dagdeel">
						<div id="programma-M-2a">
							<div id="programma-M-2a-titel">4 uur<br> <span class="onderdeel-M">Training - theorie</span></div>
						</div>
						<div id="programma-M-2b">
							<div id="programma-M-2b-tekst">
								<span class="programmapart-M">Powerpoint 'de tool' training</span><br>
								De tips &#38; tricks om sneller te werken in het programma PowerPoint
							</div>
							<div id="programma-M-2b-tekst">
								<span class="programmapart-M">Storytelling</span><br>
								Zorg voor een perfecte flow in jouw verhaal. O.a. aan de hand van de pyramid principle
							</div>							
							<div id="programma-M-2b-tekst">
								<span class="programmapart-M">Slide opbouw</span><br>
								Leer wat je op een slide moet zetten (copy, beeld, modellen, grafieken) om op elke slide de boodschap kracht bij te zetten
							</div>
							<div id="programma-M-2b-tekst">
								<span class="programmapart-M">Design tweaking</span><br>
								Geef jouw slides de extra finesse in vormgeving om van een goed deck een perfect deck te maken
							</div>	
						</div>	
					</div>
				
					<div id="space_50"></div>
					<div id="space_20"></div>
						
					<div id="programma-M-dagdeel">
						<div id="programma-M-2a">
							<div id="programma-M-2a-titel">8 uur<br> <span class="onderdeel-M">Huiswerk - praktijk</span></div>
						</div>
						<div id="programma-M-2b">
							<div id="programma-M-2b-tekst">
								<span class="programmapart-M">Huiswerk</span><br>
								Je leert het meest door te doen. In overleg stemmen we af wat een nuttige huiswerkopdracht is. Oftewel met welke decks de deelnemers aan de slag gaan. Het werk van alle deelnemers wordt in het volgende onderdeel beoordeeld en aangepast.
							</div>							
						</div>						
					</div>
				
				
					<div id="space_50"></div>
					<div id="space_20"></div>
				
					<div id="programma-M-dagdeel">
						<div id="programma-M-2a">
							<div id="programma-M-2a-titel">1 uur<br> <span class="onderdeel-M">Present-back</span></div>
						</div>
						<div id="programma-M-2b">
							<div id="programma-M-2b-tekst">
								<span class="programmapart-M">Iteratieslag op decks (door mij)</span><br>
								Ik ga door al het huiswerk heen. Wat inhoudt dat ik feedback geef op elk deck (10-15 slides). Plus ik maak een iteratieslag op al deze slides met diverse verbeteringen
							</div>
							<div id="programma-M-2b-tekst">
								<span class="programmapart-M">Present-back &#38; feedback</span><br>
								Deelnemers presenteren - in teams van 2 - hun deck terug aan mij. In deze één uur durende sessie pak ik ook mijn iteratieslag op het deck erbij
							</div>								
						</div>						
					</div>
					
				</div>
			
			
			
			
			
			
			
			
			</div>
			<div id="space_100"></div>
		</div>

<!-- MOBILE KOFFIE  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 			
		<div id="koffie-M">
			<div id="space_50"></div>
			<div id="koffie-M-content">
				<h1 class="white s26">Koffie?</h1>
				Wil je meer weten over de PowerPoint Academy? Over de prijzen, over het programma of hoe het bij jouw uitdagingen aansluit? Stuur een mail of WhatsApp bericht!
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
