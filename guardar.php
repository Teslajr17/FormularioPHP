<?php $nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];  
$edad = $_POST["edad"]; 
$correo = $_POST["correo"]; 

$servername = "localhost"; $username = "root"; $password = 
""; $conn = mysqli_connect($servername, $username, $password); 
if (!$conn) { die("Fallo conectarse por: " . mysqli_connect_error());
}
$sql = "insert into 
bmazariegos.usuario(nombre, apellido, edad, correo) 
values('".$nombre."','".$apellido."','".$edad."','".$correo."');"; 
if ($conn->query($sql) === TRUE) {
}
$conn->close(); ?>
