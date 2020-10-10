<?php
class Clasedb{
private $conexion;
public function MySQL(){
  if(!isset($this->conexion)){
  $this->conexion = (mysql_connect("localhost","root","1234")) or die(mysql_error());
  mysql_select_db("db_proyecto",$this->conexion) or die(mysql_error());
  }
  }
public function consulta($consulta){
  $resultado = mysql_query($consulta,$this->conexion);
  if(!$resultado){
  echo 'MySQL Error: ' . mysql_error();
  exit;
  }
  return $resultado;  
  }
public function obtenerfilas($consulta){  
  return mysql_fetch_array($consulta);
  }
public function totalfilas($consulta){  
  return mysql_num_rows($consulta);
  }

} ?>