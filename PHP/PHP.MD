# PHP
### Que es?
Lenguaje de prog de codigo abeirto para el desarrollo web o app web dinamicas

- Se puede mezclar codigo HTML con PHP


# Tipos de datos en PHP
1. boolean (true - false)
2. int
3. double
4. string

```php
<?php
echo boolean;
echo int;  
echo double;
echo string;

//Me dice el tipo de dato
var_dump(-10);
?>
```

# Definir y Mostrar varibles
```php
<?php
$nombre="Carlos"; //Declaro con $
echo $nombre; //Muestri con echo
>
```

![](../Unidad%204/Pic/var%20no%20se%20usan.png)

## Constantes en PHP
```php
<?php
//Forma 1
define("_NOMBRE", "Carlos");
echo _NOMBRE;

define("_ARRAY", array("Martina","Alvaro","Oli",));
echo _ARRAY[0];
echo _ARRAY[1];
echo _ARRAY[2];

//Forma 2
const _APELLIDO = "Perez";
echo _APELLIDO;
>
```

## ARRAY
### Tipos de Array
1. Escalares, se accede a ellos mediente indices
```php
<?php
$estudiantes=array("Alvaro","Martina", "Oli", 23);
$estudiantes[2]="Galo";
echo $estudiantes[0];
echo $estudiantes[1];
echo $estudiantes[2];
>
```
2. Asosiativos, se asocia con =>
```php
<?php
$estudiante=[
    "nombre"=>"Alvaro", 
    "apellido"=> "Arizu", 
    "edad"=> 23
];
echo $estudiante["nombre"];
echo $estudiante["apellido"];
echo $estudiante["edad"];
>
```
3. Multidimensionales
```php
$estudiante=[
    "nombre"=>"Alvaro", 
    "apellido"=> "Arizu", 
    "edad"=> 23,
    "cursos"=>["PHP", "JS", "HTML"]
];
echo $estudiante["nombre"];
echo $estudiante["apellido"];
echo $estudiante["edad"];
echo $estudiante["cursos"][0];
echo $estudiante["cursos"][1];
echo $estudiante["cursos"][2];
>
```
## Concatenacion e interpolacion de variables 
```php
<?php
$nombre="Alvaro"; 
$apellido="Arizu";

$nombre_completo=$nombre.$apellido;

echo $nombre." ".$apellido;

echo "Mi nombre es: " $nombre_completo;
>
```

## Asignacion por referecnia 
Significa que ambas variables terminan apuntnado a los mismos datos y nada es copiado en ninguna parte
```php
<?php
$texto="Argentina";
$otro_texto=$texto; //Asignacion normal, no cambia 
$otro_texto2= &$texto:; //Asignacion por referencia, puede cambiar a lo largo del programa

echo $otro_texto;
echo $otro_texto2;
>
```

## Operador Ternario
```php
//Estructura
<operador>?<valor si es verdadero>:<valor si es falso>;
(9>7)? $total=10*7 : $total=10*9;

echo $total;
```
Hacer un programa que calcule el total a pagar por la compra de camisas. Si se comprar 3 camisas o mas se aplica un descuento del 20% sobre el total de la compra y si son menos de 3 camisas un descuento del 10%

```php
<?php
$camisas=7;
$precio=10;

$total= $camisas * $precio;

$total=($camisas>=3)?($total*0.20):($total*0.10);

echo "El precio a pagar es: $" $total;
>
```

## match(){}
Similar al switch(){}, para comparar === (diferencia)
```php
<?php
match(VARIABLE){
    $variable=> ,
    $variable2=> ,

    default =>
};
>
```

```php
<?php
$a=7;
$b=8;   
$c=9;
$d=10;

$resultado = match(){
    $a===$b => "Son iguales",
    $a===$c => "Son iguales",
    $a===$d => "Son iguales",
    default => "No son iguales"
};

echo $resultado;
>
```

## for(){}
```php
<?php
for($i=1; $i<20; $i++){
    echo $i. "<br>";
}
>
```

## foreach(){}
Es un modo sencillo de iterar sobre array
```php
<?php
$frutas = ["manzana", "pera", "naranja", "uva"];
foreach($frutas as $fruta){
    echo $fruta. "<br>";
    }

foreach($frutas as $clave => $valor){
    echo $clave. "-".$valor. "<br>";
    }
?>
```

