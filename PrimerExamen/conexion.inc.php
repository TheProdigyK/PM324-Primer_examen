<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "academico";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
//mysqli_select_db($conn,"academico");

if(!$conn){
	die("No hay conexion: " .mysqli_connect_error());
}

?>