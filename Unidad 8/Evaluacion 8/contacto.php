<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Contáctenos - Unidad VIII</title>
    <link href="estilos.css" rel="stylesheet"/>
</head>
<body>
<section id="contenedor">
    <header>
        <nav id="botonera_principal">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="catalogo.php">Catálogo</a></li>
                <li><a href="noticias.php">Noticias</a></li>
                <li><a href="clientes.php">Clientes</a></li>
                <li><a href="contacto.php">Contáctenos</a></li>
            </ul>
        </nav>
        <div id="marca">
            <h1>Programador web con PHP y MySQL</h1>
        </div>
    </header>
    <section id="contenido">
        <h2>Contáctenos - Unidad VIII</h2>

        <!-- Formulario de contacto -->
        <form action="enviar_consulta.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <br><br>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required>
            <br><br>
            <label for="correo">Correo electrónico:</label>
            <input type="email" id="correo" name="correo" required>
            <br><br>
            <label for="consulta">Consulta:</label>
            <textarea id="consulta" name="consulta" rows="4" required></textarea>
            <br><br>
            <input type="submit" value="Enviar Consulta">
        </form>
    </section>
    <footer>
        Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a>
    </footer>
</section>
</body>
</html>
