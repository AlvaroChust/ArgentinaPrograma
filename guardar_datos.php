<?php
// Obtén el valor enviado por el formulario
$descripcion = $_POST['descripcion'];

// Realiza la conexión a la base de datos
$conexion = new mysqli("host", "usuario", "contraseña", "nombre_base_de_datos");

// Verifica si hay errores en la conexión
if ($conexion->connect_error) {
    die("Error en la conexión a la base de datos: " . $conexion->connect_error);
}

// Escapa los caracteres especiales para evitar inyección de SQL
$descripcion = $conexion->real_escape_string($descripcion);

// Crea la consulta SQL para insertar los datos en la base de datos
$sql = "INSERT INTO informacion_personal (descripcion) VALUES ('$descripcion')";

// Ejecuta la consulta SQL
if ($conexion->query($sql) === TRUE) {
    echo "Los datos se guardaron correctamente en la base de datos.";
} else {
    echo "Error al guardar los datos en la base de datos: " . $conexion->error;
}

// Cierra la conexión a la base de datos
$conexion->close();
?>
