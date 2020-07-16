
<link rel="stylesheet" href="miestilo.css"/>
<center>


<form action="registro.php" method="POST" enctype="multipart/form-data">
	<table class="inicio">

		<tr><td colspan="2" style="background-color:#33A8DB; padding-bottom:5px; padding-top:5px;"><label>REGISTRAR USUARIO</label></td></tr>

		<tr><td><label>CI</label></td></tr>
		<tr><td><input type="text" name="ci"/></td></tr>

		<tr><td><label>Nombre</label></td></tr>
		<tr><td><input type="text" name="nombre"/></td></tr>

		<tr><td><label>Apellido</label></td></tr>
		<tr><td><input type="text" name="apellido"/></td></tr>

		<tr><td><label>Contraseña</label></td></tr>
		<tr><td><input type="password" name="contraseña"/></td></tr>

		<tr><td><label>Fecha de nacimiento</label></td></tr>
		<tr><td><input type="date" name="fecha_nacimiento"/></td></tr>
	
		<tr><td><label>Residencia</label></td></tr>
		<tr><td><select name="residencia">
			<option disabled="disabled">Elige una residencia</option>
			<option value="01">Chuquisaca</option>
			<option value="02">La Paz</option>
			<option value="03">Cochabamba</option>
			<option value="04">Oruro</option>
			<option value="05">Potosi</option>
			<option value="06">Tarija</option>
			<option value="07">Santa Cruz</option>
			<option value="08">Beni</option>
			<option value="09">Pando</option>
			
			
		</select></td></tr>

		<tr><td><label>Subir imagen</label></td></tr>
	    <tr><td><label>Archivo: </label><input type="file" name="image" /></td></tr>


	</table>
		<input type="submit" name="volver" value="Volver">
		<input type="submit" name="registrarse" value="Registrarse">
	
	</form>

</center>