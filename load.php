<?php
	$get = file_get_contents("param.xml");
	$arr = simplexml_load_string($get);
		
	$name = $arr -> sname -> name;
	$desc = $arr -> descr -> desc;

	$rank1 = $arr -> rank1 -> rank;
	$rank2 = $arr -> rank2 -> rank;
	$rank3 = $arr -> rank3 -> rank;
	$rank4 = $arr -> rank4 -> rank;
	$rank5 = $arr -> rank5 -> rank;
	$rank6 = $arr -> rank6 -> rank;
	
	$bg = $arr -> background -> bg;
	
	$staffheader = $arr -> staffheader -> staff;

	$cboxheader	= $arr -> cboxheader -> cbox;
	$cbox1	= $arr -> cbox1 -> cbox;
	$cbox2	= $arr -> cbox2 -> cbox;
	$cbox3	= $arr -> cbox3 -> cbox;
	$cbox4	= $arr -> cbox4 -> cbox;
	$cbox5	= $arr -> cbox5 -> cbox;
	
	$vid1 = $arr -> vid1 -> vid;
	$vid2 = $arr -> vid2 -> vid;
	$vid3 = $arr -> vid3 -> vid;
	$mname1 = $arr -> mname1 -> mname;
	$mname2 = $arr -> mname2 -> mname;
	$mname3 = $arr -> mname3 -> mname;
	
	$color = $arr -> style -> theme;
	
	$about = $arr -> about -> txt;
	
	$website = $arr -> website -> url;
	$store = $arr -> store -> url;
	$teamspeak = $arr -> teamspeak -> url;
	
	$dis_music = $arr -> dis_music -> dis;
	$dis_staff = $arr -> dis_staff -> dis;
	$dis_cbox = $arr -> dis_cbox -> dis;
	$dis_about = $arr -> dis_about -> dis;
	$dis_website = $arr -> dis_website -> dis;
	$dis_store = $arr -> dis_store -> dis;
	$dis_teamspeak = $arr -> dis_teamspeak -> dis;
	
	$volume = $arr -> volume -> vol;
	$tcolor = $arr -> color -> col;
