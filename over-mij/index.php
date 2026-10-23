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
		<title>Roel Engel - Over mij</title>
		<link type="text/css" rel="stylesheet" href="../style.css"/>
		<link type="text/css" rel="stylesheet" href="style-over-mij.css"/>
		
		<meta property="og:title" content="Roel ENgel | Over mij | Freelance Visualisator">
		<meta property="og:image" content="http://www.roelengel.nl/_images/home/roel-mobile.jpg">
		
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

<!--NAVIGATIE   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<div id="navigation-D">
			<div id="navigation-D-content">
				<div id="navigation-D-logo">
					<a href="../index.php"><img src="../_images/logo.png" style="width: 112px;"></a>
				</div>
				<div id="navigation-D-urls">
					<div id="navigation-D-urls-top">
						<a href="../powerpoint-academy">PowerPoint Academy</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
						<a href="../over-mij"class="navigation-D-active2">Over mij</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
						<a href="https://www.linkedin.com/in/roelengel/" target="_blank">LinkedIn</a>
					</div>
					<div id="navigation-D-urls-bottom">
						<div id="navigation-D-urls-links">
									<a href="../presentatie-decks/">Decks</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
		
<!--HEADER OVERVIEW ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<div id="header-overmij-D">
			<div id="header-overmij-D-content">
				<div id="header-overmij-D-content-1">
					<h1 class="s44">I ❤ strategy, design &#38; UX</h1>
					De afgelopen 19 jaar heb ik o.a. NU.nl, de Postcode Loterij, LeasePlan en de Rijksoverheid mogen helpen in innovatie en digitalisering. In functies als Strategy Director, Business Consultant en Director of Digital Growth.<br>
					<br>
					Na een sabbatical van een jaar heb ik in 2022 besloten om te gaan freelancen. Om te kunnen doen wat ik het leukste vind en waar ik het best tot mijn recht kom; het visualiseren van verhalen, merken en customer journey's.<br>
					<br>
					Plat gezegd maak ik kick-ass PowerPoint decks; zowel de vorm als de inhoud. En design ik logo's, huisstijlen en de UX/UI van jouw site of app. <br>
					<br>
					<br>
					<img src="../_images/over-mij/handtekening.png" style="width:100px;">
				</div>
				<div id="header-overmij-D-content-2">
					<img src="../_images/over-mij/roel.jpg" style="width:480px;"  >
				</div>
				
			</div>
			<div id="space_10"></div>
		</div>
		
		
<!--CV ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<div id="cv-D">
			<div id="cv-D-content">
				<h1 class="s44">CV/ Projecten</h1>
				
				<!--Roelengel  --> 
				<div id="cv-D-baan">
					<div id="cv-D-werkgever">
						<img src="../_images/cases/roelengel-logo.jpg" class="logo-S"><br>
						<div id="space_10"></div>
						2022-nu
					</div>
					<div id="cv-D-cases-lijst">								
						<span class="functie">Freelance Visualisator</span><br>
						<span class="bedrijf">Roelengel.nl</span><br>
<?
					$sql->Query("SELECT * FROM cases WHERE Vanuit_Uitgebreid = 'Roelengel.nl'  ORDER by id DESC ");
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
						<a href="../cases/case.php?jaar=<? echo $Jaar;?>&klant=<? echo $Klant_Lowercase;?>">
						<div id="cv-D-case">
							<div id="cv-d-case-logo">
								<img src="../_images/cases/<? echo $Jaar;?><? echo $Klant_Lowercase;?>-logo.jpg" class="logo-XS">
							</div>
							<div id="cv-d-case-text">
								<? echo $Titel;?>
							</div>							
						</div>
						</a>
<?
						}
?>							
					</div>
				</div>					
				<!--einde Roelengel.nl    --> 					
				
				<!--4NG  --> 
				<div id="space_50"></div>
				<div id="cv-D-baan">
					<div id="cv-D-werkgever">
						<img src="../_images/cases/4ng-logo.jpg" class="logo-S"><br>
						<div id="space_10"></div>
						2018-2022
					</div>
					<div id="cv-D-cases-lijst">								
						<span class="functie">Strategy Director</span><br>
						<span class="bedrijf">Nextfields - part of 4NG</span><br>
<?
					$sql->Query("SELECT * FROM cases WHERE Vanuit_Uitgebreid = 'Nextfields - part of 4NG' ORDER by id DESC ");
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
						<a href="../cases/case.php?jaar=<? echo $Jaar;?>&klant=<? echo $Klant_Lowercase;?>">
						<div id="cv-D-case">
							<div id="cv-d-case-logo">
								<img src="../_images/cases/<? echo $Jaar;?><? echo $Klant_Lowercase;?>-logo.jpg" class="logo-XS">
							</div>
							<div id="cv-d-case-text">
								<? echo $Titel;?>
							</div>							
						</div>
						</a>
