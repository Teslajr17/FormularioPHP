<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $conn = mysqli_connect($servername, $username, $password); 
 if (!$conn) { die("Fallo conectarse por: " . mysqli_connect_error());
}
?>
