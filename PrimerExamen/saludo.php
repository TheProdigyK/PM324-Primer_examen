<?php
include "cabecera.inc.php";
include "conexion.inc.php";
?>
<center><?php
session_start();
error_reporting(0);
$varSesion = $_SESSION["user"];
if($varSesion == null || $varSesion == ''){
	echo 'Inicie sesion para continuar';
	die();
}

$sql = "SELECT nombre_completo FROM identificador WHERE CI = '$varSesion'";
$result = mysqli_query($conn, $sql);
/*
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  if($row = $result->fetch_assoc()) {
  	$nombre_completo = $row["nombre_completo"];
  }
}*/
if($row = mysqli_fetch_array($result)) {
	$nombre_completo = $row["nombre_completo"];
}

$sql = "SELECT imagen FROM identificador WHERE CI = '$varSesion'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

echo "Usuario: " .$nombre_completo. "<br>";
echo "CI: ". $varSesion. "<br>";
echo '<img src="data:imagen/jpeg;base64,'.base64_encode( $row['imagen'] ).'" width="200" height="200"/>';


//$varImage = "fotos/".$varSesion.".jpg";

include "seleccionar_color.php";
echo "<br><a href='cerrar_sesion.php'>Cerrar sesión</a>";
?></center>