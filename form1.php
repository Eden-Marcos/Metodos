<?php 
 $usuario ="root";
 $password ="";
 $host="localhost";
 $db="contacto";
 $conexion=mysqli_connect($host,$usuario,$password,$db) or die("No se a podido conectar");
 //inicio de variables con los valores de un formulario
 $nombre= $_POST["CTnombre"];
 $apellidos= $_POST["CTapellidos"];
 $email= $_POST["CTemail"];
 $sexo= $_POST["CTsexo"];
 //insertar el registro
$resIns=$conexion->query("INSERT INTO datos VALUES ('$nombre','$apellidos','$email','$sexo')");

$resultado = $conexion->query("select * from datos");
echo "<link rel='stylesheet' href='estilos.css'>";
echo "<table>";
echo "<thead>";
echo "<tr>";
echo "<th>Nombre</th>";
echo "<th>Apellidos</th>";
echo "<th>E-mail </th>";
echo "<th>Sexo</th>";
echo "</tr>";
echo "<thead>";
echo "<tbody>";
while ($columna=mysqli_fetch_array($resultado)){ 
	echo "<tr>"; 
	echo "<tr>"; 
	echo "<td>". $columna ["nombre"]. "</td>"; 
	echo "<td>". $columna ["apellidos"]. "</td>"; 
	echo "<td>". $columna ["email"]. "</td>"; 
	echo "<td>". $columna ["sexo"]. "</td>";  
	echo "</tr>";
 } 
 echo "</tbody>";
 echo "</table>"; 
 echo "<p>Total de registros:" . $resultado ->num_rows ;


 ?>