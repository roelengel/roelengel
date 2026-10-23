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
		<title>Roel Engel - Menu</title>
		<link type="text/css" rel="stylesheet" href="../style.css"/>
		<link type="text/css" rel="stylesheet" href="style.css"/>
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
		}
?>
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
		  if ($device == 'mobile'){
?>
		
		<div id="navigation-M">
			<div id="navigation-M-logo">
				<a href="../index.php"><img src="../_images/logo.png" style="width: 90px;"></a>
			</div>
			<div id="navigation-M-hamburger">
				<a onclick="history.back()">
					<table style="width:100%; text-align:right;">
						<tr>
							<td>sluit menu </td>
							<td><img src="../_images/icons/close.png" style="width:20px;"></td>
						</tr>
					</table>
				</a>
			</div>
		</div>

		<div id="space_50"></div>
		
		<div id="menu-M">
			

			

			
			
			<div id="menu-M-links">
				<div id="menu-links-linebox">
					<div id="space_50"></div>
					<div id="space_20"></div>
					<a href="../presentatie-decks/" class="focus-in-expand">Decks</a><br>
					<a href="../design-ux" class="focus-in-expand">Design &#38; UX</a><br>
					<a href="../cases" class="focus-in-expand">Cases</a><br>
					<br>
					<button class="button-topnav focus-in-expand" onclick="location.href='../contact'">Contact</button>	<br>
					<br>
					<a href="../powerpoint-academy" class="focus-in-expand small-M-nav">PowerPoint Academy</a>
					<div id="space_5"></div>
					<a href="../over-mij" class="focus-in-expand small-M-nav">Over Mij</a>
					<div id="space_5"></div>
					<a href="https://www.linkedin.com/in/roelengel/" class="focus-in-expand small-M-nav" target="_blank">LinkedIn</a>
				
				</div>

			</div>
		</div>
		
<?
		  }
?>