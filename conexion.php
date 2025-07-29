<?php
// Conexión con la base de datos MySQL
$conexion = new mysqli("localhost", "root", "", "usuarios_db");

// Verificamos si hay error
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
