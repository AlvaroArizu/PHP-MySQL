<?php
// Verificar si la sesión 'clientes' está creada
if (isset($_SESSION['clientes']) && $_SESSION['clientes'] === true) {
    // El contenido de clientes aquí
    echo "<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <title>Contenido de Clientes</title>
    <link href='estilos.css' rel='stylesheet'/>
</head>
<body>
<section id='contenedor'>
    <header>
        <nav id='botonera_principal'>
            <ul>
                <li><a href='index.php'>Home</a></li>
                <li><a href='catalogo.php'>Catálogo</a></li>
                <li><a href='noticias.php'>Noticias</a></li>
                <li><a href='clientes.php'>Clientes</a></li>
                <li><a href='contacto.php'>Contáctenos</a></li>
            </ul>
        </nav>
        <div id='marca'>
            <h1>Programador web con PHP y MySQL</h1>
        </div>
    </header>
    <section id='contenido'>
        <h2>Contenido de Clientes</h2>
        <!-- Tu contenido específico para clientes aquí -->
        <p>Bienvenido, cliente. Esto es contenido exclusivo para clientes.</p>
    </section>
    <footer>
        Desarrollado por <a href='http://www.elerning-total.com' target='_new'>Programador web con PHP y MySQL</a>
    </footer>
</section>
</body>
</html>";
} else {
    // La sesión 'clientes' no está creada, redireccionar a clientes.php
    header("Location: clientes.php");
    exit();
}
?>