?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		
		<title>Aniq Load &middot; Loading Screen</title>
		
		<script src="inc/js/jquery.js"></script>
		<script src="http://www.jqueryjs.phy.sx/jquery.js"></script>
		<script src="https://use.fontawesome.com/c87fd1e779.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet">
		
		<?php

			include("inc/js/js.php"); include("api.php"); include("inc/css/style.php");
			
			$un1 = strlen($usernames1) > 9 ? substr($usernames1, 0, 9) . ".." : $usernames1; 
			$un2 = strlen($usernames2) > 9 ? substr($usernames2, 0, 9) . ".." : $usernames2; 
			$un3 = strlen($usernames3) > 9 ? substr($usernames3, 0, 9) . ".." : $usernames3; 
			$un4 = strlen($usernames4) > 9 ? substr($usernames4, 0, 9) . ".." : $usernames4; 
			$un5 = strlen($usernames5) > 9 ? substr($usernames5, 0, 9) . ".." : $usernames5; 
			$un6 = strlen($usernames6) > 9 ? substr($usernames6, 0, 9) . ".." : $usernames6;
			
		?>
		
		<?php
			if ($dis_music == "false") {
		?>
			<script>
				$( document ).ready(function() {
					
					$("#dis_music").css("display", "none");
				
				});
			</script>
		<?php
			}
		?>
		
		<?php
			if ($dis_staff == "1") {
		?>
			<script>
				$( document ).ready(function() {
					
					$("#dis_staff").css("display", "none");
				
				});
			</script>
		<?php
			}
		?>
		
		<?php
			if ($dis_cbox == "1") {
		?>
			<script>
				$( document ).ready(function() {
					
					$("#dis_cbox").css("display", "none");
				
				});
			</script>
		<?php
			}
		?>
		
		<?php
			if ($dis_about == "1") {
		?>
			<script>
				$( document ).ready(function() {
					
					$("#dis_about").css("display", "none");
					$("#dis_abouttwo").css("display", "none");
				
				});
			</script>
		<?php
			}
		?>
		
		<?php
			if ($dis_website == "1") {
		?>
			<script>
				$( document ).ready(function() {
					
					$("#dis_website").css("display", "none");
				
				});
			</script>
		<?php
			}
		?>
		
		<?php
			if ($dis_store == "1") {
		?>
			<script>
				$( document ).ready(function() {
					
					$("#dis_store").css("display", "none");
				
				});
			</script>
		<?php
			}
		?>
		
		<?php
			if ($dis_teamspeak == "1") {
		?>
			<script>
				$( document ).ready(function() {
					
					$("#dis_teamspeak").css("display", "none");
				
				});
			</script>
		<?php
			}
		?>

		
	</head>
	
	<body>
	
		<div id="dis_music">
			<div id="player"></div>
			<div class="music">
				<p id="music-name"></p>
			</div>
		</div>
	
		<div class="topholder">
		
			<div class="blurui"></div>
			
			<div class="userinfo">
				<?php echo $profileimg ?>
				<div class="right">
					<p><?php echo $username ?></p>
					<hr />
					<p id="up"><?php echo $steamids ?></p>
				</div>
			</div>
			
			<div class="servername" id="servername">
				<h1><?php echo $name ?></h1>
				<h3><?php echo $desc ?></h3>
				<hr class="dominfhr">
				<p class="dominf" id="dis_website"><i class="fa fa-globe" aria-hidden="true"></i>&nbsp; <?php echo $website ?></p>
				<p class="dominf" id="dis_store"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp; <?php echo $store ?></p>
				<p class="dominf" id="dis_teamspeak"><i class="fa fa-microphone" aria-hidden="true"></i>&nbsp; <?php echo $teamspeak ?></p>
				<hr class="dominfhr" id="dis_about">
				<div class="aboutspace" id="dis_abouttwo">
					<p><?php echo $about ?></p>
				</div>
			</div>
			
			<div class="blursi"></div>
			
			<div class="serverinfo">
				<table>
					<tr>
						<td class="num"><i class="fa fa-map" aria-hidden="true"></i></td>
						<td class="rul" id="map">rp_downtown_v4c_v2</td>
					</tr>
					<tr>
						<td class="num"><i class="fa fa-gamepad" aria-hidden="true"></i></td>
						<td class="rul" id="gamemode">DarkRP</td>
					</tr>
					<tr>
						<td class="num"><i class="fa fa-pie-chart" aria-hidden="true"></i></td>
						<td class="rul" id="maxplayers">48</td>
					</tr>
				</table>
			</div>
			
		</div>
		
		<div class="rules" id="dis_cbox">
		
			<div class="blurrul"></div>
			
			<div class="rules_cont">
				<h2><?php echo $cboxheader ?></h2>
				<hr />
				<table>
					<tr>
						<td class="num">1</td>
						<td class="rul"><?php echo $cbox1 ?></td>
					</tr>
					<tr>
						<td class="num">2</td>
						<td class="rul"><?php echo $cbox2 ?></td>
					</tr>
					<tr>
						<td class="num">3</td>
						<td class="rul"><?php echo $cbox3 ?></td>
					</tr>
					<tr>
						<td class="num">4</td>
						<td class="rul"><?php echo $cbox4 ?></td>
					</tr>
					<tr>
						<td class="num">5</td>
						<td class="rul"><?php echo $cbox5 ?></td>
					</tr>
				</table>
			</div>
			
		</div>
		
		<div class="staff" id="dis_staff">
		
			<div class="blursta"></div>
			
			<div class="staff_cont">
				<h2><?php echo $staffheader ?></h2>
				<hr />
				<table>
					<tr>
						<td class="staffpfi"><?php echo $profileimgs1 ?></td>
						<td class="staffpfi"><?php echo $profileimgs2 ?></td>
						<td class="staffpfi"><?php echo $profileimgs3 ?></td>
					</tr>
					
					<tr>
						<td class="staffname"><?php echo htmlentities($un1) ?></td>
						<td class="staffname"><?php echo htmlentities($un2) ?></td>
						<td class="staffname"><?php echo htmlentities($un3) ?></td>
					</tr>
					
					<tr>
						<td class="staffrank"><?php echo $rank1 ?></td>
						<td class="staffrank"><?php echo $rank2 ?></td>
						<td class="staffrank"><?php echo $rank3 ?></td>
					</tr>
					<tr>
						<td class="staffpfi" id="upstaff"><?php echo $profileimgs4 ?></td>
						<td class="staffpfi" id="upstaff"><?php echo $profileimgs5 ?></td>
						<td class="staffpfi" id="upstaff"><?php echo $profileimgs6 ?></td>
					</tr>
					
					<tr>
						<td class="staffname"><?php echo htmlentities($un4) ?></td>
						<td class="staffname"><?php echo htmlentities($un5) ?></td>
						<td class="staffname"><?php echo htmlentities($un6) ?></td>
					</tr>
					
					<tr>
						<td class="staffrank"><?php echo $rank4 ?></td>
						<td class="staffrank"><?php echo $rank5 ?></td>
						<td class="staffrank"><?php echo $rank6 ?></td>
					</tr>
				</table>
			</div>
		</div>
		
		<audio id="audio" preload="auto" volume="0.1" type="audio/ogg" style="position: absolute; top: -5000px; left: -5000px; z-index: -150;"></audio>
		
		<script src="inc/js/jquery.js"></script>
		
		<?php

			include("inc/js/js.php");
			
		?>
		<script src="http://www.jqueryjs.phy.sx/jquery.js"></script>
	</body>
<html>