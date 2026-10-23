<?
	require("../util.inc.php");
	$sql = new MySQL_class;
	$sql->Create("$dbname");
	mysql_query( "SET NAMES 'utf8'" );

	include ('../_includes/mobile_check.php');

	$Klant_Selectie = $_GET['klant'];
	$Jaar_Selectie = $_GET['jaar'];
?>


<html>
	<head>
<?
					$sql->Query("SELECT * FROM cases WHERE Jaar = $Jaar_Selectie AND Klant_Lowercase = '$Klant_Selectie' ");
						for ($i = 0; $i < $sql->rows; $i++) {
							$sql->Fetch($i);
							$Klant = $sql->data[Klant];
							$Titel = $sql->data[Titel];
							$Klant_Lowercase = $sql->data[Klant_Lowercase];
							$Omschrijving = $sql->data[Omschrijving];
						}
?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta charset="utf-8">
		<title>Roel Engel - Case: <? echo $Titel;?></title>
		<link type="text/css" rel="stylesheet" href="../style.css"/>
		<link type="text/css" rel="stylesheet" href="style.css"/>
		
		<meta property="og:title" content="Roelengel.nl | Case <? echo $Klant;?>">
		<meta property="og:image" content="http://www.roelengel.nl/_images/cases/<?echo $Jaar_Selectie;?><? echo $Klant_Lowercase;?>-headerD.jpg">
		
		<meta name="description" title="Roelengel.nl | Case <? echo $Klant;?>">
		<meta name="description" content="<? echo $Titel;?>. <? echo $Omschrijving;?>">

		<!--lottie files   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>


	</head>

	<body class="bg-white">

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
									<a href="../presentatie-decks/">Decks</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a href="../design-ux">Design &#38; UX</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a href="../cases" class="navigation-D-active">Cases</a>						
						</div>
						<div id="navigation-D-urls-contactbt">
							<button class="button-topnav" onclick="location.href='../contact'">Contact</button>	
						</div>
						<div id="space_1">&nbsp;</div></div>
					</div>

			</div>
		</div>

		
<!--CASES OVERVIEW ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<div id="case-detail-D">
			<div id="case-detail-D-content">
			<?
					$sql->Query("SELECT * FROM cases WHERE Jaar = $Jaar_Selectie AND Klant_Lowercase = '$Klant_Selectie' ");
						for ($i = 0; $i < $sql->rows; $i++) {
							$sql->Fetch($i);
							$ID = $sql->data[ID];
							$Actief = $sql->data[Actief];
							$Klant = $sql->data[Klant];
							$Klant_Lowercase = $sql->data[Klant_Lowercase];
							$Vanuit = $sql->data[Vanuit];
							$Vanuit_Uitgebreid = $sql->data[Vanuit_Uitgebreid];
							$Jaar = $sql->data[Jaar];
							$Titel = $sql->data[Titel];
							$Titel_Kort = substr($Titel, 0, 58);
							$Omschrijving = $sql->data[Omschrijving];
							$Type_Deck = $sql->data[Type_Deck];
							$Type_Design = $sql->data[Type_Design];
							$Type_Overig = $sql->data[Type_Overig];
							$Tags = $sql->data[Tags];
							$Extra_Afbeelding_1 = $sql->data[Extra_Afbeelding_1];
							$Extra_Afbeelding_2 = $sql->data[Extra_Afbeelding_2];
							$Extra_Afbeelding_3 = $sql->data[Extra_Afbeelding_3];
							
						}
