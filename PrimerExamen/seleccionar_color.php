<center><?php
include "conexion.inc.php";
$userCI = $_SESSION["user"];

$sql = "SELECT color_favorito FROM  identificador WHERE CI = '$userCI'";
//$result = $conn->query($sql);
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
  if($row = mysqli_fetch_array($result)) {
  	$color_seleccionado = $row["color_favorito"];
  }
}
if(isset($_POST['submit'])){
	$color_seleccionado = $_POST['Color'];
	echo "Seleccionó el color: " .$color_seleccionado. "<br>";  
	$sql = "UPDATE identificador SET color_favorito = '$color_seleccionado' WHERE CI = '$userCI'";

	if ($conn->query($sql) === TRUE) {
 		//echo '<body style="background-color:$color_seleccionado">';
 		

	}else {
		echo "Error: " . $conn->error;
	}

}
?></center>



<center><form action="#" method="post">
	<select name="Color">
	<option disabled="disabled">Elige un color</option>
	<option value="White">Blanco (defecto)</option>
	<option value="Red">Rojo</option>
	<option value="Green">Verde</option>
	<option value="Blue">Azul</option>
	<option value="Pink">Rosado</option>
	<option value="Yellow">Amarillo</option>
	</select>
	<input type="submit" name="submit" value="Seleccionar color" />
</form></center>

<body bgcolor="
<?php
if($color_seleccionado == '' || $color_seleccionado == NULL){
	echo "White";
}else{
	echo $color_seleccionado;
	
}
?>">