# Unidad 5
- Variable $_GET 
- Variable $_POST

## Links con variables

En páginas web dinámicas, puedes pasar datos entre distintas páginas mediante variables utilizando enlaces. Aquí está el resumen:

- Los enlaces HTML se crean utilizando la etiqueta `<a>`. Por lo general, se ven así:

```html
<html>
<head>
    <title>Paso de variables por PHP</title>
</head>
<body>
    <a href="destino.html">Esto es un link</a>
</body>
</html>
```

## VARIABLE $_GET
Es un vector asociativo que se utiliza para recoger información enviada de una página a otra a través del método "GET" en la URL

### Ejemplo 1: Recibir y mostrar datos de un formulario GET
```HTML
<!DOCTYPE html>
<html>
<head>
    <title>Formulario GET</title>
</head>
<body>
    <form action="procesar.php" method="get">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
```
Cuando el usuario envía este formulario, los datos se enviarán a un archivo PHP llamado "procesar.php". En "procesar.php", puedes acceder al valor del campo "nombre" enviado mediante $_GET 
```html
<!DOCTYPE html>
<html>
<head>
    <title>Procesar GET</title>
</head>
<body>
    <h1>Datos enviados por GET</h1>
    <?php
    if (isset($_GET['nombre'])) {
        $nombre = $_GET['nombre'];
        echo "<p>Nombre: $nombre</p>";
    } else {
        echo "<p>No se ha proporcionado un nombre.</p>";
    }
    ?>
</body>
</html>
```

### Ejemplo 2: Pasar parámetros a través de la URL
Puedes crear enlaces que pasen parámetros a través de la URL. Por ejemplo:
```html
<a href="pagina.php?producto=zapatillas&precio=50">Ver detalles</a>
```
En "pagina.php", puedes acceder a estos valores con $_GET:

```php
$producto = $_GET['producto'];
$precio = $_GET['precio'];
```
### Ejemplo 3: Filtrar datos en una página
Supongamos que tienes una página con una lista de productos y quieres permitir que los usuarios filtren los productos por categoría a través de la URL:

```html
<a href="productos.php?categoria=ropa">Ropa</a>
<a href="productos.php?categoria=electronicos">Electrónicos</a>
<a href="productos.php?categoria=accesorios">Accesorios</a>
```
```php
$categoria = $_GET['categoria'];
// Luego puedes usar $categoria para mostrar productos de la categoría seleccionada.
```
## Variable `$_POST` y Formularios

La variable `$_POST` es otro vector asociativo en PHP que se utiliza para guardar información transferida de una página a otra, pero a diferencia de `$_GET`, esta información se envía bajo el método "POST" de un formulario. La principal diferencia es que los datos enviados mediante "POST" no se muestran en la URL del navegador, lo que lo hace más adecuado para el envío de datos sensibles.

Para trabajar con formularios en PHP, se debe especificar la página que procesará el formulario en el atributo "action" del formulario HTML. También se debe definir el método de envío, que puede ser "GET" o "POST". El método "POST" se utiliza comúnmente en formularios para enviar datos.

Los elementos clave de un formulario HTML son:

1. **Atributo `action`:** Indica la página a la que se enviarán los datos cuando se presione el botón "Enviar". Esto actúa como un enlace hacia la página de destino.

2. **Atributo `method`:** Especifica el método de envío de datos, que puede ser "GET" (visible en la URL) o "POST" (oculto). El método "POST" se usa comúnmente en formularios.

3. **Campos de entrada (`<input>`):** Permiten al usuario ingresar datos. Cada campo debe tener un atributo "name", que será el nombre de la variable que se enviará a la página de destino.

4. **Botón para enviar los datos:** Un botón que permite al usuario enviar los datos ingresados en el formulario.

En el siguiente ejemplo, se muestra un formulario HTML (`formu.htm`) que utiliza el método "POST" para enviar datos a la página "muestra.php". El campo de entrada tiene el nombre "direccion":

```html
<html>
<head>
    <title>Paso de variables por PHP</title>
</head>
<body>
    <form action="muestra.php" method="POST">
        <input type="text" name="direccion">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
```
La página "muestra.php" recibe la variable $direccion enviada por el formulario y la muestra:

```php
<?php
print("Su dirección es: ");
print($direccion);
?>
```
En resumen, $_POST se utiliza para recibir y procesar datos de formularios en PHP, y los formularios HTML son una forma común de enviar información a través de páginas web. Los campos de entrada en el formulario se relacionan con variables PHP en la página de destino mediante sus nombres.