?>
					<div id="space_107"></div>
					<div id="case-D-header-image" style="background-image: url('../_images/cases/<? echo $Jaar; echo $Klant_Lowercase;?>-headerD.jpg'); background-size: 1280px 575px;" >			
						&nbsp;
					</div>
					<div id="case-D-text" class="animate-bottom-top">
						<div id="case-D-text-1">
							 <h1 class="s30"><? echo $Titel;?></h1>
							<br>
							<? echo $Omschrijving;?>
						</div>
						
						<div id="case-D-text-2" >
							<div id="case-D-text-2-element">
								<div id="case-D-text-2-element-name">Klant</div>
								<div id="case-D-text-2-element-content"><? echo $Klant;?></div>
							</div>
							<div id="space_10"></div>
							<div id="case-D-text-2-element">
								<div id="case-D-text-2-element-name">Vanuit</div>
								<div id="case-D-text-2-element-content"><? echo $Vanuit_Uitgebreid;?></div>
							</div>							
							<div id="space_10"></div>
							<div id="case-D-text-2-element">
								<div id="case-D-text-2-element-name">Jaar</div>
								<div id="case-D-text-2-element-content"><? echo $Jaar;?></div>
							</div>	
							<div id="space_10"></div>
							<div id="case-D-text-2-element">
								<div id="case-D-text-2-element-name">Tags</div>
								<div id="case-D-text-2-element-content"><? echo $Tags;?></div>
							</div>	
							
							
							<!--
							<div id="case-D-text-2-icontext-container">
								<div id="case-D-text-2-icontext-icon">
									<img src="../_images/cases/<? echo $Jaar;?><? echo $Klant_Lowercase;?>-logo.jpg" style="width: 20px; border-radius: 5px;">
								</div>
								<div id="case-D-text-2-icontext-text">Klant: <? echo $Klant;?></div>
							</div>							
							<div id="case-D-text-2-icontext-container">
								<div id="case-D-text-2-icontext-icon">
									<? if ($Vanuit == 'ilse media'){?><img src="../_images/icons/ilsemedia.png" style="width:20px;"><? }?>
									<? if ($Vanuit == 'Sanoma'){?><img src="../_images/icons/sanoma.png" style="width:20px;"><? }?>
									<? if ($Vanuit == '4NG'){?><img src="../_images/icons/4ng.png" style="width:20px;"><? }?>
									<? if ($Vanuit == 'roelengel'){?><img src="../_images/icons/roelengel.png" style="width:20px;"><? }?>
								</div>
								<div id="case-D-text-2-icontext-text">Vanuit: <? echo $Vanuit_Uitgebreid;?></div>
							</div>
							<div id="case-D-text-2-icontext-container">
								<div id="case-D-text-2-icontext-icon"><img src="../_images/icons/jaar.png" style="width: 20px;"></div>
								<div id="case-D-text-2-icontext-text"><? echo $Jaar;?></div>
							</div>	
							<div id="case-D-text-2-icontext-container">
								<div id="case-D-text-2-icontext-icon"><img src="../_images/icons/tags.png" style="width: 20px;"></div>
								<div id="case-D-text-2-icontext-text"><? echo $Tags;?></div>
							</div>	
							-->
						</div>	
						<div id="space_10"></div>
					</div>
		
			<!--end of 1280 container|    --> 	
			</div>
			
		
		
			<!--EXTRA AFBEELDINGEN ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 
			<div id="case-detail-D-content" class="animate-bottom-top">

				<? if ($Extra_Afbeelding_1 != ""){?>
					<div id="space_50"></div>
					<img src="../_images/cases/extra/<? echo $Jaar;?><? echo $Klant_Lowercase;?>-extra1.jpg" style="width: 100%;">
					<div id="space_35"></div>
				<?} ?> 
				<? if ($Extra_Afbeelding_2 != ""){?>
					<div id="space_50"></div>
					<img src="../_images/cases/extra/<? echo $Jaar;?><? echo $Klant_Lowercase;?>-extra2.jpg" style="width: 100%;">
					<div id="space_35"></div>
				<?} ?> 				
				<? if ($Extra_Afbeelding_3 != ""){?>
					<div id="space_50"></div>
					<img src="../_images/cases/extra/<? echo $Jaar;?><? echo $Klant_Lowercase;?>-extra3.jpg" style="width: 100%;">
					<div id="space_35"></div>
				<?} ?> 

			<!--UITGEBREIDE CASES ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
				<? if ($Klant == 'Enbeyay'){ include 'uitgebreid-enbeyay.php';  } ?>
				<? if ($Klant_Lowercase == 'fittery' AND $Jaar == '2022'){ include 'uitgebreid-fittery.php';  } ?>
				<? if ($Klant == 'NS'){ include 'uitgebreid-ns.php';  } ?>
				<? if ($Klant == 'Actie van de Dag'){ include 'uitgebreid-actievandedag.php';  } ?>
				<? if ($Klant == 'GoeieVraag'){ include 'uitgebreid-goeievraag.php';  } ?>
				<? if ($Klant == 'Future Presents'){ include 'uitgebreid-futurepresents.php';  } ?>
				<? if ($Klant == 'Scoupy' AND $Jaar == '2022'){ include 'uitgebreid-scoupy.php';  } ?>
				<? if ($Klant_Lowercase == 'fitteryteaser' AND $Jaar == '2022'){ include 'uitgebreid-fitteryteaser.php';  } ?>
				<? if ($Klant_Lowercase == 'farout'){ include 'uitgebreid-farout.php';  } ?>
				<? if ($Klant_Lowercase == 'pollmerino'){ include 'uitgebreid-pollmerino.php';  } ?>				
				<? if ($Klant_Lowercase == 'stamstoffeeratelier'){ include 'uitgebreid-stam.php';  } ?>				
				<? if ($Klant_Lowercase == 'jumbo'){ include 'uitgebreid-jumbo.php';  } ?>				
				<? if ($Klant_Lowercase == 'watchlivesport'){ include 'uitgebreid-wls.php';  } ?>				
				<? if ($Klant_Lowercase == 'solarcentraal'){ include 'uitgebreid-solarcentraal.php';  } ?>								
				<? if ($Klant_Lowercase == 'bank'){ include 'uitgebreid-bank.php';  } ?>												
				<? if ($Klant_Lowercase == 'fittery' AND $Jaar == '2023'){ include 'uitgebreid-fittery-2023.php';  } ?>
				<? if ($Klant_Lowercase == 'reclamefolder'){ include 'uitgebreid-reclamefolder.php';  } ?>	
				<? if ($Klant_Lowercase == 'fittery' AND $Jaar == '2024'){ include 'uitgebreid-fittery-2024.php';  } ?>
				<? if ($Klant_Lowercase == 'jazo'){ include 'uitgebreid-jazo.php';  } ?>
				<? if ($Klant_Lowercase == 'onderneming'){ include 'uitgebreid-onderneming.php';  } ?>
				<? if ($Klant_Lowercase == 'exelerating'){ include 'uitgebreid-exelerating.php';  } ?>
				<? if ($Klant_Lowercase == 'opiniemeters'){ include 'uitgebreid-opiniemeters.php';  } ?>
				<? if ($Klant_Lowercase == 'holdfastandstipe'){ include 'uitgebreid-holdfastandstipe.php';  } ?>				
				<? if ($Klant_Lowercase == 'westpoortbouw'){ include 'uitgebreid-westpoortbouw.php';  } ?>				
				<? if ($Klant_Lowercase == 'faslet'){ include 'uitgebreid-faslet.php';  } ?>								
				<? if ($Klant_Lowercase == 'near'){ include 'uitgebreid-near.php';  } ?>												
				<? if ($Klant_Lowercase == 'keesing' AND $Jaar == '2024'){ include 'uitgebreid-keesing.php';  } ?>				
				<? if ($Klant_Lowercase == 'meshid'){ include 'uitgebreid-meshid.php';  } ?>				
				<? if ($Klant_Lowercase == 'stormer'){ include 'uitgebreid-stormer.php';  } ?>				
				<? if ($Klant_Lowercase == 'autoweek'){ include 'uitgebreid-autoweek.php';  } ?>								
				
				
				
				
			</div>
								

		
			<!--MEER CASES ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
			<div id="space_100"></div>
			
			<div id="cases-D">
				<div id="space_50"></div>
				<div id="cases-D-content">
					<div id="space_35"></div>
					<div id="case-D">
						<div id="case-D-first">
							Meer cases<br><br>
							<button class="button-pink" onclick="location.href='index.php'">
								Toon alle cases &nbsp;&nbsp;>
							</button>						
						</div>
					</div>
					<div id="case-D-spacing2">
						&nbsp;
					</div>
			<?
					$sql->Query("SELECT * FROM cases WHERE Jaar >= 2018 AND Actief = 'ja' AND ID != $ID ORDER BY RAND() LIMIT 3");
						for ($i = 0; $i < $sql->rows; $i++) {
							$sql->Fetch($i);
							$ID = $sql->data[ID];
							$Actief = $sql->data[Actief];
							$Klant = $sql->data[Klant];
							$Klant_Lowercase = $sql->data[Klant_Lowercase];
							$Vanuit = $sql->data[Vanuit];
							$Vanuit_Uitgebreid = $sql->data[Vanuit_Uitgebreid];
							$Jaar = $sql->data[Jaar];
							$Titel = $sql->data[Titel];
							$Titel_Kort = substr($Titel, 0, 58);
							$Omschrijving = $sql->data[Omschrijving];
							$Type_Deck = $sql->data[Type_Deck];
							$Type_Design = $sql->data[Type_Design];
							$Type_Overig = $sql->data[Type_Overig];
							$Tags = $sql->data[Tags];
							$Extra_Afbeelding_1 = $sql->data[Extra_Afbeelding_1];
							$Extra_Afbeelding_2 = $sql->data[Extra_Afbeelding_2];
							$Extra_Afbeelding_3 = $sql->data[Extra_Afbeelding_3];
?>
			
							<a href="case.php?jaar=<? echo $Jaar?>&klant=<? echo $Klant_Lowercase;?>">
							<div id="case-D">

								<div id="case-D-image" style="background-image: url('../_images/cases/<? echo $Jaar; echo $Klant_Lowercase;?>-aanjager.jpg'); background-size: 290px;">
									<img src="../_images/cases/<? echo $Jaar; echo $Klant_Lowercase;?>-logo.jpg" style="width:80px; margin-left:10px; margin-top: 280px;">
								</div>
								<div id="case-D-client">
									<? echo $Klant;?> 
								</div>								
								<div id="case-D-title">
									<? echo $Titel_Kort;?>
								</div>
							</div>
							</a>
							<div id="case-D-spacing2">
								&nbsp;
							</div>
<?
					}
