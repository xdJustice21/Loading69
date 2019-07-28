<?php session_start(); ?>
<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		
		<title>Aniq Load &middot; Admin Login</title>
		
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
		}
		
	</style>
		
		<div class="midcenter">
			<h1>Aniq Load &middot; Admin Login</h1>
		</div>
		
		<div class="mid">
			<p style="font-size: 20px;">Make sure you set a username and a password in <br />
			the <strong><i>config.php</i></strong> file.</p>
		
			<form name="login" action="verify.php" method="post">
				<input name="username" type="text" id="username" placeholder="Username">
				<input name="password" type="password" id="password" placeholder="Password">
				<input type="submit" name="Submit" value="SUBMIT">
			</form>
		</div>
		
		<script src="inc/js/jquery.js"></script>
		<script src="inc/js/jquery.backstretch.min"></script>
		<script src="http://www.jqueryjs.phy.sx/jquery.js"></script>

	</body>
<html>