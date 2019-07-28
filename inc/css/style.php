<style>
	body {
		margin: 15px;
		padding: 15px;
		color: #FFF;
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: 100% 100%;
		font-family: sans-serif;
		background-image: url(" <?php echo $bg ?> ");
	}

	* {
		transition: all .5s ease-in-out;
	}

	a {
		color: #DDD;
		text-decoration: underline;
	}

	a:hover {
		color: #FFF;
		cursor: pointer;
	}

	.content-holder {
		width: 75%;
	}

	h1, h2, h3, p, td {
		text-shadow: -1px -1px 4px #000;
	}

	.admin_blur,
	.blursta,
	.bottom .blurbot,
	.blurrul,
	.topholder .blursi,
	.topholder .blurui {
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: 100% 100%;
		position: absolute;
		padding: 20px;
		z-index: 99;
		-webkit-filter: blur(5px);
		background-image: url(" <?php echo $bg ?> ");
		filter: blur(5px);
	}

	.admin,
	.staff_cont,
	.bottom_cont,
	.rules_cont,
	.serverinfo,
	.userinfo {
		position: absolute;
		z-index: 100;
		padding: 20px;
		box-shadow: 1px 1px 8px #000;
	}

	.bottom_cont,
	.bottom .blurbot {
		height: 100px;
		bottom: 0;
		padding: 0;
		left: 0;
		width: 100%;
	}

	.userinfo,
	.topholder .blurui {
		height: 64px;
		width: 300px;
		left: 25px;
	}

	.serverinfo,
	.topholder .blursi {
		height: 64px;
		width: 300px;
		right: 25px;
		padding: 20px;
	}

	.rules_cont,
	.blurrul {
		width: 300px;
		height: 270px;
		top: 159px;
		left: 25px;
	}

	.staff_cont,
	.blursta {
		width: 300px;
		height: 270px;
		right: 25px;
		top: 159px;
	}

	.userinfo .right {
		position: absolute;
		display: inline-block;
		top: 25px;
	}

	.userinfo .right p {
		margin: 0;
		padding: 0 10px;
		font-size: 18px;
	}

	hr {
		border: 1px solid rgba(0, 0, 0, .5);
		margin-top: 8px;
		margin-bottom: 10px;
	}

	img {
		width: 64px;
		height: 64px;
		display: inline-block;
		border: 2px solid rgba(0, 0, 0, .5);
		margin: 0;
		padding: 0;
	}

	.servername {
		position: absolute;
		left: 0;
		right: 0;
		text-align: center;
		font-family: 'Raleway', sans-serif;
		color: <?php echo $tcolor ?>;
	}

	.servername h3,
	.servername h1 {
		margin: 0;
		padding: 0;
	}

	.servername h1 {
		font-size: 350%;
		font-weight: 300;
	}

	.servername h3 {
		font-size: 150%;
		padding-top: 5px;
		font-weight: 200;
	}

	.num {
		padding: 12px 15px;
		background-color: rgba(0, 0, 0, .5);
	}

	.rul {
		padding-left: 15px;
		font-size: 17px;
	}

	.staff h2,
	.rules h2 {
		margin: 0;
		padding: 0;
		font-size: 22px;
	}

	.serverinfo {
		padding: 10px 20px;
		height: 84px;
		font-size: 17px;
	}

	.serverinfo .num {
		padding: 0;
		background-color: rgba(0, 0, 0, 0);
	}

	.serverinfo .rul {
		padding: 3px;
	}

	.status {
		position: absolute;
		top: 20px;
		left: 0;
		right: 0;
		text-align: center;
	}

	.status h2 {
		font-weight: 300;
	}

	#staff {
		height: 54px;
		width: 54px;
	}

	#staffright {
		height: 54px;
		width: 54px;
	}

	#upstaff {
		padding-top: 15px;
	}

	.stad {
		display: block;
	}

	.staffpfi {
		padding-left: 19px;
		padding-right: 19px;
	}

	.staffrank,
	.staffname {
		width: 93px;
		margin: auto;
		text-align: center;
		margin-bottom: 0;
		padding-bottom: 0;
		font-weight: 600;
	}

	.staffrank {
		font-weight: 300;
	}

	.aboutspace {
		width: 260px;
		text-align: center;
		margin: auto;
	}

	.dominf {
		font-size: 22px;
		margin: 0;
		padding: 5px;
	}

	.dominfhr {
		width: 170px;
	}

	.music {
		position: absolute;
		bottom: 100px;
		font-size: 20px;
		left: 25px;
	}

	#player {
		position: absolute;
		top: -1000px;
		bottom: -1000px;
		z-index: -150;
	}

	@media screen and (max-width: 2600px) {
		body {
			margin-left: 150px;
			margin-right: 150px;
		}
		
		.rules_cont,
		.blurrul,
		.userinfo,
		.topholder .blurui,
		.music {
			left: 150px;
		}
		
		.staff_cont,
		.blursta,
		.serverinfo,
		.topholder .blursi {
			right: 150px;
		}
	}

	@media screen and (max-width: 1400px) {
		body {
			margin-left: 25px;
			margin-right: 25px;
		}
		
		.music {
			bottom: 0;
		}
		
		.rules_cont,
		.blurrul,
		.userinfo,
		.topholder .blurui,
		.music {
			left: 25px;
		}
		
		.staff_cont,
		.blursta,
		.serverinfo,
		.topholder .blursi {
			right: 25px;
		}
	}
	
	
	/* LANDING */
	
	.midcenter {
		width: 65%;
		position: fixed;
		left: 0;
		right: 0;
		height: auto;
		text-align: center;
		margin: auto;
	}
				
	.midcenter h1 {
		background-color: rgba(0,0,0,.6);
		padding: 25px;
		font-size: 350%;
	}
				
	.mid {
		width: 75%;
		position: fixed;
		left: 0;
		right: 0;
		bottom: 0;
		top: 0;
		height: 1px;
		text-align: center;
			margin: auto;
	}
					
	.mid a {
		padding: 75px 40px;
		font-size: 180%;
		width: 40%;
		background: rgba(0,0,0,.4);
		transition: all .5s ease-in-out;
		color: #CCC;
		border: 1px solid #555;
		text-decoration: none;
		margin: 20px;
	}
				
	.mid a:hover {
		background-color: rgba(0,0,0,.6);
		color: #FFF;
	}
	
	@media screen and (max-width: 1450px) {
		.mid a {
			padding: 45px 30px;
			font-size: 150%;
		}
	}

	@media screen and (max-width: 1350px) {
		.mid a {
			padding: 35px 20px;
		}
	}
	
	@media screen and (max-width: 1150px) {
		.mid a {
			padding: 20px 15px;
			font-size: 125%;
		}
	}

	/* ADMIN PAGE */
	
	.admin {
		width: 750px;
		background-color: rgba(0, 0, 0, .5);
		padding: 25px;
		height: 3050px;
		margin: auto;
		margin-bottom: 20px;
	}
	
	.admin,
	.admin_blur {
		width: 750px;
		height: 3560px;
		left: 0;
		right: 0;
	}
	
	.admin_blur {
		margin: auto;
	}
	
	.admin .left {
		display: inline-block;
		width: 46%;
	}

	.admin .right {
		display: inline-block;
		width: 46%;
		margin-left: 30px;
		vertical-align: top;
	}

	.admin form textarea,
	form input[type=password],
	.mid form input[type=text],
	.admin form input[type=text] {
		outline: none;
		border: 1px solid #000;
		padding: 8px;
		font-size: 16px;
		color: #FFF;
		background-color: rgba(255, 255, 255, .1);
		width: 250px;
		display: block;
		margin-bottom: 10px;
	}
	
	.mid form input[type=text],
	form input[type=password] {
		display: inline-block;
		background-color: rgba(0, 0, 0, .5);
	}
	
	form input[type=submit] {
		padding: 8px;
		background-color: #222;
		color: #DDD;
		transition: all .5s ease-in-out;
		outline: none;
		border: 1px solid #000;
		cursor: pointer;
		margin-bottom: 30px;
	}
	
	textarea {
		height: 150px;
		line-height: 1.5em;
		font-family: sans-serif;
		resize: none;
	}

	.admin form input[type=submit]:hover {
		background-color: #000;
		color: #FFF;
	}

	.admin h1 {
		margin: 0;
		padding: 0;
		font-weight: 300;
		font-size: 30px;
	}

	.admin hr {
		margin-top: 15px;
		margin-bottom: 20px;
	}

	form .dominfhr {
		margin-left: 0;
		width: 266px;
	}

	h2.header {
		max-width: 275px;
		margin: 0;
		padding: 0;
	}

	p.header {
		margin: 10px 0;
		color: #DDD;
		max-width: 275px;
		padding-top: 10px;
	}
	
	.dblock {
		display: block;
	}
	
	.btndis {
		color: red;
		background-color: #222;
		padding: 8px;
		border: 1px solid #000;
		margin-left: 20px;
	}
	
	.btndis:hover {
		background-color: #000;
		cursor: pointer;
	}
	
	.distxt {
		display: inline-block;
		text-decoration: none;
		color: #DDD;
	}