## REQUIRE e INCLUDE
Ambas funciones sirven para anadir otro ficheros a nuestros scripts en PHP
- Include: inserta un codigo procedente de otro archivo, sino existe muestra "warning", y se sigue ejecutando el scripts.
```php
<?php
// Archivo a incluir (incluir.php)
// Este archivo puede contener cualquier código PHP
echo "Este es el archivo incluido.<br>";

// Script principal
echo "Antes de incluir el archivo.<br>";
include 'incluir.php'; // Incluye el archivo
echo "Después de incluir el archivo.<br>";

// Si el archivo no existe, se genera un warning
include 'archivo_inexistente.php';
echo "Este mensaje se muestra incluso si el archivo no existe.<br>";
?>

Antes de incluir el archivo.
Este es el archivo incluido.
Después de incluir el archivo.
Warning: include(archivo_inexistente.php): failed to open stream: No such file or directory in /ruta/del/archivo.php on line XX
Warning: include(): Failed opening 'archivo_inexistente.php' for inclusion (include_path='.:/usr/local/lib/php') in /ruta/del/archivo.php on line XX
Este mensaje se muestra incluso si el archivo no existe.

```

- Require: inserta un codigo procedente de otro archivo, sino existe muestra "fatal error", y no se sigue ejecutando el scripts
```php
<?php
// Archivo a incluir (requerir.php)
// Este archivo puede contener cualquier código PHP
echo "Este es el archivo requerido.<br>";

// Script principal
echo "Antes de requerir el archivo.<br>";
require 'requerir.php'; // Requiere el archivo
echo "Después de requerir el archivo.<br>";

// Si el archivo no existe, se genera un fatal error y el script se detiene
require 'archivo_inexistente.php';
echo "Este mensaje no se mostrará si el archivo no existe.<br>";
?>

Antes de requerir el archivo.
Este es el archivo requerido.
Después de requerir el archivo.
Fatal error: require(): Failed opening required 'archivo_inexistente.php' (include_path='.:/usr/local/lib/php') in /ruta/del/archivo.php on line XX
```
## GET y POST

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


# Funciones en PHP
Una función en PHP es un conjunto de instrucciones que permiten procesar las variables para obtener un resultado. Se definen con la palabra "function" seguida del nombre de la función, paréntesis que pueden o no contener parámetros, y las instrucciones de la función que van entre llaves {}. Para utilizar una función, simplemente se llama por su nombre seguido de paréntesis y los parámetros necesarios, si los hay.

### Tendríamos que seguir el siguiente razonamiento:  
1. definir función  
2. suma(art1,art2,art3)  
3. suma=art1+art2+art3  
4. imprimir(suma)  
5. fin función  

```php
<?php 
function mifuncion(){ 
instrucciones; 
} 
?>
```

### Ejemplo de una funcion que acepta 2 parametros
```php
<?php 
function producto($num1, $num2){ 
$producto = $num1 * $num2; 
return $producto; } 
?>
```

## Parametro de la funciones 
Los parámetros de una función son valores que se pasan a la función para que los procese y devuelva un resultado. Estos parámetros se definen entre los paréntesis de la función y pueden ser utilizados dentro de la función como variables internas. Para que una función acepte parámetros, estos deben ser definidos entre los paréntesis de la función

```php
<?php 
function agregar(&$string) { 
/* Paso por referencia del parámetro. Los cambios también se verán reflejados fuera de la 
función*/ 
$string .= ' y algo más.'; 
} 
$str = 'Esto es una cadena, '; 
agregar($str); 
echo $str;  
// Escribe 'Esto es una cadena, y algo más.' 
?> 
```
```php
<?php 
function agregar($string) { 
/ Paso por valor del parámetro. 
$string .= ' y algo más.'; 
} 
$str = 'Esto es una cadena, '; 
agregar($str); 
echo $str."<br/>"; // Escribe 'Esto es una cadena, ' 
function agregarporreferencia(&$str) { 
// Paso por referencia del parámetro. 
$str .= ' y algo más.'; 
} 
agregarporreferencia($str); 
echo($str); 
// Escribe 'Esto es una cadena, y algo más.' 
?> 
```

