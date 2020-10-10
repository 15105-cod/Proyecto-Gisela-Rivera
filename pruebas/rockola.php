<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reproductor de música</title>
	<link href="css/rockola.css" rel="stylesheet"> <!--load all styles -->
	<link href="fontawesome/css/all.css" rel="stylesheet"> <!--load all styles -->
	<script defer src="fontawesome/js/all.js"></script> <!--load all styles -->
 
</head>
<body>
	
	<audio id="player" ontimeupdate="updateProgress();">
		<source  id="source">	
		Audio no soportado	
	</audio>
	
	<div id="controls">
		<div class="timer" id="timer">
			&nbsp;
		</div>
		<div class="volumen">
			Vol: 
			<i class="fas fa-volume-down"></i> 
			<input type="range" name="volumen" id="volumen" min="0" max="1" step="0.01" value="0.75"> 
			<i class="fas fa-volume-up"></i>
		</div>
		
		<i class="fas fa-backward fa-5x" onclick="prevMusic();"></i>
		<i class="far fa-play-circle fa-5x" onclick="togglePlay();" id="iconPlay"></i> 
		<i class="fas fa-forward fa-5x" onclick="nextMusic();"></i>
		<br>
		<span id="currentPlay"></span><br>
		<progress id="progress" value="0" max="100" ></progress>
		
		 
		
		
		<h3>Música</h3>
		<div id="playList"></div>
 
	
	
	<br/><br/>
	<a href="index.php"><input type="button" value="Regresar al Menu Principal"></a>
	</div>
	</div>
		
	<script type="text/javascript" src="js/rockola.js"></script>
</body>
</html>