<?
	require("../util.inc.php");
	$sql = new MySQL_class;
	$sql->Create("$dbname");
	mysql_query( "SET NAMES 'utf8'" );


	$Categorie_Selectie = $_GET['categorie'];

	include ('../_includes/mobile_check.php');
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
		<title>Roel Engel - Cases</title>
		<link type="text/css" rel="stylesheet" href="../style.css"/>
		<link type="text/css" rel="stylesheet" href="style.css"/>
		
		<meta property="og:title" content="Roelengel.nl | Cases">
		<meta property="og:image" content="http://www.roelengel.nl/_images/design-ux/facebook-image.jpg">

		
		<!--carroussel   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	

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
			<a href="../showreel/"><img src="../_images/showreel-promo.png" style="width:100%;">	</a>
		</div>
		-->
		

		
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
		<div id="cases-D">
			<div id="space_200"></div>
			
			<div id="cases-D-content">
				
				<div id="filter-D-top">
					<div id="filter-D-top-titel">
						<h1 class="black">Cases</h1>				
					</div>
					<div id="filter-D-top-filters">
						<div id="filter-D">
							<a href="index.php"><div id="filter-D-item<? if($Categorie_Selectie ==''){?>-active<?}?>" class="filter-left"><span class="m-top">Uitgelicht</span></div></a>
							<a href="index.php?categorie=deck"><div id="filter-D-item<? if($Categorie_Selectie =='deck'){?>-active<?}?>">Decks</div></a>
							<a href="index.php?categorie=design"><div id="filter-D-item<? if($Categorie_Selectie =='design'){?>-active<?}?>">Design</div></a>
							<a href="index.php?categorie=alles"><div id="filter-D-item<? if($Categorie_Selectie =='alles'){?>-active<?}?>" class="filter-right">Alles</div></a>					
						</div>
					</div>
				</div>
				
				<div id="space_20"></div>
				
			<?
					 $counter = 0;
								  
					if ($Categorie_Selectie == ''){
					$sql->Query("SELECT * FROM cases WHERE  Actief = 'ja' AND Uitgelicht = 'ja' ORDER BY Jaar DESC, ID DESC ");
					}
					elseif ($Categorie_Selectie == 'deck'){
					$sql->Query("SELECT * FROM cases WHERE Type_Deck = 'ja' AND Actief = 'ja' ORDER BY Jaar DESC, ID DESC ");
					}			
					elseif ($Categorie_Selectie == 'design'){
					$sql->Query("SELECT * FROM cases WHERE Type_Design = 'ja' AND Actief = 'ja' ORDER BY Jaar DESC, ID DESC ");
					}				
					elseif ($Categorie_Selectie == 'alles'){
					$sql->Query("SELECT * FROM cases WHERE  Actief = 'ja' ORDER BY Jaar DESC, ID DESC ");
					}				
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
							$Uitgelicht = $sql->data[Uitgelicht];
							$counter = $counter + 1;
							
?>
				
				
								<a href="case.php?jaar=<? echo $Jaar?>&klant=<? echo $Klant_Lowercase;?>" >
								<div id="case-D">

									<div id="case-D-image" style="background-image: url('../_images/cases/<? echo $Jaar; echo $Klant_Lowercase;?>-aanjager.jpg'); background-size: 290px;">
										<img src="../_images/cases/<? echo $Jaar; echo $Klant_Lowercase;?>-logo.jpg" class="case-D-logo">
									</div>
									<div id="case-D-client">
										<? echo $Klant;?> 
									</div>								
									<div id="case-D-title">
										<? echo $Titel_Kort;?>
									</div>
								</div>
								</a>
								<div id="case-D-spacing">
									&nbsp;
								</div>
				
				
<?
					}
?>
				
					<? if ($Categorie_Selectie == ''){ ?>
						<div style="clear:both">
							<center><button class="button-pink" onclick="location.href='index.php?categorie=alles'">Bekijk alle cases &nbsp;&nbsp;&gt;</button></center>
							<br><br>
						</div>
					<? }?>
					
				</div>
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
		
