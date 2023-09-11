<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias</title>
    <!-- Enlace al archivo CSS externo -->
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div id="contenedor">
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
            <h2>Noticias - Unidad VI</h2>
            <?php
            
            $noticias = array(
                array(
                    'titulo' => 'Cuál es el origen de la crisis mundial de microchips y cómo puede afectarte',
                    'texto' => 'Los fabricantes de autos y las compañías de dispositivos electrónicos enfrentan problemas para abastecerse de chips de computadora.',
                    'imagen' => './Pic/microchip.jpg',
                ),
                array(
                    'titulo' => 'Transistores inversos',
                    'texto' => 'Qué son, para qué sirven y por qué aspiran a reinventar. La electrónicaLos trancitores nos prometen circuitos integrados más sencillos, rápidos, compactos y con un consumo inferior, por lo que podrían ayudarnos a dilatar aún más la «Ley de Moore».',
                    'imagen' => './Pic/transitores.jpeg',
                ),
                array(
                    'titulo' => 'El país que está luchando contra la cultura de tirar todo lo viejo a la basura',
                    'texto' => 'Una combinación de aficionados entusiastas, cafés de reparación y nuevas leyes que protegen el derecho a reparar podría ayudar a disminuir las crecientes montañas de aparatos electrónicos averiados.',
                    'imagen' => './Pic/viejo.jpg',
                ),
                array(
                    'titulo' => 'Qué es el litio geotérmico y por qué puede revolucionar las energías limpias',
                    'texto' => 'Un novedoso sisterna para extraer litio ha resultado ser más respetuoso con el medio ambiente que otras formas más intensivas en agua o tierra como son las de Latinoamérica. ¿Ha llegado una nueva fiebre del oro?',
                    'imagen' => './Pic/litio.jpg',
                ),
            );

            
            foreach ($noticias as $noticia) {
                echo '<div class="noticia">';
                echo '<h3 class="titulo">' . $noticia['titulo'] . '</h3>';
                echo '<p class="parrafo">' . $noticia['texto'] . '</p>';
                echo '<img class="imagen" src="' . $noticia['imagen'] . '" alt="' . $noticia['titulo'] . '">';
                echo '</div>';
            }
            ?>
            

        </section>
        <footer>
            <p>Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></p>
        </footer>
    </div>
</body>
</html>
