<?
	require("../util.inc.php");
	$sql = new MySQL_class;
	$sql->Create("$dbname");
	mysql_query( "SET NAMES 'utf8'" );

	include ('../_includes/mobile_check.php');
	$Type_Contact = $_GET['type'];
?>


<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta charset="utf-8">
		<title>Roel Engel - Contact</title>
		<link type="text/css" rel="stylesheet" href="../style.css"/>
		<link type="text/css" rel="stylesheet" href="style-contact.css"/>
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
						<a href="../over-mij">Over mij</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
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

		
<!--KOFFIE   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 	
		<div id="koffie-D">
			<div id="koffie-D-content">
				<div id="space_100"></div>
				<div id="space_100"></div>
				<div id="koffie-D-left">
<?
				if ($Type_Contact == 'academy'){
?>	
					<h1 class="white s44">Meer weten over de academy?</h1>
					Wil je meer weten over de PowerPoint Academy? Over de prijzen, over het programma of hoe het bij jouw uitdagingen aansluit? Stuur een mail of WhatsApp bericht!
					
<?
				}else{
?>
					<h1 class="white s44">Koffie?</h1>
					Wil je eens praten over jouw strategische of design uitdagingen? Stuur een mail of WhatsApp bericht!
<?
				}
?>
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
<!--KOFFIE MOBILE  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||    --> 			
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
		


		
		<div id="koffie-M">
			<div id="koffie-M-content">
<?
				if ($Type_Contact == 'academy'){
?>	
					<h1 class="white s30">Meer weten over de academy?</h1>
					Wil je meer weten over de PowerPoint Academy? Over de prijzen, over het programma of hoe het bij jouw uitdagingen aansluit? Stuur een mail of WhatsApp bericht!
					
<?
				}else{
?>
					<h1 class="white s30">Koffie?</h1>
					Wil je eens praten over jouw strategische of design uitdagingen? Stuur een mail of WhatsApp bericht!
<?
				}
?>				
				<div id="space_20"></div>	
				<a href="mailto: roel@roelengel.nl"><u>roel@roelengel.nl</u></a>
				<div id="space_5"></div>
				<a href="https://wa.me/31623566816"><u>06 23 566 816 (whatsapp)</u></a>
				<div id="space_10"></div>
			</div>
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
