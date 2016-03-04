<?php
	$conexion = mysql_connect("localhost","root","") Or die("No se pudo conectar");
	if($conexion){
		mysql_select_db("renovaspa",$conexion);
	}else{
		echo "Error";
	}
?>