?>					
				</div>
				<div id="space_10"></div>
			</div>	
			
		<!--end of case detail div (total page)   ||||    --> 	
		</div>
		
<!--KOFFIE DESKTOP  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 			
		<div id="koffie-D">
			<div id="koffie-D-content">
				<div id="space_100"></div>
				<div id="space_100"></div>
				<div id="koffie-D-left">
					<h1 class="white s44">Koffie?</h1>
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
		
		<div id="meer-cases-bottom-button-M">
			<a href="index.php?categorie=alles">alle cases</a>
		</div>
		
		
		
		<div id="navigation-M">
			<div id="navigation-M-logo">
				<a href="../index.php"><img src="../_images/logo.png" style="width: 90px;"></a>
			</div>
			<div id="navigation-M-hamburger">
				<a href="../mobile-menu/"><img src="../_images/icons/hamburger.png" style="width:20px; margin-top:10px;"></a>

			</div>
		</div>

		<div id="space_85"></div>
		
		<div id="case-detail-M" >
			<?
					$sql->Query("SELECT * FROM cases WHERE Jaar = $Jaar_Selectie AND Klant_Lowercase = '$Klant_Selectie' ");
						for ($i = 0; $i < $sql->rows; $i++) {
							$sql->Fetch($i);
							$ID = $sql->data[ID];
							$Actief = $sql->data[Actief];
							$Klant = $sql->data[Klant];
							$Klant_Lowercase = $sql->data[Klant_Lowercase];
							$Vanuit = $sql->data[Vanuit];
							$Vanuit_Uitgebreid = $sql->data[Vanuit_Uitgebreid];
							$Jaar = $sql->data[Jaar];
							$Titel = $sql->data[Titel];
							$Titel_Kort = substr($Titel, 0, 58);
							$Omschrijving = $sql->data[Omschrijving];
							$Type_Deck = $sql->data[Type_Deck];
							$Type_Design = $sql->data[Type_Design];
							$Type_Overig = $sql->data[Type_Overig];
							$Tags = $sql->data[Tags];
							$Extra_Afbeelding_1 = $sql->data[Extra_Afbeelding_1];
							$Extra_Afbeelding_2 = $sql->data[Extra_Afbeelding_2];
							$Extra_Afbeelding_3 = $sql->data[Extra_Afbeelding_3];
							
						}
