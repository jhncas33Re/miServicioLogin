<?php
$conexion = new mysqli("localhost", "root", "", "usuarios_db");

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Tomamos los datos enviados desde el formulario
$nombre_usuario = $_POST['usuario'];
$clave = password_hash($_POST['clave'], PASSWORD_DEFAULT);

// Preparamos la consulta SQL
$sql = "INSERT INTO usuarios (nombre_usuario, clave) VALUES (?, ?)";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("ss", $nombre_usuario, $clave);

// Ejecutamos la consulta
if ($stmt->execute()) {
    echo "¡Usuario registrado con éxito!";
} else {
    echo "Error al registrar: " . $stmt->error;
}

// Cerramos conexión
$stmt->close();
$conexion->close();
?>

// Creamos una nueva conexión con la base de datos MySQL
// new mysqli("servidor", "usuario", "contraseña", "nombre_base_de_datos")
$conexion = new mysqli("localhost", "root", "", "usuarios_db");

// Verificamos si ocurrió un error al conectar
if ($conexion->connect_error) {

    // Si hay error, se detiene el programa y se muestra el mensaje
    die("Conexión fallida: " . $conexion->connect_error);
}

// -------------------------------------------------------
// Tomamos los datos
