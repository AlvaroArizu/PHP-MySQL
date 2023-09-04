<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Programador web con PHP y MySQL</title>
    <link href="estilos.css" rel="stylesheet"/>
</head>
<body>
<section id="contenedor">
    <header>
        <nav id="botonera_principal">
            <!-- ... (código de navegación) ... -->
        </nav>
        <div id="marca">
            <h1>Programador web con PHP y MySQL</h1>
        </div>
    </header>
    <section id="contenido">
        <h2>Catálogo - Unidad V</h2>
        <ul>
            <li><a href="catalogo.php?id=1">Sillón Capri</a></li>
            <li><a href="catalogo.php?id=2">Mesa Ipanema</a></li>
            <li><a href="catalogo.php?id=3">Banco Venecia</a></li>
        </ul>
        <div id="info_producto">
            <?php
            // Recupera el valor identificatorio desde la URL
            $id = $_GET['id'];

            // Muestra la información según el valor identificatorio
            switch ($id) {
                case 1:
                    echo '<h3>Producto: Sillón Capri</h3>';
                    echo '<p>Precio: $345.00</p>';
                    echo '<p>Características: Concebida para ser utilizada tanto bajo techo como a la intemperie. La madera de origen brasilera está acabada con un recubrimiento de Resina Polisten que la embellece.</p>';
                    echo '<img src="./Pic/venecia.jpg"  alt="Sillón Capri">';
                    break;
                case 2:
                    echo '<h3>Producto: Mesa Ipanema</h3>';
                    echo '<p>Precio: $500.00</p>';
                    echo '<p>Características: Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC y concebida para ser utilizada tanto bajo techo como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms.</p>';
                    echo '<img src="./Pic/ipanema.jpg"  alt="Mesa Ipanema">';
                    break;
                case 3:
                    echo '<h3>Producto: Banco Venecia</h3>';
                    echo '<p>Precio: $450.00</p>';
                    echo '<p>Características: Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC (SWCOC-091) y concebida para ser utilizada tanto bajo techado como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms.</p>';
                    echo '<img src="./Pic/venecia.jpg"  alt="Banco Venecia">';
                    break;
                default:
                    echo '<p>Selecciona un producto para ver la información.</p>';
                    break;
            }
            ?>
        </div>
    </section>
    <footer>
        <p>Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></p>
    </footer>
</section>
</body>
</html>
