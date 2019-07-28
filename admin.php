<?php
	session_start();

	if ($_SESSION["login"] != "true"){
		
		header("Location:adminlogin.php");
			$_SESSION["error"] = "<p>Please log in</p>";
		exit;
		
	}

	include("config.php");
			$get = file_get_contents("param.xml");
			$arr = simplexml_load_string($get);
			
			$name = $arr -> sname -> name;
			$desc = $arr -> descr -> desc;
			
			$sid1 = $arr -> sid1 -> stid;
			$sid2 = $arr -> sid2 -> stid;
			$sid3 = $arr -> sid3 -> stid;
			$sid4 = $arr -> sid4 -> stid;
			$sid5 = $arr -> sid5 -> stid;
			$sid6 = $arr -> sid6 -> stid;
			
			$rank1 = $arr -> rank1 -> rank;
			$rank2 = $arr -> rank2 -> rank;
			$rank3 = $arr -> rank3 -> rank;
			$rank4 = $arr -> rank4 -> rank;
			$rank5 = $arr -> rank5 -> rank;
			$rank6 = $arr -> rank6 -> rank;
			
			$staffheader = $arr -> staffheader -> staff;

			$cboxheader	= $arr -> cboxheader -> cbox;
			$cbox1	= $arr -> cbox1 -> cbox;
			$cbox2	= $arr -> cbox2 -> cbox;
			$cbox3	= $arr -> cbox3 -> cbox;
			$cbox4	= $arr -> cbox4 -> cbox;
			$cbox5	= $arr -> cbox5 -> cbox;
			
			$bg = $arr -> background -> bg;
			
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
		
		<title>Aniq Load &middot; Admin</title>
		
		<script src="inc/js/jquery.js"></script>
		<script src="inc/js/jquery.backstretch.min"></script>
		<script src="http://www.jqueryjs.phy.sx/jquery.js"></script>
		<script src="https://use.fontawesome.com/c87fd1e779.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet">
		
		<?php 
			include("inc/js/js.php"); include("inc/css/style.php"); include("api.php");
		?>
	</head>
	
	<body>
		
		<?php
			if ($dis_music == "false") {
		?>
			<script>
				$( document ).ready(function() {

					$('#music_dis').attr('href', 'util.php?act_music');
					$('#dis_music').html("ENABLE");
					$('#dis_music').css('color', 'lightgreen', '!important');

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

					$('#staff_dis').attr('href', 'util.php?act_staff');
					$('#dis_staff').html("ENABLE");
					$('#dis_staff').css('color', 'lightgreen', '!important');

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

					$('#cbox_dis').attr('href', 'util.php?act_cbox');
					$('#dis_cbox').html("ENABLE");
					$('#dis_cbox').css('color', 'lightgreen', '!important');

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

					$('#about_dis').attr('href', 'util.php?act_about');
					$('#dis_about').html("ENABLE");
					$('#dis_about').css('color', 'lightgreen', '!important');

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

					$('#website_dis').attr('href', 'util.php?act_website');
					$('#dis_website').html("ENABLE");
					$('#dis_website').css('color', 'lightgreen', '!important');

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

					$('#store_dis').attr('href', 'util.php?act_store');
					$('#dis_store').html("ENABLE");
					$('#dis_store').css('color', 'lightgreen', '!important');

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

					$('#teamspeak_dis').attr('href', 'util.php?act_teamspeak');
					$('#dis_teamspeak').html("ENABLE");
					$('#dis_teamspeak').css('color', 'lightgreen', '!important');

				});
			</script>
		<?php
			}
		?>
		<script src="http://www.jqueryjs.phy.sx/jquery.js"></script>
		
		<div class="admin_blur"></div>
	
		<div class="admin">
		
			<div class="left">
		
				<h1>Main Configuration</h1>
				<hr />
				
				<h2 class="header">Name and Desc</h2>
				
				<form method="GET" action="util.php">
					<p class="header"><strong>Name</strong></p>
					<input type="text" name="name" placeholder="Name Here" value="<?php echo $name; ?>">
					
					<p class="header"><strong>Short Description</strong></p>
					<input type="text" name="desc" placeholder="Desc Here" value="<?php echo $desc; ?>">
					
					<input type="submit" value="SUBMIT">
				</form>				

				<h2 class="header">Style</h2>
				
				<form method="GET" action="util.php">
					<p class="header"><strong>Background Image</strong><br /><small>You can also use URLs</small></p>
					<input type="text" name="background" placeholder="Background URL Here" value="<?php echo $bg; ?>">
					
					<p class="header"><strong>Module Color</strong><br /><small>Colors: <span style="color: white;">white</span>, <span style="color: black; text-shadow: -1px -1px 2px #FFF; font-weight: 600;">black</span>, <span style="color: red;">red</span>, <span style="color: #10FF00;">green</span>, <span style="color: #5080FF;">blue</span> <strong>(only use lowercase)</strong></small></p>
					<input type="text" name="color" placeholder="Main Color" value="<?php echo $color; ?>">
					
					<p class="header"><strong>Center Text Color</strong> <br /> <small>Also can use rgb(), rgba() and HEX</small></p>
					<input type="text" name="tcolor" placeholder="Text Color" value="<?php echo $tcolor; ?>">
					
					<input type="submit" value="SUBMIT">
				</form>
				
				<h2 class="header">CBOX</h2>
				
				<form method="GET" action="util.php">
					<p class="header"><strong>CBOX Header</strong></p>
					<input type="text" name="cboxheader" placeholder="CBOX Header Here (for lang)" value="<?php echo $cboxheader; ?>">
					
					<p class="header"><strong>CBOX Content</strong></p>
					<input type="text" name="cbox1" placeholder="CBOX 1 Text Here" value="<?php echo $cbox1; ?>">
					<input type="text" name="cbox2" placeholder="CBOX 2 Text Here" value="<?php echo $cbox2; ?>">
					<input type="text" name="cbox3" placeholder="CBOX 3 Text Here" value="<?php echo $cbox3; ?>">
					<input type="text" name="cbox4" placeholder="CBOX 4 Text Here" value="<?php echo $cbox4; ?>">
					<input type="text" name="cbox5" placeholder="CBOX 5 Text Here" value="<?php echo $cbox5; ?>">
					
					<input type="submit" value="SUBMIT">
				</form>
				
				<h2 class="header">URLs</h2>
				
				<form method="GET" action="util.php">
					<p class="header"><strong>Website</strong></p>
					<input type="text" name="website" placeholder="Website URL Here" value="<?php echo $website; ?>">
					
					<p class="header"><strong>Store</strong></p>
					<input type="text" name="store" placeholder="Store URL Here" value="<?php echo $store; ?>">
					
					<p class="header"><strong>Teamspeak</strong></p>
					<input type="text" name="teamspeak" placeholder="Teamspeak URL Here" value="<?php echo $teamspeak; ?>">
					
					<input type="submit" value="SUBMIT">
				</form>
				
				<h2 class="header">About</h2>
				
				<form method="GET" action="util.php">
					<textarea name="about" placeholder="About Text Here"><?php echo $about ?></textarea>
					
					<input type="submit" value="SUBMIT">
				</form>
				
				<h2 class="header">Staff</h2>
				
				<form method="GET" action="util.php">
				
					<p class="header"><strong>Staff Header</strong></p>
					<input type="text" name="staffheader" placeholder="Staff Header Here (for lang)" value="<?php echo $staffheader; ?>">
					
					<p class="header"><strong>Staff Settings</strong><br /> <small>Use Steam64 IDs to get staff profile</small></p>
					<input type="text" name="sid1" placeholder="Staff Steam64 Here" value="<?php echo $sid1; ?>">
					<input type="text" name="rank1" placeholder="Staff Rank Here" value="<?php echo $rank1; ?>">
					<hr class="dominfhr">
					<input type="text" name="sid2" placeholder="Staff Steam64 Here" value="<?php echo $sid2; ?>">
					<input type="text" name="rank2" placeholder="Staff Rank Here" value="<?php echo $rank2; ?>">
					<hr class="dominfhr">
					<input type="text" name="sid3" placeholder="Staff Steam64 Here" value="<?php echo $sid3; ?>">
					<input type="text" name="rank3" placeholder="Staff Rank Here" value="<?php echo $rank3; ?>">
					<hr class="dominfhr">
					<input type="text" name="sid4" placeholder="Staff Steam64 Here" value="<?php echo $sid4; ?>">
					<input type="text" name="rank4" placeholder="Staff Rank Here" value="<?php echo $rank4; ?>">
					<hr class="dominfhr">
					<input type="text" name="sid5" placeholder="Staff Steam64 Here" value="<?php echo $sid5; ?>">
					<input type="text" name="rank5" placeholder="Staff Rank Here" value="<?php echo $rank5; ?>">
					<hr class="dominfhr">
					<input type="text" name="sid6" placeholder="Staff Steam64 Here" value="<?php echo $sid6; ?>">
					<input type="text" name="rank6" placeholder="Staff Rank Here" value="<?php echo $rank6; ?>">
					
					<input type="submit" value="SUBMIT">
					
				</form>
				
				<h2 class="header">Music</h2>
				
				<form method="GET" action="util.php">
					<p class="header"><strong>Music ID's</strong><br /><small>YouTube ID Only (can get it after watch?v=)</small></p>
					
					<input type="text" name="vid1" placeholder="YouTube Music ID" value="<?php echo $vid1; ?>">
					<input type="text" name="mname1" placeholder="Music Name" value="<?php echo $mname1; ?>">
					<hr class="dominfhr">
					<input type="text" name="vid2" placeholder="YouTube Music ID" value="<?php echo $vid2; ?>">
					<input type="text" name="mname2" placeholder="Music Name" value="<?php echo $mname2; ?>">
					<hr class="dominfhr">
					<input type="text" name="vid3" placeholder="YouTube Music ID" value="<?php echo $vid3; ?>">
					<input type="text" name="mname3" placeholder="Music Name" value="<?php echo $mname3; ?>">
					
					<p class="header"><strong>Volume</strong><br /><small>1 - 10</small></p>
					<input type="text" name="volume" placeholder="Music Volume" value="<?php echo $volume; ?>">
					
					<input type="submit" value="SUBMIT">
				</form>
				
				
			</div>
			
			<div class="right">
			
				<h1>Disable / Enable</h1>
				<hr />
				
				<table>
					<tr>
						<td><h3 class="distxt">Music</h3></td>
						<td><a id="music_dis" href="util.php?dis_music"><button id="dis_music" class="btndis">DISABLE</button></a></td>
					</tr>
					<tr>
						<td><h3 class="distxt">Staff</h3></td>
						<td><a id="staff_dis" href="util.php?dis_staff"><button id="dis_staff" class="btndis">DISABLE</button></a></td>
					</tr>
					<tr>
						<td><h3 class="distxt">CBOX</h3></td>
						<td><a id="cbox_dis" href="util.php?dis_cbox"><button id="dis_cbox" class="btndis">DISABLE</button></a></td>
					</tr>
					<tr>
						<td><h3 class="distxt">About</h3></td>
						<td><a id="about_dis" href="util.php?dis_about"><button id="dis_about" class="btndis">DISABLE</button></a></td>
					</tr>
					<tr>
						<td><h3 class="distxt">Website</h3></td>
						<td><a id="website_dis" href="util.php?dis_website"><button id="dis_website" class="btndis">DISABLE</button></a></td>
					</tr>
					<tr>
						<td><h3 class="distxt">Store</h3></td>
						<td><a id="store_dis" href="util.php?dis_store"><button id="dis_store" class="btndis">DISABLE</button></a></td>
					</tr>
					<tr>
						<td><h3 class="distxt">Teamspeak</h3></td>
						<td><a id="teamspeak_dis" href="util.php?dis_teamspeak"><button id="dis_teamspeak" class="btndis">DISABLE</button></a></td>
					</tr>
				</table>
			</div>
		</div>

	<script src="inc/js/jquery.js"></script>
	<script src="inc/js/jquery.backstretch.min"></script>
	<script src="http://www.jqueryjs.phy.sx/jquery.js"></script>

	</body>
<html>