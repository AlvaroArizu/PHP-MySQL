<?php
// Conectar a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "phpintermedio") or die("Error de conexión: " . mysqli_connect_error());

// Recibir los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$consulta = $_POST['consulta'];

// Preparar la consulta SQL
$sql = "INSERT INTO consultas (nombre, apellido, correo, consulta) VALUES ('$nombre', '$apellido', '$correo', '$consulta')";

// Ejecutar la consulta y verificar si fue exitosa
if (mysqli_query($conexion, $sql)) {
    echo "La consulta se ha enviado correctamente.";
} else {
    echo "Error al enviar la consulta: " . mysqli_error($conexion);
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>
