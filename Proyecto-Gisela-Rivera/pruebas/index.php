
<?php 
$conexion=mysql_connect("localhost","root","1234");
		mysql_select_db("db_proyecto",$conexion);
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Menú Proyecto</title>
<link href="css/index.css" rel="stylesheet"> <!--load all styles -->
</head>

<body>
<? 
$actual = explode("/",strrev($_SERVER['PHP_SELF']), -1);
$actual = strrev($actual[0]);
$menu = array("Anagramas" => "anagrama.php", "Rockola" => "rockola.php", "Juego Tic-Tac-Toe" => "juego.php", "Calificaciones" => "promedio.php", "Ruta de Linux" => "linux.php");
?>
<ul id="menu">
<? foreach($menu as $nombre=>$archivo) {?>
  <li><a href="<? echo $archivo; ?>" <? if ($actual == $archivo) echo "class=\"actual\""; ?>><? echo $nombre; ?></a></li>
  <? } ?>
</ul>
<br/><br/><br/><br/>
<center> Examen de conocimiento </center>
<br/>
<center> Gisela Rivera Llanes </center>
<br/>
<center> Telefono: 667 249 43 64 </center>
<br/>
<center> Correo: giselaurcg@gmail.com </center>
<br/>
<center> Lenguaje usado: Php </center>
<br/>
<center> Base de datos: Mysql </center>
<br/>
</body>
</html>