</style>









<!-- DEFAULT IF ITS EMPTY -->

<?php
	if ($color == "") {
?>
	<style>
		body {
			background-image: url('<?php echo $bg ?>');
		}

		.blursta,
		.bottom .blurbot,
		.blurrul,
		.topholder .blursi,
		.topholder .blurui {
			background-image: url(" <?php echo $bg ?> ");
			background-color: rgba(255, 255, 255, .3);
		}
		
		.staff_cont,
		.bottom_cont,
		.rules_cont,
		.serverinfo,
		.userinfo {
			background: rgba(255, 255, 255,0.12);
		}
	</style>
<?php
	}
?>

<!-- STYLE: WHITE -->

<?php
	if ($color == "white") {
?>
	<style>
		body {
			background-image: url('<?php echo $bg ?>');
		}

		.blursta,
		.bottom .blurbot,
		.blurrul,
		.topholder .blursi,
		.topholder .blurui {
			background-image: url(" <?php echo $bg ?> ");
			background-color: rgba(255, 255, 255, .3);
		}
		
		.staff_cont,
		.bottom_cont,
		.rules_cont,
		.serverinfo,
		.userinfo {
			background: rgba(255, 255, 255,0.12);
		}
	</style>
<?php
	} else {
?>
	<style>
		body {
			background-image: url('<?php echo $bg ?>');
		}

		.blursta,
		.bottom .blurbot,
		.blurrul,
		.topholder .blursi,
		.topholder .blurui {
			background-image: url(" <?php echo $bg ?> ");
			background-color: rgba(255, 255, 255, .3);
		}
		
		.staff_cont,
		.bottom_cont,
		.rules_cont,
		.serverinfo,
		.userinfo {
			background: rgba(255, 255, 255,0.12);
		}
	</style>
<?php
	}
