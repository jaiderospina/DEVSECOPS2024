<?php
$servername = "bd-db-1"; 
$username = "root";
$password = "my-secret-pw";
$dbname = "fosdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
} else {
    echo "Conexión exitosa a la base de datos";
}

$conn->close();
?>
