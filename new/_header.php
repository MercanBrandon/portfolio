<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1"/>
		<link rel="stylesheet" media="screen, projection" href="public/css/main.css" />
		<link href="https://fonts.googleapis.com/css?family=Arima+Madurai|Josefin+Sans|Raleway|Roboto" rel="stylesheet">
		<!-- jQuery library (served from Google) -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<!-- bxSlider Javascript file -->
		<script src="jquery.bxslider/jquery.bxslider.min.js"></script>
		<!-- bxSlider CSS file -->
		<link href="jquery.bxslider/jquery.bxslider.css" rel="stylesheet" />
		<title> CV de MERCAN Brandon </title>
		<meta name="description" content="Site officiel de MERCAN Brandon, un jeune devellopeur guadeloupeen qui a soit de vous servir">
		<meta name="keywords" content="MERCAN Brandon, MERCAN, devellopeur, Guadeloupe, informaticien, GPE">
		<script type="text/javascript">
		$(document).ready(function(){
		  $('.bxslider').bxSlider();
		});
		</script>
	</head>

<body>
<header id="header" style="text-align:center;">
	<div ><img src="public/img/logo-mercan-brandon.png" alt="logo-mercan-brandon" id="logo"/></div>
	<nav id="mainNav">
		<ul id="menu">
			<li><a href="index.php"> Accueil </a></li>
			<li><a href="cv.php"> Curiculum Vitae</a></li>
			<li><a href="#"> PPE </a></li>
			<!-- <li><a href="#"> Stages </a><ul>
					<a href="#"><li>1ere Année</a></li>
					<a href="#"><li>2eme Année</a></li></ul></li> -->
			<li><a href="#"> Veille </a></li>
		</ul>
	</nav>

		<select id="responsiveMenu" onchange="window.location.href=this.value">
			<option value="index.php" id="" >Accueil</option>
			<option value="cv.php" id="" >Curiculum Vitae</option>
			<option value="#" id="" >PPE</option>
			<optgroup label="Stages">
				<option value="#" id="" ><li>1ere Année</a></option>
				<option value="#" id="" ><li>2eme Année</a></option>
			</optgroup>
			<option value="#" id="" > Veille </a></option>
			<option value="#" id="" > Contact </a></option>
		</select>
		<!-- <option><a href="index.php"> Accueil </a></option>
		<option><a href="cv.php"> Curiculum Vitae</a></option>
		<option><a href="#"> PPE </a></option>
		<optgroup label="Stages">
			<option><a href="#"><li>1ere Année</a></option>
			<option><a href="#"><li>2eme Année</a></option>
		</optgroup>-->

</header>
