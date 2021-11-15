<!doctype html> 
<html> 
    <head> <title>Formulario de registro </title> 
</head> 
<body> 
    <?php $servername = "localhost"; $username = "root"; 
$password = ""; $conn = mysqli_connect($servername, $username, 
$password); if (!$conn) {
	die("Fallo conectarse por: " . mysqli_connect_error());
}
$sql = "SELECT nombre,apellido,edad,correo FROM 
bmazariegos.usuario;"; $result = $conn->query($sql); echo "<table>"; echo 
"<tr><th>Nombre</th><th>Apellido</th><th>Edad</th><th>correo</th></tr>"; 
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) { echo "<tr>><td>" . 
        $row["nombre"]. "</td><td> " . 
        $row["apellido"]. "</td>><td>" .
        $row["edad"]. "</td><td>" . 
        $row["correo"]. "</td>><td>" . 
    
    }
} else {
   echo "0 registros";
}
echo "</table>"; ?> </body> </html>