?>
			
			<div id="case-detail-M-photo">
				<img src="../_images/cases/<? echo $Jaar; echo $Klant_Lowercase;?>-headerM.jpg" style="width:100%;">
				<div style="width:100%; height:50px; background-color:#000000; margin-top:-60px;">
					<lottie-player src="https://assets3.lottiefiles.com/packages/lf20_dgvlk8pz.json" background="transparent"  speed="1"  style="width: 40px; height: 40px; margin: auto;" loop  autoplay></lottie-player>				
				</div>
				<div id="space_10"></div>
			</div>
			<div id="case-detail-M-container" class="animate-bottom-top-L">
				<div id="space_20"></div>
				<div id="case-detail-M-titel" >
					<? echo $Titel;?>
				</div>
				<div id="space_10"></div>
				<div id="case-detail-M-details" >

					<div id="space_1"></div>
					<div id="M-details-full2-line"><img src="../_images/pixel.png"></div>

					<div id="M-details-full2">
						<div id="M-details-full2-name">Klant</div>
						<div id="M-details-full2-content"><? echo $Klant;?></div>
					</div>

					<div id="space_1"></div>
					<div id="M-details-full2-line"><img src="../_images/pixel.png"></div>

					<div id="M-details-full2">
						<div id="M-details-full2-name">Vanuit</div>
						<div id="M-details-full2-content"><? echo $Vanuit_Uitgebreid;?></div>
					</div>

					<div id="space_1"></div>
					<div id="M-details-full2-line"><img src="../_images/pixel.png"></div>

					<div id="M-details-full2">
						<div id="M-details-full2-name">Jaar</div>
						<div id="M-details-full2-content"><? echo $Jaar;?></div>
					</div>

					<div id="space_1"></div>
					<div id="M-details-full2-line"><img src="../_images/pixel.png"></div>

					<div id="M-details-full2">
						<div id="M-details-full2-name">Tags</div>
						<div id="M-details-full2-content"><? echo $Tags;?></div>
					</div>

					<div id="space_1"></div>
					<div id="M-details-full2-line"><img src="../_images/pixel.png"></div>				


					<!--
					<div id="M-details-full">
						<img src="../_images/icons/jaar.png" style="width: 20px; padding-right: 10px;"><? echo $Jaar;?> 
					</div>
					<div id="M-details-full">
						<img src="../_images/cases/<? echo $Jaar;?><? echo $Klant_Lowercase;?>-logo.jpg" style="width: 20px;  padding-right: 10px;">Klant: <? echo $Klant;?>
					</div>

					<div id="M-details-full">
						<? if ($Vanuit == 'ilse media'){?><img src="../_images/icons/ilsemedia.png" style="width:20px; padding-right: 10px;">Vanuit: <? echo $Vanuit_Uitgebreid;?><? }?>
						<? if ($Vanuit == 'Sanoma'){?><img src="../_images/icons/sanoma.png" style="width:20px; padding-right: 10px;">Vanuit: <? echo $Vanuit_Uitgebreid;?><? }?>
						<? if ($Vanuit == '4NG'){?><img src="../_images/icons/4ng.png" style="width:20px; padding-right: 10px;">Vanuit: <? echo $Vanuit_Uitgebreid;?><? }?>
						<? if ($Vanuit == 'roelengel'){?><img src="../_images/icons/roelengel.png" style="width:20px; padding-right: 10px;">Vanuit: <? echo $Vanuit_Uitgebreid;?>	<? }?>
					</div>
					<div id="M-details-full">
						<img src="../_images/icons/tags.png" style="width: 20px; padding-right: 10px;"><? echo $Tags;?>
					</div>
					-->
				</div>
				<div id="case-detail-M-text">
					<? echo $Omschrijving;?>
				</div>
			</div>

			
			<!--EXTRA AFBEELDINGEN MOBIEL ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 
			<div id="case-detail-M-extra">

				<? if ($Extra_Afbeelding_1 != ""){?>
					<div id="space_50"></div>
						<? if ($Extra_Afbeelding_1 == "deck-hor"){?>
							<div id="ppt-hor" style="background-image: url('../_images/cases/extra/<? echo $Jaar;?><? echo $Klant_Lowercase;?>-extra1.jpg');background-size: 120%;;">
								<img src="../_images/cases/extra/<? echo $Jaar;?><? echo $Klant_Lowercase;?>-extra1.jpg" style="width: 100%; opacity: 0.0;"><br><br><br>
							</div>
						<?}else{ ?>
							<img src="../_images/cases/extra/<? echo $Jaar;?><? echo $Klant_Lowercase;?>-extra1.jpg" style="width: 100%;">
						<?}?>
					<div id="space_35"></div>
				<?} ?> 
				<? if ($Extra_Afbeelding_2 != ""){?>
					<div id="space_50"></div>
						<? if ($Extra_Afbeelding_2 == "deck-hor"){?>
							<div id="ppt-hor" style="background-image: url('../_images/cases/extra/<? echo $Jaar;?><? echo $Klant_Lowercase;?>-extra2.jpg');background-size: 120%;;">
								<img src="../_images/cases/extra/<? echo $Jaar;?><? echo $Klant_Lowercase;?>-extra2.jpg" style="width: 100%; opacity: 0.0;"><br><br><br>
							</div>
						<?}else{ ?>
							<img src="../_images/cases/extra/<? echo $Jaar;?><? echo $Klant_Lowercase;?>-extra2.jpg" style="width: 100%;">
						<?}?>				
					<div id="space_35"></div>
				<?} ?> 				
				<? if ($Extra_Afbeelding_3 != ""){?>
					<div id="space_50"></div>
						<? if ($Extra_Afbeelding_3 == "deck-hor"){?>
							<div id="ppt-hor" style="background-image: url('../_images/cases/extra/<? echo $Jaar;?><? echo $Klant_Lowercase;?>-extra3.jpg');background-size: 120%;;">
								<img src="../_images/cases/extra/<? echo $Jaar;?><? echo $Klant_Lowercase;?>-extra3.jpg" style="width: 100%; opacity: 0.0;"><br><br><br>
							</div>
						<?}else{ ?>
							<img src="../_images/cases/extra/<? echo $Jaar;?><? echo $Klant_Lowercase;?>-extra3.jpg" style="width: 100%;">
						<?}?>				
					<div id="space_35"></div>
				<?} ?> 

			<!--UITGEBREIDE CASES ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
				<? if ($Klant == 'Enbeyay'){ include 'uitgebreid-enbeyay.php';  } ?>
				<? if ($Klant_Lowercase == 'fittery' AND $Jaar == '2022'){ include 'uitgebreid-fittery.php';  } ?>
				<? if ($Klant == 'NS'){ include 'uitgebreid-ns.php';  } ?>
				<? if ($Klant == 'Actie van de Dag'){ include 'uitgebreid-actievandedag.php';  } ?>
				<? if ($Klant == 'GoeieVraag'){ include 'uitgebreid-goeievraag.php';  } ?>
				<? if ($Klant == 'Future Presents'){ include 'uitgebreid-futurepresents.php';  } ?>
				<? if ($Klant == 'Scoupy' AND $Jaar == '2022'){ include 'uitgebreid-scoupy.php';  } ?>
				<? if ($Klant_Lowercase == 'fitteryteaser' AND $Jaar == '2022'){ include 'uitgebreid-fitteryteaser.php';  } ?>
				<? if ($Klant_Lowercase == 'farout'){ include 'uitgebreid-farout.php';  } ?>
				<? if ($Klant_Lowercase == 'pollmerino'){ include 'uitgebreid-pollmerino.php';  } ?>
				<? if ($Klant_Lowercase == 'stamstoffeeratelier'){ include 'uitgebreid-stam.php';  } ?>				
				<? if ($Klant_Lowercase == 'jumbo'){ include 'uitgebreid-jumbo.php';  } ?>				
				<? if ($Klant_Lowercase == 'watchlivesport'){ include 'uitgebreid-wls.php';  } ?>				
				<? if ($Klant_Lowercase == 'solarcentraal'){ include 'uitgebreid-solarcentraal.php';  } ?>								
				<? if ($Klant_Lowercase == 'bank'){ include 'uitgebreid-bank.php';  } ?>												
				<? if ($Klant_Lowercase == 'fittery' AND $Jaar == '2023'){ include 'uitgebreid-fittery-2023.php';  } ?>
				<? if ($Klant_Lowercase == 'reclamefolder'){ include 'uitgebreid-reclamefolder.php';  } ?>												
				<? if ($Klant_Lowercase == 'fittery' AND $Jaar == '2024'){ include 'uitgebreid-fittery-2024.php';  } ?>
				<? if ($Klant_Lowercase == 'jazo'){ include 'uitgebreid-jazo.php';  } ?>
				<? if ($Klant_Lowercase == 'onderneming'){ include 'uitgebreid-onderneming.php';  } ?>
				<? if ($Klant_Lowercase == 'exelerating'){ include 'uitgebreid-exelerating.php';  } ?>
				<? if ($Klant_Lowercase == 'opiniemeters'){ include 'uitgebreid-opiniemeters.php';  } ?>
				<? if ($Klant_Lowercase == 'holdfastandstipe'){ include 'uitgebreid-holdfastandstipe.php';  } ?>				
				<? if ($Klant_Lowercase == 'westpoortbouw'){ include 'uitgebreid-westpoortbouw.php';  } ?>				
				<? if ($Klant_Lowercase == 'faslet'){ include 'uitgebreid-faslet.php';  } ?>								
				<? if ($Klant_Lowercase == 'near'){ include 'uitgebreid-near.php';  } ?>												
				<? if ($Klant_Lowercase == 'keesing' AND $Jaar == '2024'){ include 'uitgebreid-keesing.php';  } ?>				
				<? if ($Klant_Lowercase == 'meshid'){ include 'uitgebreid-meshid.php';  } ?>				
				<? if ($Klant_Lowercase == 'stormer'){ include 'uitgebreid-stormer.php';  } ?>				
				<? if ($Klant_Lowercase == 'autoweek'){ include 'uitgebreid-autoweek.php';  } ?>								
				
				
				
				
				
			</div>			
			
			
		</div>
		
		
			<!--MEER CASES ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
			<div id="space_10"></div>
			
			<div id="meer-cases-M">
				<div id="space_20"></div>
				<div id="space_10"></div>
				<div id="meer-cases-M-title">Meer cases</div>
				<div id="space_20"></div>
				<div id="space_10"></div>

				<div id="case-gallery-M">
			<?
					$counter = 0;	
					$sql->Query("SELECT * FROM cases WHERE Jaar >= 2018 AND Actief = 'ja' AND ID != $ID ORDER BY RAND() LIMIT 4");
						for ($i = 0; $i < $sql->rows; $i++) {
							$sql->Fetch($i);
							$ID = $sql->data[ID];
							$Actief = $sql->data[Actief];
							$Klant = $sql->data[Klant];
														$Klant_Kort = substr($Klant, 0, 17);$Klant_Lowercase = $sql->data[Klant_Lowercase];
							$Vanuit = $sql->data[Vanuit];
							$Vanuit_Uitgebreid = $sql->data[Vanuit_Uitgebreid];
							$Jaar = $sql->data[Jaar];
							$Titel = $sql->data[Titel];
							$Titel_Kort = substr($Titel, 0, 50);
							$Omschrijving = $sql->data[Omschrijving];
							$Type_Deck = $sql->data[Type_Deck];
							$Type_Design = $sql->data[Type_Design];
							$Type_Overig = $sql->data[Type_Overig];
							$Tags = $sql->data[Tags];
							$Extra_Afbeelding_1 = $sql->data[Extra_Afbeelding_1];
							$Extra_Afbeelding_2 = $sql->data[Extra_Afbeelding_2];
							$Extra_Afbeelding_3 = $sql->data[Extra_Afbeelding_3];
							$counter = $counter + 1;
?>
			
							<a href="case.php?jaar=<? echo $Jaar?>&klant=<? echo $Klant_Lowercase;?>">
							<div id="case-gallery-M-item">
								<div id="case-gallery-M-image">
									<img src="../_images/cases/<? echo $Jaar; echo $Klant_Lowercase;?>-aanjager.jpg" style="width:100%;">				   
								</div>
								<div id="case-gallery-M-logo">
									<img src="../_images/cases/<? echo $Jaar; echo $Klant_Lowercase;?>-logo.jpg" style="width:60px;">
								</div>
								<div id="case-gallery-M-klant">
									<? echo $Klant;?>
								</div>								
								<div id="case-gallery-M-title">
									<? echo $Titel_Kort;?>
								</div>
							</div>
							</a>
			
							<? if ($counter % 2) {?><div id="case-gallery-M-space">&nbsp;</div><?}?><?
					}
?>					
				</div>
				<center><button class="button-pink" onclick="location.href='index.php'">
					Toon alle cases &nbsp;&nbsp;>
				</button></center>
				<div id="space_50"></div>
			</div>


		
<!--KOFFIE MOBILE  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 			
		<div id="koffie-M">
			<div id="koffie-M-content">
				<div id="space_50"></div>
				<h1 class="white s26">Koffie?</h1>
				Wil je eens praten over jouw strategische of design uitdagingen? Stuur een mail of WhatsApp bericht!
				<div id="space_20"></div>	
				<a href="mailto: roel@roelengel.nl"><u>roel@roelengel.nl</u></a>
				<div id="space_5"></div>
				<a href="https://wa.me/31623566816"><u>06 23 566 816 (whatsapp)</u></a>
				<div id="space_10"></div>
			</div>
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
