<?php
// Iniciar la sesión
session_start();

// Datos de usuario válido
$usuarioValido = array(
    'correo' => 'cliente@gmail.com',
    'contrasena' => 'phpintermedio'
);

// Recibir los datos del formulario
$correoIngresado = isset($_POST['correo']) ? $_POST['correo'] : '';
$contrasenaIngresada = isset($_POST['contrasena']) ? $_POST['contrasena'] : '';

// Verificar si los datos son correctos
if ($correoIngresado === $usuarioValido['correo'] && $contrasenaIngresada === $usuarioValido['contrasena']) {
    // Los datos son correctos, crear la sesión
    $_SESSION['clientes'] = true;

    // Redireccionar a clientes.php
    header('Location: clientes.php');
    exit;
} else {
    // Los datos son incorrectos, mostrar un mensaje de error
    echo "<h2>Error de inicio de sesión</h2>";
    echo "<p>Los datos ingresados son incorrectos. Por favor, verifica tu correo electrónico y contraseña.</p>";
    echo "<a href='clientes.php'>Volver al inicio de sesión</a>";
}
?>
