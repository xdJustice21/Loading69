<?php
	session_start();

	if ($_SESSION["login"] != "true"){
		
		header("Location:adminlogin.php");
			$_SESSION["error"] = "<p>Please log in</p>";
		exit;
		
	}
	
	include('inc/js/js.php');
	include('config.php');
	
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
	
	$vid1 = $arr -> vid1 -> vid;
	$vid2 = $arr -> vid2 -> vid;
	$vid3 = $arr -> vid3 -> vid;
	$mname1 = $arr -> mname1 -> mname;
	$mname2 = $arr -> mname2 -> mname;
	$mname3 = $arr -> mname3 -> mname;
	
	$bg = $arr -> background -> bg;
			
	$color = $arr -> style -> theme;
	
	$about = $arr -> about -> txt;
	
	$website = $arr -> website -> url;
	$store = $arr -> store -> url;
	$teamspeak = $arr -> teamspeak -> url;
	
	$dis_music = $arr -> dis_music -> dis;
	
	$tcolor = $arr -> color -> col;
	$volume = $arr -> volume -> vol;
	
	if (isset($_GET['name'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> sname -> name = $_GET['name'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['desc'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> descr -> desc = $_GET['desc'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['background'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> background -> bg = $_GET['background'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['sid1'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> sid1 -> stid = $_GET['sid1'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['sid2'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> sid2 -> stid = $_GET['sid2'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['sid3'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> sid3 -> stid = $_GET['sid3'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['sid4'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> sid4 -> stid = $_GET['sid4'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['sid5'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> sid5 -> stid = $_GET['sid5'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['sid6'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> sid6 -> stid = $_GET['sid6'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['rank1'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> rank1 -> rank = $_GET['rank1'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['rank2'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> rank2 -> rank = $_GET['rank2'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['rank3'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> rank3 -> rank = $_GET['rank3'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['rank4'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> rank4 -> rank = $_GET['rank4'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['rank5'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> rank5 -> rank = $_GET['rank5'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['rank6'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> rank6 -> rank = $_GET['rank6'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['staffheader'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> staffheader -> staff = $_GET['staffheader'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['cboxheader'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> cboxheader -> cbox = $_GET['cboxheader'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['cbox1'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> cbox1 -> cbox = $_GET['cbox1'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['cbox2'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> cbox2 -> cbox = $_GET['cbox2'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['cbox3'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> cbox3 -> cbox = $_GET['cbox3'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['cbox4'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> cbox4 -> cbox = $_GET['cbox4'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['cbox5'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> cbox5 -> cbox = $_GET['cbox5'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['volume'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> volume -> vol = $_GET['volume'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['tcolor'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> color -> col = $_GET['tcolor'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['vid1'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> vid1 -> vid = $_GET['vid1'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['vid2'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> vid2 -> vid = $_GET['vid2'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['vid3'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> vid3 -> vid = $_GET['vid3'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['mname1'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> mname1 -> mname = $_GET['mname1'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['mname2'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> mname2 -> mname = $_GET['mname2'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['mname3'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> mname3 -> mname = $_GET['mname3'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['color'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> style -> theme = $_GET['color'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['about'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> about -> txt = $_GET['about'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['website'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> website -> url = $_GET['website'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['store'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> store -> url = $_GET['store'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['teamspeak'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> teamspeak -> url = $_GET['teamspeak'];
		$xml -> asXML('param.xml');
	}
	
	
	
	
	
	if (isset($_GET['dis_music'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> dis_music -> dis = "false";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['act_music'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> dis_music -> dis = "true";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['dis_staff'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> dis_staff -> dis = "1";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['act_staff'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> dis_staff -> dis = "0";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['dis_cbox'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> dis_cbox -> dis = "1";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['act_cbox'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> dis_cbox -> dis = "0";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['dis_about'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> dis_about -> dis = "1";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['act_about'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> dis_about -> dis = "0";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['dis_website'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> dis_website -> dis = "1";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['act_website'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> dis_website -> dis = "0";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['dis_store'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> dis_store -> dis = "1";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['act_store'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> dis_store -> dis = "0";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['dis_teamspeak'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> dis_teamspeak -> dis = "1";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['act_teamspeak'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> dis_teamspeak -> dis = "0";
		$xml -> asXML('param.xml');
	}
	
	echo '<script type="text/javascript">window.location = "admin.php" </script>' ;
?>