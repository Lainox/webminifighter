<?php

$serverName = "(local)";
	

$connectionInfo=array('Database'=>'MiniFighter');




$conn = sqlsrv_connect($serverName,$connectionInfo);
if($conn==false) {
  echo "Error en la conexion";
  die(print_r(sqlsrv_errors(),TRUE));

}



?>