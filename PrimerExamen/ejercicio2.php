<?php
include "conexion.inc.php"; 
?>
<link rel="stylesheet" href="miestilo.css"/>


<center><h1>CON PHP</h1></center>
<center><?php
$sql = "SELECT
i.residencia,
SUM(n.nota>50) as suma_nota
FROM nota n, identificador i
WHERE n.CI = i.CI
GROUP BY i.residencia";
$result=mysqli_query($conn,$sql);
$cantidad_notas=array_fill(1,9,0);

echo "<table class='ejercicio2'>";
echo "<tr>
<td>Chuquisaca (01)</td>
<td>La Paz (02)</td>
<td>Cochabamba (03)</td>
<td>Oruro (04)</td>
<td>Potosi (05)</td>
<td>Tarija (06)</td>
<td>Santa Cruz (07)</td>
<td>Beni (08)</td>
<td>Pando (09)</td>
</tr>";

while($fila=mysqli_fetch_row($result)){
	$cantidad_notas[$fila[0]] = $fila[1];
}
echo "<tr>";
for ($i = 1; $i < 10; $i++) {
    echo "<td>".$cantidad_notas[$i]."</td>";
}
echo "</tr>";
echo "</table>";


?></center>

<center><h1>CON SQL</h1></center>
<center><?php  
$sql = "SELECT 
SUM(CASE WHEN i.residencia = 1 && i.CI = t.CI THEN t.nota > 50 ELSE 0 END) AS Chuquisaca,
SUM(CASE WHEN i.residencia = 2 && i.CI = t.CI THEN t.nota > 50 ELSE 0 END) AS La_Paz,
SUM(CASE WHEN i.residencia = 3 && i.CI = t.CI THEN t.nota > 50 ELSE 0 END) AS Cochabamba,
SUM(CASE WHEN i.residencia = 4 && i.CI = t.CI THEN t.nota > 50 ELSE 0 END) AS Oruro,
SUM(CASE WHEN i.residencia = 5 && i.CI = t.CI THEN t.nota > 50 ELSE 0 END) AS Potosi,
SUM(CASE WHEN i.residencia = 6 && i.CI = t.CI THEN t.nota > 50 ELSE 0 END) AS Tarija,
SUM(CASE WHEN i.residencia = 7 && i.CI = t.CI THEN t.nota > 50 ELSE 0 END) AS Santa_Cruz,
SUM(CASE WHEN i.residencia = 8 && i.CI = t.CI THEN t.nota > 50 ELSE 0 END) AS Beni,
SUM(CASE WHEN i.residencia = 9 && i.CI = t.CI THEN t.nota > 50 ELSE 0 END) AS Pando
FROM nota t, identificador i";

echo "<table class='ejercicio2'>";
echo "<tr>
<td>Chuquisaca (01)</td>
<td>La Paz (02)</td>
<td>Cochabamba (03)</td>
<td>Oruro (04)</td>
<td>Potosi (05)</td>
<td>Tarija (06)</td>
<td>Santa Cruz (07)</td>
<td>Beni (08)</td>
<td>Pando (09)</td>
</tr>";

$result=mysqli_query($conn,$sql);
$fila=mysqli_fetch_row($result);
	echo "<tr>";
	echo "<td>".$fila[0]."</td>";
	echo "<td>".$fila[1]."</td>";
	echo "<td>".$fila[2]."</td>";
	echo "<td>".$fila[3]."</td>";
	echo "<td>".$fila[4]."</td>";
	echo "<td>".$fila[5]."</td>";
	echo "<td>".$fila[6]."</td>";
	echo "<td>".$fila[7]."</td>";
	echo "<td>".$fila[8]."</td>";
	echo "</tr>";
echo "</table>";

?></center>