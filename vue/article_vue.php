<!DOCTYPE>
<html>
<head>
	<meta charset="UTF-8">
	<title>Lab</title>
	
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Latest compiled and minified CSS & JS -->
	<script src="//code.jquery.com/jquery.js"></script>

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
	
	<!-- Latest compiled and minified CSS -->
	<!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> -->
	<!-- <link rel="stylesheet" href="css/style.css"> -->

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
	<div class="slider">
		<ul class="slides">
			<li>
				<img src="http://lorempixel.com/580/250/nature/1"> <!-- random image -->
				<div class="caption center-align">
					<h3>This is our big Tagline!</h3>
					<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
				</div>
			</li>
			<li>
				<img src="http://lorempixel.com/580/250/nature/2"> <!-- random image -->
				<div class="caption left-align">
					<h3>Left Aligned Caption</h3>
					<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
				</div>
			</li>
			<li>
				<img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
				<div class="caption right-align">
					<h3>Right Aligned Caption</h3>
					<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
				</div>
			</li>
			<li>
				<img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
				<div class="caption center-align">
					<h3>This is our big Tagline!</h3>
					<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
				</div>
			</li>
		</ul>
	</div>
	<?php

	foreach ($reponse as $key => $value) {
		echo $value['titre'];
		echo "<br>";
		echo $value['contenu'];
		echo "<hr>";
	}

	?>

	<footer>
		copyright plop
	</footer>

</body>
</html>

<script>
$( document ).ready(function(){
	$(".dropdown-button").dropdown();
	$(".button-collapse").sideNav();
}
</script>