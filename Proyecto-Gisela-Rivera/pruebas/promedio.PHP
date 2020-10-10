
<head>
<body>
<title>Promedio mas alto</title>
<br/><br/> 
	Promedio mas alto
	<br/><br/>
<table border="1" cellspacing=1 cellpadding=2 style="font-size: 8pt"><tr>
<td><font face="verdana"><b>Nombre</b></font></td>
<td><font face="verdana"><b>Promedio</b></font></td>
</tr>

<?php
include("scripts/conecta.php");  
//Instaciamos la clase de base de datos
$db = new Clasedb();
//Llamamos a la funcion para conectar a la base de datos
$db->MySQL();



  $query = "SELECT a.nombre as Nombre, avg(e.promedio) as Promedio ".
      "FROM db_proyecto.alumno a ".
	    "INNER JOIN db_proyecto.evaluacion e ON a.matricula = e.mat_alumno ".
      "GROUP BY a.nombre ".
      "HAVING Promedio >= 9 ".
      "ORDER BY Promedio desc";
  $result = mysql_query($query);
  $numero = 0;
  while($row = mysql_fetch_array($result))
  {
    echo "<tr><td width=\"25%\"><font face=\"verdana\">" . 
	    $row["Nombre"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["Promedio"] . "</font></td></tr>";    
    $numero++;
  }
  echo "<tr><td colspan=\"15\"><font face=\"verdana\"><b>Numero: " . $numero . 
      "</b></font></td></tr>";
  
  mysql_free_result($result);
  mysql_close($link);
?>
</table>
<br/><br/> 
		<a href="index.php"><input type="button" value="Regresar al Menu Principal"></a>
		</body>
</html>