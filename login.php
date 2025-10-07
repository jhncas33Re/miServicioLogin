<?php
include("conexion.php");

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND clave='$clave'";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    echo "✅ Autenticación exitosa";
} else {
    echo "❌ Error de autenticación";
}
?>

<?php
// Incluye el archivo "conexion.php" para poder usar la conexión a la base de datos.
// Esto evita tener que escribir el código de conexión cada vez.
include("conexion.php");

// Guarda en la variable $usuario el dato enviado por el formulario HTML (método POST).
// $_POST es un arreglo (array) global de PHP que guarda los valores enviados desde un formulario.
$usuario = $_POST['usuario'];

// Igual que arriba, guarda la contraseña enviada en la variable $clave.
$clave = $_POST['clave'];

// Crea una consulta SQL que busca un registro en la tabla "usuarios"
// donde los campos "usuario" y "clave" coincidan con los datos ingresados.
$sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND clave='$clave'";

// Envía la consulta ($sql) a la base de datos usando el método query() del objeto $conexion.
// El resultado (una tabla temporal con los datos encontrados) se guarda en $resultado.
$resultado = $conexion->query($sql);

// Verifica si la consulta devolvió al menos una fila (es decir, si existe un usuario con esos datos).
// num_rows devuelve el número de filas que resultaron de la consulta.
if ($resultado->num_rows > 0) {

    // Si hay coincidencia, muestra un mensaje de autenticación exitosa.
    echo "✅ Autenticación exitosa";

} else {

    // Si no hay coincidencias, muestra mensaje de error.
    echo "❌ Error de autenticación";
}

// Fin del código PHP
?>

