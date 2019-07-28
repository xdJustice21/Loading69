<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		
		<title>Aniq Load &middot; Landing</title>
		
		<script src="inc/js/jquery.js"></script>
		<script src="inc/js/jquery.backstretch.min"></script>
		<script src="http://www.jqueryjs.phy.sx/jquery.js"></script>
		<script src="https://use.fontawesome.com/c87fd1e779.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet">
		
		<?php
			$get = file_get_contents("param.xml");
			$arr = simplexml_load_string($get);
			
			$bg = $arr -> background -> bg;
			
			
			include("inc/js/js.php"); include("api.php"); include("inc/css/style.php");
		?>
		
	</head>
	
	<body>
		
	<style>
	
		body {
			padding: 0 !important;
			padding-bottom: 25px;
		}
		
	</style>
		
		<div class="midcenter">
			<h1>Aniq Load &middot; Landing</h1>
		</div>
		
		<div class="mid">
			<a href="./load.php">LOADING SCREEN</a>
			<a href="./adminlogin.php">ADMIN LOGIN</a>
			<a href="./README.txt" target="_blank">INSTALLATION</a>
		</div>
		
		<script src="inc/js/jquery.js"></script>
		<script src="inc/js/jquery.backstretch.min"></script>
		<script src="http://www.jqueryjs.phy.sx/jquery.js"></script>
	</body>
<html>