<?
						}
?>							
					</div>
				</div>					
				<!--einde 4NG    --> 	

				<!--Sanoma Online Performance  --> 
				<div id="space_50"></div>
				<div id="cv-D-baan">
					<div id="cv-D-werkgever">
						<img src="../_images/cases/sanomasbs-logo.jpg" class="logo-S"><br>
						<div id="space_10"></div>
						2016-2017
					</div>
					<div id="cv-D-cases-lijst">								
						<span class="functie">Director Online Performance &#38; Data Science</span><br>
						<span class="bedrijf">Sanoma &#38; SBS - aansturing van een 25 FTE team</span><br>
<?
					$sql->Query("SELECT * FROM cases WHERE Vanuit_Uitgebreid = 'Sanoma SBS - Online Performance' ORDER by Jaar DESC ");
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
						<a href="../cases/case.php?jaar=<? echo $Jaar;?>&klant=<? echo $Klant_Lowercase;?>">
						<div id="cv-D-case">
							<div id="cv-d-case-logo">
								<img src="../_images/cases/<? echo $Jaar;?><? echo $Klant_Lowercase;?>-logo.jpg" class="logo-XS">
							</div>
							<div id="cv-d-case-text">
								<? echo $Titel;?>
							</div>							
						</div>
						</a>
<?
						}
?>							
					</div>
				</div>					
				<!--einde Sanoma Online Performance    --> 	
				
				<!--Sanoma Business Consultant   --> 
				<div id="space_50"></div>
				<div id="cv-D-baan">
					<div id="cv-D-werkgever">
						<img src="../_images/cases/sanomasbs-logo.jpg" class="logo-S"><br>
						<div id="space_10"></div>
						2013-2017
					</div>
					<div id="cv-D-cases-lijst">								
						<span class="functie">Business Consultant - Strategy and M&#38;A</span><br>
						<span class="bedrijf">Sanoma &#38; SBS - Strategy team</span><br>
<?
					$sql->Query("SELECT * FROM cases WHERE Vanuit_Uitgebreid = 'Sanoma SBS - Strategy team' ORDER by Jaar DESC ");
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
						<a href="../cases/case.php?jaar=<? echo $Jaar;?>&klant=<? echo $Klant_Lowercase;?>">
						<div id="cv-D-case">
							<div id="cv-d-case-logo">
								<img src="../_images/cases/<? echo $Jaar;?><? echo $Klant_Lowercase;?>-logo.jpg" class="logo-XS">
							</div>
							<div id="cv-d-case-text">
								<? echo $Titel;?>
							</div>							
						</div>
						</a>
<?
						}
?>							
					</div>
				</div>					
				<!--einde Sanoma Business Consultant    --> 				
				
			

	
				<!--stepaday   --> 
				<div id="space_50"></div>
				<div id="cv-D-baan">
					<div id="cv-D-werkgever">
						<img src="../_images/cases/sanoma-logo.jpg" class="logo-S"><br>
						<div id="space_10"></div>
						2012
					</div>
					<div id="cv-D-cases-lijst">								
						<span class="functie">Product Manager</span><br>
						<span class="bedrijf">Sanoma - Digital Women</span><br>
<?
					$sql->Query("SELECT * FROM cases WHERE Vanuit_Uitgebreid = 'Sanoma - Digital Women' ORDER by Jaar DESC ");
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
						<a href="../cases/case.php?jaar=<? echo $Jaar;?>&klant=<? echo $Klant_Lowercase;?>">
						<div id="cv-D-case">
							<div id="cv-d-case-logo">
								<img src="../_images/cases/<? echo $Jaar;?><? echo $Klant_Lowercase;?>-logo.jpg" class="logo-XS">
							</div>
							<div id="cv-d-case-text">
								<? echo $Titel;?>
							</div>							
						</div>
						</a>
<?
						}
?>							
					</div>
				</div>					
				<!--einde stepaday    --> 	

				<!--NU.nl    --> 
				<div id="space_50"></div>
				<div id="cv-D-baan">
					<div id="cv-D-werkgever">
						<img src="../_images/cases/sanoma-logo.jpg" class="logo-S"><br>
						<div id="space_10"></div>
						2010-2011
					</div>
					<div id="cv-D-cases-lijst">								
						<span class="functie">Product Manager</span><br>
						<span class="bedrijf">Sanoma - NU.nl</span><br>