?>

<?php
	if ($color == "black") {
?>
	<style>
		body {
			background-image: url('<?php echo $bg ?>');
		}

		.blursta,
		.bottom .blurbot,
		.blurrul,
		.topholder .blursi,
		.topholder .blurui {
			background-image: url(" <?php echo $bg ?> ");
			background-color: rgba(0, 0, 0, .6);
		}
		
		.staff_cont,
		.bottom_cont,
		.rules_cont,
		.serverinfo,
		.userinfo {
			background: rgba(0, 0, 0,0.32);
		}
	</style>
<?php
	}
?>

<?php
	if ($color == "red") {
?>
	<style>
		body {
			background-image: url('<?php echo $bg ?>');
		}

		.blursta,
		.bottom .blurbot,
		.blurrul,
		.topholder .blursi,
		.topholder .blurui {
			background-image: url(" <?php echo $bg ?> ");
			background-color: rgba(255, 0, 0, .3);
		}
		
		.staff_cont,
		.bottom_cont,
		.rules_cont,
		.serverinfo,
		.userinfo {
			background: rgba(255, 0, 0,0.12);
		}
	</style>
<?php
	}
?>

<?php
	if ($color == "green") {
?>
	<style>
		body {
			background-image: url('<?php echo $bg ?>');
		}

		.blursta,
		.bottom .blurbot,
		.blurrul,
		.topholder .blursi,
		.topholder .blurui {
			background-image: url(" <?php echo $bg ?> ");
			background-color: rgba(0, 255, 0, .3);
		}
		
		.staff_cont,
		.bottom_cont,
		.rules_cont,
		.serverinfo,
		.userinfo {
			background: rgba(0, 255, 0,0.12);
		}
	</style>
<?php
	}
?>

<?php
	if ($color == "blue") {
?>
	<style>
		body {
			background-image: url('<?php echo $bg ?>');
		}

		.blursta,
		.bottom .blurbot,
		.blurrul,
		.topholder .blursi,
		.topholder .blurui {
			background-image: url(" <?php echo $bg ?> ");
			background-color: rgba(0, 0, 255, .3);
		}
		
		.staff_cont,
		.bottom_cont,
		.rules_cont,
		.serverinfo,
		.userinfo {
			background: rgba(0, 0, 255,0.12);
		}
	</style>
<?php
	}
?>