## Parametros por defecto 
Los parámetros por defecto son valores que se asignan a los parámetros de una función en caso de que no se les pase un valor al llamar la función. Estos valores se definen en la definición de la función y se asignan automáticamente a los parámetros si no se les pasa un valor al llamar la función. Para utilizar parámetros por defecto, se deben definir a la derecha de cualquier parámetro sin valor por defecto.

```php
<?php 
function cafe($tipo="cappucino") {  
/*El valor por defecto del parámetro $tipo es cappucino*/ 
return "Haciendo una taza de $tipo.<br>"; 
} 
echo cafe(); 
/*Llamada a la función sin parámetro. El parámetro tomará su valor por defecto: 
cappucino*/ 
echo cafe("espresso"); 
//El parámetro tomará el valor espresso 
?>
```

## Devolver valores
Para devolver valores desde una función en PHP, se utiliza la instrucción "return". Esta instrucción devuelve el valor especificado y finaliza la ejecución de la función. Puede devolverse cualquier tipo de valor, incluyendo listas y objetos. Si se desea devolver múltiples valores, se puede devolver una lista utilizando la función "list()". 

```php
<?php 
function cuadrado($num) { 
return $num * $num; // Devuelve el cuadrado de $num 
} 
echo cuadrado (5); //Escribe: 25 
?> 
```

```php
<?php 
function numeros() { 
return array (0,1,2,3); 
} 
list ($cero, $uno, dos, $tres) = numeros(); 
echo ($cero.‟,‟); 
echo ($uno.‟,‟); 
echo ($dos.‟,‟); 
echo ($tres); 
?>
```

## Funciones para PHP para MySQL
PHP tiene varias extensiones para acceder a las tablas MySQL, siendo la más conocida la extensión "mysql". Sin embargo, esta extensión ha sido declarada como obsoleta a partir de PHP 5.5 y se recomienda no escribir código nuevo con ella. En su lugar, se recomienda utilizar la extensión "mysqli" o "PDO". "mysqli" tiene dos versiones, una procedimental y otra orientada a objetos, mientras que "PDO" es solo orientada a objetos. En el manual de PHP se recomienda reemplazar la extensión "mysql" por "mysqli" o "PDO".

## Funciones de la extensión Mysqli 
La extensión "mysqli" en su versión procedimental cuenta con varias funciones, entre las cuales se encuentran:

- mysqli_connect(): establece la conexión con el servidor y selecciona la base de datos con la que se va a trabajar.
- mysqli_query(): ejecuta el query pasado como parámetro.
- mysqli_fetch_assoc(): devuelve una fila de resultados como un array asociativo.
- mysqli_num_rows(): devuelve el número de filas en un resultado.
- mysqli_affected_rows(): devuelve el número de filas afectadas por la última consulta.
- mysqli_error(): devuelve una cadena con la descripción del último error ocurrido en la conexión.
- mysqli_close(): cierra la conexión con la base de datos.

Puedes encontrar una lista completa de todas las funciones de la extensión "mysqli" en el siguiente enlace: http://php.net/manual/en/mysqli.summary.php