<?
					$sql->Query("SELECT * FROM cases WHERE Vanuit_Uitgebreid = 'Sanoma - NU.nl' ORDER by Jaar DESC ");
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
						<a href="../cases/case.php?jaar=<? echo $Jaar;?>&klant=<? echo $Klant_Lowercase;?>">
						<div id="cv-D-case">
							<div id="cv-d-case-logo">
								<img src="../_images/cases/<? echo $Jaar;?><? echo $Klant_Lowercase;?>-logo.jpg" class="logo-XS">
							</div>
							<div id="cv-d-case-text">
								<? echo $Titel;?>
							</div>							
						</div>
						</a>
<?
						}
?>							
					</div>
				</div>					
				<!--einde NU.nl    --> 

				
				<!--ilse media    --> 
				<div id="space_50"></div>
				<div id="cv-D-baan">
					<div id="cv-D-werkgever">
						<img src="../_images/cases/ilsemedia-logo.jpg" class="logo-S"><br>
						<div id="space_10"></div>
						2007-2009
					</div>
					<div id="cv-D-cases-lijst">								
						<span class="functie">Business Developer</span><br>
						<span class="bedrijf">ilse media</span><br>
<?
					$sql->Query("SELECT * FROM cases WHERE Vanuit_Uitgebreid = 'ilsemedia' ORDER by Jaar DESC ");
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
						<a href="../cases/case.php?jaar=<? echo $Jaar;?>&klant=<? echo $Klant_Lowercase;?>">
						<div id="cv-D-case">
							<div id="cv-d-case-logo">
								<img src="../_images/cases/<? echo $Jaar;?><? echo $Klant_Lowercase;?>-logo.jpg" class="logo-XS">
							</div>
							<div id="cv-d-case-text">
								<? echo $Titel;?>
							</div>							
						</div>
						</a>
<?
						}
?>							
					</div>
				</div>	
				<!--einde ilse media    --> 
				
				
				
				
				
				
				<div id="space_100"></div>
				
				
			<!--Sluiten van cv-D en cv-D-content dives (2 stuks)    -->	
			</div>
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
		
<!--MOBILE HEADER  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 			
		<div id="header-overmij-M">
			<div id="header-overmij-M-content">
				<h1 class="s30">I ❤ strategy, design &#38; UX</h1>
				De afgelopen 19 jaar heb ik o.a. NU.nl, de Postcode Loterij, LeasePlan en de Rijksoverheid mogen helpen in innovatie en digitalisering. In functies als Strategy Director, Business Consultant en Director of Digital Growth.
				<div id="space_20"></div>
								<img src="../_images/over-mij/roel2.jpg" style="width:100%;"  >
				<div id="space_20"></div>
				Na een sabbatical van een jaar heb ik in 2022 besloten om te gaan freelancen. Om te kunnen doen wat ik het leukste vind en waar ik het best tot mijn recht kom; het visualiseren van verhalen, merken en customer journey's.<br>
				<br>
				Plat gezegd maak ik kick-ass PowerPoint decks; zowel de vorm als de inhoud. En design ik logo's, huisstijlen en de UX/UI van jouw site of app. <br>
				<br>
				<img src="../_images/over-mij/handtekening.png" style="width:100px;">
				<div id="space_20"></div>
				<div id="space_20"></div>
				
			</div>
		</div>
		
<!--MOBILE CV ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<div id="cv-M">
			<div id="cv-M-content">
				<h1 class="s30">CV/ Projecten</h1>

				<!--Roelengel   --> 
				<div id="cv-M-baan">
					<div id="cv-M-werkgever">
						<img src="../_images/cases/roelengel-logo.jpg" style="width:100%;"><br>
						<div id="space_10"></div>
						22-nu
					</div>
					<div id="cv-M-space"><img src="../_images/pixel.png"></div>
					<div id="cv-M-cases-lijst">								
						<span class="functie-M">Freelance Visualisator</span><br>
						<span class="bedrijf-M">Roelengel.nl</span><br>
<?
					$sql->Query("SELECT * FROM cases WHERE Vanuit_Uitgebreid = 'Roelengel.nl' AND Actief = 'ja' ORDER by id DESC ");
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
						<a href="../cases/case.php?jaar=<? echo $Jaar;?>&klant=<? echo $Klant_Lowercase;?>">
						<div id="cv-M-case">
							<div id="cv-M-case-logo">
								<img src="../_images/cases/<? echo $Jaar;?><? echo $Klant_Lowercase;?>-logo.jpg" class="logo-XS">
							</div>
							<div id="cv-M-case-text">
								<? echo $Titel_Kort;?>
							</div>							
						</div>
						</a>
