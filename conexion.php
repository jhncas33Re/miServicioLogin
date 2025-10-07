<?php
// Conexión con la base de datos MySQL
$conexion = new mysqli("localhost", "root", "", "usuarios_db");

// Verificamos si hay error
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>

<?php
// Conexión con la base de datos MySQL
// Este comentario solo describe lo que hace el código siguiente.
// En PHP, los comentarios que empiezan con // no se ejecutan.

// Creamos un nuevo objeto de conexión usando la clase mysqli.
// mysqli es una extensión de PHP que permite conectarse a bases de datos MySQL.
// new mysqli("servidor", "usuario", "contraseña", "nombre_base_de_datos")
$conexion = new mysqli("localhost", "root", "", "usuarios_db");

// Verificamos si hay error en la conexión
// $conexion->connect_error es una propiedad que guarda el mensaje de error si falló la conexión.
if ($conexion->connect_error) {

    // Si existe un error, se ejecuta die() para detener el programa
    // die() muestra un mensaje y termina la ejecución inmediatamente.
    die("Error de conexión: " . $conexion->connect_error);
}

// Si no hubo errores, no se muestra nada y la conexión está lista para usarse.
?>