### 1.mysqli_connect() 
- Establece la conexión con el servidor y selecciona la base de datos con la que se va a trabajar.
```php
<?php 
//conection: 
$link = mysqli_connect("myhost","myuser","mypassw","mybd") or 
die("Error " . mysqli_error($link)); 
?> 
```
### 2. mysqli_query() 
- Ejecuta el query pasado como parámetro.
```php
<?php 
//conection: 
$link = mysqli_connect("myhost","myuser","mypassw","mybd") or 
die("Error " . mysqli_error($link)); 
//consulta: 
$result = mysqli_query($link, "SELECT * FROM table") or die("Error " . 
mysqli_error($link)); 
?> 
```
### 3.mysqli_fetch_array()
- Devuelve una fila de resultados como un array numérico y asociativo.
```php
<?php 
//conection: 
$link = mysqli_connect("myhost","myuser","mypassw","mybd") or 
die("Error " . mysqli_error($link)); 
//consulta: 
$result = mysqli_query($link, "SELECT * FROM table") or die("Error " . 
mysqli_error($link)); 
//lectura: 
while ($row = mysqli_fetch_array($result)){ 
Var_dump($row); 
}; 
?>
```
### 4.mysqli_fetch_row()
- Devuelve una fila de resultados como un array numérico.
```php
<?php 
//conection: 
$link = mysqli_connect("myhost","myuser","mypassw","mybd") or 
die("Error " . mysqli_error($link)); 
//consulta: 
$result = mysqli_query($link, "SELECT * FROM table") or die("Error " . 
mysqli_error($link)); 
//lectura: 
while ($row = mysqli_fetch_row($result)){ 
Var_dump($row); 
}; 
?> 
```
### 5.mysqli_num_rows()
- Devuelve el número de filas en un resultado.
```php
<?php 
//conection: 
$link = mysqli_connect("myhost","myuser","mypassw","mybd") or 
die("Error " . mysqli_error($link)); 
//consulta: 
$result = mysqli_query($link, "SELECT * FROM table") or die("Error " . 
mysqli_error($link)); 
//lectura: 
if (mysqli_num_rows($result)){ 
while ($row = mysqli_fetch_row($result)){ 
Var_dump($row); 
}; 
}else{ 
Echo “No se encontraron datos”; 
} 
?>
```
### 6.mysqli_error() 
- Devuelve una cadena con la descripción del último error ocurrido en la conexión. 
```php
<?php 
//conection: 
$link = mysqli_connect("myhost","myuser","mypassw","mybd") or 
die("Error " . mysqli_error($link)); 
//consulta: 
$result = mysqli_query($link, "SELECT * FROM table") or die("Error " . 
mysqli_error($link)); 
//lectura: 
if (mysqli_num_rows($result)){ 
while ($row = mysqli_fetch_row($result)){ 
Var_dump($row); 
}; 
}else{ 
Echo “No se encontraron datos”; 
} 
?> 
```

## Encriptar una contraseña en PHP 
- Encriptar una contraseña en PHP es muy sencillo, para ello utilizaremos la función password_hash() que nos permite encriptar 
```PHP
<?php
$clave=holamundo

$clave_procesada=password_hash($clave, PASSWORD_BCRYPT, ["cost"=>11]);

if (password_verify($clave, $clave_procesada)){
    echo "Las claves coinciden";
}
>
```

## Saber si una varible esta vacia o definida con isset() || empty()
```php
<?php
$numero=NULL;
$nro="9";

unset($nro);//destruye el valor de la variable, la vuelve nula

$nro=$_GET["nro"]; recupero el valor de la variable

if(is_null($numero)){
    echo "Es nula";
}else{
    echo "No es nula";
};


if(empty($numero)){
    echo "Esta vacia";
}else{
    echo "No esta vacia";
}

if(isset($numero)){
    echo "Esta definida";
}else{
    echo "No esta definida";
}
>
```

## SUBIR o ENVIAR ARCHIVOS a SERVIDOR PHP con FORMULARIOS
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Subir archivo con PHP</h3>
    <form action="carga.php" method="POST" enctype="multipart/form-data" >
        <input type="file" name="archivo">
        <br>
        <button type="submit">ENVIAR</button>
    </form>
</body>
</html>
```
carga.php
```php
<?php
    echo $_FILES['archivo']['name'].<br>; // Recibe el nombre
    echo $_FILES['archivo']['tmp_name'].<br>; // Recibe la ruta en donde se encuetra el archivo
    echo $_FILES['archivo']['type'].<br>; // tipo de arcihivo
    echo $_FILES['archivo']['error'].<br>; // en caso de error
    echo $_FILES['archivo']['size'].<br>; // tamaño


    if(!file_exists("archivo")){
        if(!mkdir("archivo", 0777)){
            echo "No se pudo crear la carpeta";
            exit();
        }
    }

    chmod("archivo",0777);

    if(move_uploaded_file($_FILES['archivo']['tmp_name'], "archivo/".$_FILES['archivo']['name'])){
        echo "Archivo subido";
    }else{
        echo "No se pudo subir el archivo";
    }
>

```

##  SUBIR o ENVIAR ARCHIVOS con PHP y AJAX (API FETCH)