<?
						}
?>							
					</div>
				</div>	
				<!-- einde Roelengel   -->				
				
				
				<div id="space_50"></div>
				
				<!--4NG   --> 
				<div id="cv-M-baan">
					<div id="cv-M-werkgever">
						<img src="../_images/cases/4ng-logo.jpg" style="width:100%;"><br>
						<div id="space_10"></div>
						18-22
					</div>
					<div id="cv-M-space"><img src="../_images/pixel.png"></div>
					<div id="cv-M-cases-lijst">								
						<span class="functie-M">Strategy Director</span><br>
						<span class="bedrijf-M">Nextfields - part of 4NG</span><br>
<?
					$sql->Query("SELECT * FROM cases WHERE Vanuit_Uitgebreid = 'Nextfields - part of 4NG' ORDER by id DESC ");
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
						<a href="../cases/case.php?jaar=<? echo $Jaar;?>&klant=<? echo $Klant_Lowercase;?>">
						<div id="cv-M-case">
							<div id="cv-M-case-logo">
								<img src="../_images/cases/<? echo $Jaar;?><? echo $Klant_Lowercase;?>-logo.jpg" class="logo-XS">
							</div>
							<div id="cv-M-case-text">
								<? echo $Titel_Kort;?>
							</div>							
						</div>
						</a>
<?
						}
?>							
					</div>
				</div>	
				<!-- einde 4NG   --> 				
				<div id="space_50"></div>
				
				<!--Sanoma Online Performance    --> 
				<div id="cv-M-baan">
					<div id="cv-M-werkgever">
						<img src="../_images/cases/sanomasbs-logo.jpg" style="width:100%;"><br>
						<div id="space_10"></div>
						16-17
					</div>
					<div id="cv-M-space"><img src="../_images/pixel.png"></div>
					<div id="cv-M-cases-lijst">								
						<span class="functie-M">Director Online Performance &#38; Data Science</span><br>
						<span class="bedrijf-M">Sanoma &#38; SBS - aansturing van een 25 FTE team</span><br>
<?
					$sql->Query("SELECT * FROM cases WHERE Vanuit_Uitgebreid = 'Sanoma SBS - Online Performance' ORDER by Jaar DESC ");
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
						<a href="../cases/case.php?jaar=<? echo $Jaar;?>&klant=<? echo $Klant_Lowercase;?>">
						<div id="cv-M-case">
							<div id="cv-M-case-logo">
								<img src="../_images/cases/<? echo $Jaar;?><? echo $Klant_Lowercase;?>-logo.jpg" class="logo-XS">
							</div>
							<div id="cv-M-case-text">
								<? echo $Titel_Kort;?>
							</div>							
						</div>
						</a>
<?
						}
?>							
					</div>
				</div>	
				<!--einde Sanoma Online Performance    --> 
				<div id="space_50"></div>

				<!--Sanoma Business Consultant    --> 
				<div id="cv-M-baan">
					<div id="cv-M-werkgever">
						<img src="../_images/cases/sanomasbs-logo.jpg" style="width:100%;"><br>
						<div id="space_10"></div>
						13-17
					</div>
					<div id="cv-M-space"><img src="../_images/pixel.png"></div>
					<div id="cv-M-cases-lijst">								
						<span class="functie-M">Business Consultant - Strategy and M&#38;A</span><br>
						<span class="bedrijf-M">Sanoma &#38; SBS - Strategy team</span><br>
<?
					$sql->Query("SELECT * FROM cases WHERE Vanuit_Uitgebreid = 'Sanoma SBS - Strategy team' ORDER by Jaar DESC ");
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
						<a href="../cases/case.php?jaar=<? echo $Jaar;?>&klant=<? echo $Klant_Lowercase;?>">
						<div id="cv-M-case">
							<div id="cv-M-case-logo">
								<img src="../_images/cases/<? echo $Jaar;?><? echo $Klant_Lowercase;?>-logo.jpg" class="logo-XS">
							</div>
							<div id="cv-M-case-text">
								<? echo $Titel_Kort;?>
							</div>							
						</div>
						</a>
<?
						}
?>							
					</div>
				</div>	
				<!--einde Sanoma Business Consultant    --> 				
				
				<div id="space_50"></div>

	
				
				<!--stepaday    --> 
				<div id="cv-M-baan">
					<div id="cv-M-werkgever">
						<img src="../_images/cases/sanoma-logo.jpg" style="width:100%;"><br>
						<div id="space_10"></div>
						2012
					</div>
					<div id="cv-M-space"><img src="../_images/pixel.png"></div>
					<div id="cv-M-cases-lijst">								
						<span class="functie-M">Product Manager</span><br>
						<span class="bedrijf-M">Sanoma - Digital Women</span><br>
