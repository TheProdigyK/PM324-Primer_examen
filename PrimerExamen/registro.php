<center><?php
include "conexion.inc.php";
$ci=$_POST['ci'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$contraseña=$_POST['contraseña'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$residencia=$_POST['residencia'];

/*
if(isset($_FILES['image'])){
	$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

}*/

//$image_name = addslashes($_FILES['image']['name']);
$color = "";


$nombre_completo = $apellido." ".$nombre;

if (count($_FILES) > 0) {
    	if (is_uploaded_file($_FILES['image']['tmp_name'])) {
    		$imgData = addslashes(file_get_contents($_FILES['image']['tmp_name']));

    	}
    }
if(isset($_POST['registrarse'])){
	$sql = "INSERT INTO identificador VALUES ('".$ci."','".$nombre_completo."','".$fecha_nacimiento."','".$residencia."','".$color."','".$imgData."')";
	if(mysqli_query($conn,$sql)){
		$sql = "INSERT INTO usuario VALUES ('".$ci."','".$contraseña."')";
		if(mysqli_query($conn,$sql)){
			echo "SUCCESS";
			echo "<br><a href='cerrar_sesion.php'>Volver a la pagina principal</a>";
		}else{
			echo "Error: " . $sql . "" . mysqli_error($conn);
		}
	
	}else {
    	echo "Error: " . $sql . "" . mysqli_error($conn);
    }

	

}
if(isset($_POST['volver'])){
	header("Location: index.php");


}





?></center>



