<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1"/>
		<link rel="stylesheet" media="screen, projection" href="stylesheets\stylePerso.css" />
		<link rel="stylesheet" media="screen, projection" href="<?php echo $stylesheets; ?>" />
		<!--<link rel="stylesheet" media="screen, projection" href="stylesheets/menuResponsive.css"/>-->
		<link href="https://fonts.googleapis.com/css?family=Arima+Madurai|Josefin+Sans|Raleway|Roboto" rel="stylesheet">
		<!-- jQuery library (served from Google) -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<!-- bxSlider Javascript file -->
		<script src="jquery.bxslider/jquery.bxslider.min.js"></script>
		<!-- bxSlider CSS file -->
		<link href="jquery.bxslider/jquery.bxslider.css" rel="stylesheet" />
		<title> <?php echo $title; ?></title>
		<meta name="description" content="Site officiel de MERCAN Brandon, un jeune developpeur guadeloupeen qui a soif de vous servir">
		<meta name="keywords" content="MERCAN Brandon, MERCAN, developpeur, Guadeloupe, informaticien, GPE">
		<link rel="icon" href="images\imgJustice1.gif" type="image/gif">
	</head>

<body>
<header id="header" style="text-align:center;">
	<div ><a href="index.php"><img src="images/logo-mercan-brandon.png" alt="logo-mercan-brandon" id="logo"/></a></div>
	<nav id="mainNav">
		<ul id="menu">
			<li><a href="index.php"> Accueil </a></li>
			<li><a href="cv.php"> Curiculum Vitae</a></li>
			<li><a href="production.php"> Production </a></li>
			<!-- <li><a href="#"> Stages </a><ul>
					<a href="#"><li>1ere Année</a></li>
					<a href="#"><li>2eme Année</a></li></ul></li> -->
			<li><a href="veille.php"> Veille Juridique </a></li>
			<li><a href="veilleTech.php"> Veille Technologique </a></li>
		</ul>
	</nav>

	<span class="custom-dropdown custom-dropdown--white">
		<select id="responsiveMenu" onchange="window.location.href=this.value">
			<option value="index.php" id="" >Accueil</option>
			<option value="cv.php" id="" >Curiculum Vitae</option>
			<option value="production.php" id="" >Production</option>
			<!--<optgroup label="Stages">
				<option value="#" id="" ><li>1ere Année</a></option>
				<option value="#" id="" ><li>2eme Année</a></option>
			</optgroup>-->
			<option value="veille.php" id="" > Veille </option>
			<option value="veilleTech.php" id=""> Veille Technologique </option>
		</select>
	</span>
		<!-- <option><a href="index.php"> Accueil </a></option>
		<option><a href="cv.php"> Curiculum Vitae</a></option>
		<option><a href="#"> PPE </a></option>
		<optgroup label="Stages">
			<option><a href="#"><li>1ere Année</a></option>
			<option><a href="#"><li>2eme Année</a></option>
		</optgroup>-->

</header>