<?
					$sql->Query("SELECT * FROM cases WHERE Vanuit_Uitgebreid = 'Sanoma - Digital Women' ORDER by Jaar ASC ");
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
						<a href="../cases/case.php?jaar=<? echo $Jaar;?>&klant=<? echo $Klant_Lowercase;?>">
						<div id="cv-M-case">
							<div id="cv-M-case-logo">
								<img src="../_images/cases/<? echo $Jaar;?><? echo $Klant_Lowercase;?>-logo.jpg" class="logo-XS">
							</div>
							<div id="cv-M-case-text">
								<? echo $Titel_Kort;?>
							</div>							
						</div>
						</a>
<?
						}
?>							
					</div>
				</div>	
				<!--einde stepaday    --> 
				
				<div id="space_50"></div>
				

				<!--NU.nl    --> 
				<div id="cv-M-baan">
					<div id="cv-M-werkgever">
						<img src="../_images/cases/sanoma-logo.jpg" style="width:100%;"><br>
						<div id="space_10"></div>
						10-11
					</div>
					<div id="cv-M-space"><img src="../_images/pixel.png"></div>
					<div id="cv-M-cases-lijst">								
						<span class="functie-M">Product Manager</span><br>
						<span class="bedrijf-M">Sanoma - NU.nl</span><br>
<?
					$sql->Query("SELECT * FROM cases WHERE Vanuit_Uitgebreid = 'Sanoma - NU.nl' ORDER by Jaar ASC ");
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
						<a href="../cases/case.php?jaar=<? echo $Jaar;?>&klant=<? echo $Klant_Lowercase;?>">
						<div id="cv-M-case">
							<div id="cv-M-case-logo">
								<img src="../_images/cases/<? echo $Jaar;?><? echo $Klant_Lowercase;?>-logo.jpg" class="logo-XS">
							</div>
							<div id="cv-M-case-text">
								<? echo $Titel_Kort;?>
							</div>							
						</div>
						</a>
<?
						}
?>							
					</div>
				</div>	
				<!--einde NU.nl    --> 

				<div id="space_50"></div>
				
 

				<!--ilse media    --> 
				<div id="cv-M-baan">
					<div id="cv-M-werkgever">
						<img src="../_images/cases/ilsemedia-logo.jpg" style="width:100%;"><br>
						<div id="space_10"></div>
						07-09
					</div>
					<div id="cv-M-space"><img src="../_images/pixel.png"></div>
					<div id="cv-M-cases-lijst">								
						<span class="functie-M">Business Developer</span><br>
						<span class="bedrijf-M">ilse media</span><br>
<?
					$sql->Query("SELECT * FROM cases WHERE Vanuit_Uitgebreid = 'ilsemedia' ORDER by Jaar DESC ");
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
						<a href="../cases/case.php?jaar=<? echo $Jaar;?>&klant=<? echo $Klant_Lowercase;?>">
						<div id="cv-M-case">
							<div id="cv-M-case-logo">
								<img src="../_images/cases/<? echo $Jaar;?><? echo $Klant_Lowercase;?>-logo.jpg" class="logo-XS">
							</div>
							<div id="cv-M-case-text">
								<? echo $Titel_Kort;?>
							</div>							
						</div>
						</a>
<?
						}
?>							
					</div>
				</div>	
				<!--einde ilse media    --> 				
				
				<div id="space_100"></div>
				
				
			<!--Sluiten van cv-D en cv-D-content dives (2 stuks)    -->	
			</div>
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		

<!-- MOBILE KOFFIE  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 			
		<div id="koffie-M">
			<div id="space_50"></div>
			<div id="koffie-M-content">
				<h1 class="white s26">Koffie?</h1>
				Wil je eens praten over jouw strategische of design uitdagingen? Stuur een mail of WhatsApp bericht!
				<div id="space_20"></div>	
				<a href="mailto: roel@roelengel.nl"><u>roel@roelengel.nl</u></a>
				<div id="space_5"></div>
				<a href="https://wa.me/31623566816"><u>06 23 566 816 (whatsapp)</u></a>
				<div id="space_10"></div>
			</div>
			<div id="space_50"></div>
			<div id="space_50"></div>
			<!--<div id="koffie-M-logobarkop">
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
			-->
		</div>	
		
		
		
		
<?
		}
?>
		

	
	</body>
</html>
