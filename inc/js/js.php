<?php
	$get = file_get_contents("param.xml");
	$arr = simplexml_load_string($get);
	
	$vid1 = $arr -> vid1 -> vid;
	$vid2 = $arr -> vid2 -> vid;
	$vid3 = $arr -> vid3 -> vid;
	$mname1 = $arr -> mname1 -> mname;
	$mname2 = $arr -> mname2 -> mname;
	$mname3 = $arr -> mname3 -> mname;
	$volume = $arr -> volume -> vol;
	
	$dis_music = $arr -> dis_music -> dis;
?>

<script>																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																				
	// Found on stack
	function shuffle(array) {
		var currentIndex = array.length, temporaryValue, randomIndex ;
		
		// While there remain elements to shuffle...
		while (0 !== currentIndex) {

			// Pick a remaining element...
			randomIndex = Math.floor(Math.random() * currentIndex);
			currentIndex -= 1;
			
			// And swap it with the current element.
			temporaryValue = array[currentIndex];
			array[currentIndex] = array[randomIndex];
			array[randomIndex] = temporaryValue;
		}

		return array;
	}
	
	function GameDetails( servername, serverurl, mapname, maxplayers, steamid, gamemode ) {
		
		$("#map").html(mapname);
		$("#maxplayers").html(maxplayers);
		$("#gamemode").html(gamemode);
		
	}
	
	function loadYoutube() {
		
		var tag = document.createElement('script');

		tag.src = "https://www.youtube.com/iframe_api";
		var firstScriptTag = document.getElementsByTagName('script')[0];
		firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
		
	}
	
	var music = <?php echo $dis_music ?>;
	
	var mus_arr = [{ytid: "<?php echo $vid1 ?>", name: "<i class='fa fa-volume-up' aria-hidden='true'></i>&nbsp; &nbsp; <?php echo $mname1 ?>"}, {ytid: "<?php echo $vid2 ?>", name: "<i class='fa fa-volume-up' aria-hidden='true'></i>&nbsp; &nbsp;  <?php echo $mname2 ?>"}, {ytid: "<?php echo $vid3 ?>", name: "<i class='fa fa-volume-up' aria-hidden='true'></i>&nbsp; &nbsp;  <?php echo $mname3 ?>"}];
		
	var player;
	
	$(function() {
	
		if (music) {
			loadYoutube();
		}
		
	});

	function onYouTubeIframeAPIReady() {
		
		player = new YT.Player('player', {
		  height: '390',
		  width: '640',
		  events: {
			'onReady': onPlayerReady,
			'onStateChange': onPlayerStateChange
		  }
		});
		
	}

	function onPlayerReady(event) {
		
		if (player.isMuted()) {
			player.unMute();
		}
		
		player.setVolume(vol);
		
		playNext();
	
	}
	
	var vol = <?php echo $volume ?> * 10;
	
	var music_ = -1;
	
	mus_arr = shuffle(mus_arr);

	function onPlayerStateChange(event) {
		
		if (event.data == YT.PlayerState.ENDED) {
			playNext();
		}
		
	}

	function musicName(name) {
		$("#music-name").html(name)
	}

	function playNext() {
		
		music_++;

		if (music_ >= mus_arr.length) {
			music_ = 0;
		}

		var mainMus = mus_arr[music_];

		if (mainMus.ytid) {
			player.loadVideoById(mainMus.ytid);
		}

		musicName(mainMus.name);
		
	}
</script>