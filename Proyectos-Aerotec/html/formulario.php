<?php

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$fechallegada = $_POST['fechallegada'];
$fechasalida = $_POST['fechasalida'];
$dni = $_POST['dni'];
$numeropersonas = $_POST['numeropersonas'];
$lugarorigen = $_POST['lugarorigen'];
$lugardestino = $_POST['lugardestino'];


$datellegada=date("Y-m-d H:i:s",strtotime($fechallegada));
$datesalida=date("Y-m-d H:i:s",strtotime($fechasalida));

$servername = "localhost";
$username = "root";
$password = "";
$db = "oceanica";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "insert into oceanica (nombre, apellidos, fechallegada, fechasalida, dni, numeropersonas, lugarorigen, lugardestino) values('$nombre', '$apellidos',  '$datellegada', '$datesalida','$dni', '$numeropersonas', '$lugarorigen', '$lugardestino')";

if ($conn->query($sql) === TRUE) {
	/*echo "Añadido: ".$nombre.", ".$apellidos.", ".$email.", ".$empresa.", ".$ciudad.", ".$provincia."------PATO------".$sql;*/
	/*echo "Sus datos han sido enviados satisfactoriamente";*/
} else {
	echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();

?>