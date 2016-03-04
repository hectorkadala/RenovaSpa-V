<?php
		
	$nombre = $_POST['name'];
	$edad = $_POST['age'];
	$pais = $_POST['country'];
	$email = $_POST['email'];
	$hotel = $_POST['hotel'];
	$habitacion = $_POST['room'];
	$agencia = $_POST['agency'];
	$tratamiento = $_POST['treatment'];
	$terapeuta = $_POST['therapist'];
	
	require("conexion.php");
	$sql=mysql_query("INSERT INTO cliente(nombre, edad, pais, email) VALUES ('$nombre','$edad','$pais','$email')");
	$sqla=mysql_query("INSERT INTO agencia(nombre, hotel, habitacion) VALUES ('$agencia','$hotel','$habitacion)");
	header("location: index.php");
	echo "Guardo con exito";
?>