<!--SHOWREEL PROMO   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||   	
		<div id="showreel-promo-M">
			<a href="../showreel/"><img src="../_images/showreel-promo.png" style="width:100%;">	</a>
		</div>
 --> 		
		
		<div id="navigation-M">
			<div id="navigation-M-logo">
				<a href="../index.php"><img src="../_images/logo.png" style="width: 90px;"></a>
			</div>
			<div id="navigation-M-hamburger">
				<a href="../mobile-menu/"><img src="../_images/icons/hamburger.png" style="width:20px; margin-top:10px;"></a>

			</div>
		</div>
		
		<div id="space_100"></div>
		<div id="space_25"></div>
		<div id="space_10"></div>
		<div id="space_10"></div>
		<div id="space_10"></div>
		
		<div id="case-gallery-M">
			<h1 class="s30">Cases</h1>
		</div>	
			
		<div id="filter-M">
			<a href="index.php"><div id="filter-M-item<? if($Categorie_Selectie ==''){?>-active<?}?>" class="filter-left"><span class="m-top">Uitgelicht</span></div></a>
			<a href="index.php?categorie=deck"><div id="filter-M-item<? if($Categorie_Selectie =='deck'){?>-active<?}?>">Decks</div></a>
			<a href="index.php?categorie=design"><div id="filter-M-item<? if($Categorie_Selectie =='design'){?>-active<?}?>">Design</div></a>
			<a href="index.php?categorie=alles"><div id="filter-M-item<? if($Categorie_Selectie =='alles'){?>-active<?}?>" class="filter-right">Alles</div></a>					
		</div>
		
		<div id="space_20"></div>

		
		<div id="case-gallery-M">

			<?
					$counter = 0;	
			  
			  		if ($Categorie_Selectie == ''){
					$sql->Query("SELECT * FROM cases WHERE Actief = 'ja' and Uitgelicht ='ja' ORDER BY Jaar DESC, ID DESC ");
					}
					elseif ($Categorie_Selectie == 'deck'){
					$sql->Query("SELECT * FROM cases WHERE Type_Deck = 'ja' AND Actief = 'ja' ORDER BY Jaar DESC, ID DESC ");
					}			
					elseif ($Categorie_Selectie == 'design'){
					$sql->Query("SELECT * FROM cases WHERE Type_Design = 'ja' AND Actief = 'ja' ORDER BY Jaar DESC, ID DESC ");
					}				
					elseif ($Categorie_Selectie == 'alles'){
					$sql->Query("SELECT * FROM cases WHERE Actief = 'ja' ORDER BY Jaar DESC, ID DESC ");
					}				
						for ($i = 0; $i < $sql->rows; $i++) {
							$sql->Fetch($i);
							$ID = $sql->data[ID];
							$Actief = $sql->data[Actief];
							$Klant = $sql->data[Klant];
							$Klant_Kort = substr($Klant, 0, 18);
							$Klant_Lowercase = $sql->data[Klant_Lowercase];
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
							$Uitgelicht = $sql->data[Uitgelicht];
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
										<? echo $Klant_Kort;?>
									</div>								
									<div id="case-gallery-M-title">
										<? echo $Titel_Kort;?>
									</div>								


								</div>
								</a>

								<? if ($counter % 2) {?><div id="case-gallery-M-space">&nbsp;</div><?}?>
							
<?
					}
?>			
			
					<? if ($Categorie_Selectie == ''){ ?>
						<div style="clear:both">
							<center><button class="button-pink" onclick="location.href='index.php?categorie=alles'">Bekijk alle cases &nbsp;&nbsp;&gt;</button></center>
						</div>
					<? }?>			
			
		</div>
		<div id="space_100"></div>
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
		</div>	<?
		}
?>
		

	
	</body>
</html>
