<?php
include "conexion.inc.php";
session_start();
$CI=$_GET["CI"];
$clave=$_GET["clave"];
$_SESSION["user"]=$CI;

$query = mysqli_query($conn,"SELECT * FROM usuario WHERE CI = '".$CI."' and clave = '".$clave."'");
$numberRows = mysqli_num_rows($query);


if ($numberRows == 1 && isset($_GET['login'])){
	header("Location: saludo.php");
	//echo "Bienvenido: " .$usuario;
}else{
	header("Location: index.php");
}
if (isset($_GET['registro'])) {
	header("Location: registrar.php");
	//echo "no ingreso";
}
if (isset($_GET['ej2'])){
	header("Location: ejercicio2.php");


}

?>
