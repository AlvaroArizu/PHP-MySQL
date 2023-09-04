# Unidad 4
- Funcionamiento 
- Instalación 
- ¿Qué podemos hacer con PHP? 
- Intercalando PHP con HTML 
- Sintaxis de PHP

## Funcionamiento
PHP es un lenguaje de programación del lado del servidor, lo que significa que el código PHP en una página web no se interpreta en el navegador del usuario, sino en el servidor web. Cuando un usuario solicita una página web, el servidor procesa los scripts PHP en esa página y envía al navegador del usuario el código HTML resultante, que es lo que se muestra en pantalla.

## Instalacion 
### Paso 1: Descarga XAMPP

1. Visita el sitio web oficial de XAMPP en [http://www.apachefriends.org/es/xampp.html](http://www.apachefriends.org/es/xampp.html).

2. Descarga la versión de XAMPP compatible con tu sistema operativo (Windows, macOS o Linux). Asegúrate de seleccionar la versión que incluye Apache, MySQL y PHP.

### Paso 2: Instala XAMPP

3. Ejecuta el archivo de instalación de XAMPP que descargaste.

4. Durante la instalación, selecciona "Apache" y "MySQL" si no están marcados por defecto, ya que necesitarás estos servicios para ejecutar PHP y bases de datos.

5. Continúa con la instalación siguiendo las instrucciones en pantalla. Puedes dejar la mayoría de las opciones con la configuración predeterminada a menos que tengas requisitos específicos.

6. Cuando finalice la instalación, asegúrate de que la opción "Iniciar el panel de control de XAMPP" esté marcada y haz clic en "Finalizar".

### Paso 3: Inicia los Servicios de XAMPP

7. Una vez instalado, se abrirá el "Panel de Control de XAMPP". Desde aquí, puedes iniciar o detener servicios como Apache y MySQL.

8. Haz clic en los botones "Iniciar" junto a "Apache" y "MySQL". Deberías ver "Running" junto a ellos si se inician correctamente.

### Paso 4: Crea Tu Primer Archivo PHP

9. Abre el Explorador de Archivos y navega hasta la carpeta de instalación de XAMPP en tu disco duro, generalmente en "C:\xampp" en Windows o "/Applications/XAMPP" en macOS.

10. Dentro de la carpeta de instalación, encontrarás una carpeta llamada "htdocs". Coloca tus archivos PHP en esta carpeta.

### Paso 5: Visualiza tu Archivo PHP

11. Abre tu navegador web y escribe la siguiente dirección en la barra de direcciones:

http://localhost/tuarchivo.php

Reemplaza "tuarchivo.php" por el nombre de tu archivo PHP. Por ejemplo, si tienes un archivo llamado "ejemplo.php", la dirección sería:

http://localhost/ejemplo.php

12. Presiona Enter y verás el resultado de tu archivo PHP en el navegador.

¡Listo! Ahora tienes XAMPP instalado y configurado en tu computadora local, lo que te permite ejecutar y probar tus scripts PHP antes de subirlos a un servidor web en línea.

## Intercalando PHP con HTML

Un documento PHP puede contener tanto código PHP como HTML. Esto es especialmente útil cuando deseas crear páginas web dinámicas en las que parte del contenido se genera dinámicamente en función de ciertas condiciones o datos.

### Sintaxis básica

Para intercalar PHP con HTML, puedes usar los delimitadores de código PHP `<?php` y `?>`. Estos delimitadores indican al servidor cuándo debe procesar código PHP y cuándo debe tratarlo como HTML estático.

Por ejemplo, considera el siguiente código PHP que muestra la hora actual en una página HTML:

```php
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hora Actual</title>
</head>
<body>
    <h1>La hora actual es:</h1>
    <?php
    echo date("H:i:s");
    ?>
</body>
</html>
```

En este ejemplo, el código HTML es estático y se muestra directamente en la página. El código PHP se encuentra entre <?php y ?>, y se utiliza para imprimir la hora actual en el formato "Hora:Minutos:Segundos".

### Uso de la función echo
La función **echo** se utiliza en PHP para imprimir contenido en la página. Puedes usar **echo** para mostrar texto, variables y otros datos. Aquí hay un ejemplo:

```PHP
<?php
$nombre = "Juan";
echo "Hola, $nombre"; // Esto imprimirá "Hola, Juan"
?>
```

En este ejemplo, la variable $nombre se muestra dentro del texto utilizando comillas dobles. PHP interpreta las variables dentro de las comillas dobles y las reemplaza por su valor.

### Terminación de sentencias
Es importante recordar que todas las sentencias de PHP deben terminar con un punto y coma (;). Esto indica el final de una instrucción y le dice al intérprete de PHP que procese la sentencia. Aquí tienes un ejemplo:

```PHP
<?php
$numero = 42;
echo "El número es: $numero"; // Esto imprimirá "El número es: 42"
?>
```

### Impresión de código HTML
Además de mostrar texto, PHP también puede imprimir código HTML directamente en la página. Esto es útil cuando deseas generar elementos HTML más complejos. Por ejemplo:

```PHP
<?php
echo "<ul>";
echo "<li>Elemento 1</li>";
echo "<li>Elemento 2</li>";
echo "<li>Elemento 3</li>";
echo "</ul>";
?>
```
En este caso, PHP genera una lista HTML (<ul.>) con tres elementos de lista (<li.>) y luego la imprime en la página.

## Sintaxis de PHP

La sintaxis de PHP es fundamental para escribir código claro y efectivo. Aquí se resumen algunos aspectos clave de la sintaxis de PHP:

### Delimitadores PHP

- El código PHP siempre debe estar encerrado entre los delimitadores `<?php` y `?>`. Estos indican al servidor cuándo debe procesar código PHP y cuándo debe tratarlo como HTML estático.

### Sentencias y Punto y Coma

- Todas las sentencias de PHP deben finalizar con un punto y coma (`;`). Esto señala el final de una instrucción y es esencial para que el intérprete de PHP procese correctamente el código.

### Comentarios

- Los comentarios son vitales para hacer que tu código sea comprensible para otros programadores y para ti mismo en futuras revisiones. PHP admite comentarios de estilo C, C++ y de shell de Unix.
  
  Ejemplo de comentario de una sola línea con `//`:
```php
  echo 'Esto se ve'; // esto no se ve
```

Ejemplo de comentario multilínea con /* */:
```php
echo 'esto también se ve'; /* esto tampoco se ve */
```
También puedes usar # para comentarios estilo shell de Unix:

```php
# esto no se ve
echo 'pero esto sí';
```

### Función phpinfo()

phpinfo() es una función útil para obtener información detallada sobre la configuración de PHP y el entorno del servidor. Proporciona detalles sobre opciones de compilación, extensiones, versión de PHP, configuración del servidor y más.

```php
<?php
phpinfo();
?>
```
Esta función es especialmente útil para depurar y verificar la configuración de PHP en un sistema específico.