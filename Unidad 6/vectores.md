# Vectores 
* Tablas, matrices, vectores o arrays
* Arrays indexados
* Arrays asociativos
* Bucle para arrays
* Más funciones para arrays

## Tablas, matrices, vectores o arrays
### Trabajando con Arrays en PHP

En PHP, los arreglos (también conocidos como arreglos, vectores, matrices o tablas en castellano) son estructuras de datos muy versátiles que pueden ser de una o más dimensiones. Los arreglos de una dimensión son comúnmente llamados "vectores". Lo interesante es que, a diferencia de algunos otros lenguajes de programación, en PHP un vector puede contener elementos de distintos tipos.

A continuación, veremos varios ejemplos que ilustran cómo trabajar con arreglos en PHP y cómo utilizar algunas de las funciones de arreglos más populares disponibles en PHP.

## Arrays indexados
En PHP, los **arrays** (también conocidos como **vectores**) son estructuras de datos que almacenan múltiples valores, accesibles a través de índices. Aquí tienes un resumen de los conceptos clave y ejemplos para entenderlos:

### 1. Definición de Arrays

Los arrays son variables compuestas que pueden contener varios elementos, cada uno con su propio índice. En PHP, los índices comienzan en 0 y pueden ser números enteros o textos.

### 2. Inicialización de Arrays

- Definición de valores para cada posición individualmente:
   
```php
   $familia[0] = "Padre";
   $familia[1] = "Madre";
   $familia[2] = "Hijo";
```
- Inicialización utilizando el constructor array():
```php
$pais = array("Argentina", "Uruguay", "Brasil", "Chile");
```
### 3. Índices y Acceso a Elementos
- Los índices siempre comienzan desde 0, pero no necesitan ser consecutivos ni numéricos.
- Acceso a un elemento por su índice:
```php
echo $familia[0]; // Muestra 'Padre'
```
### 4. Cantidad de Elementos
- La función count() se utiliza para conocer la cantidad de elementos en un array.:
```php
$cantidad = count($articulos);
```
### 5. Arrays con Elementos de Diferentes Tipos
- Los arrays en PHP pueden contener elementos de diferentes tipos de datos (números, cadenas, decimales, etc.).

### 6. Recorriendo Arrays
- Utilización de bucles `for` y función `count()` para recorrer un array de forma ordenada.
- Utilización de bucles `while`, `next()`, `prev()`, y `reset()` para recorrer arrays con índices no consecutivos o no numéricos.

### 7. Uso de list() y each()
- `list()` y` each()` permiten recorrer arrays de manera más eficiente y asignar índices y valores a variables durante el bucle.

### 8. Consejo Inicial
- Para comenzar, es recomendable utilizar la inicialización más simple y practicar con arrays ordenados antes de explorar métodos más avanzados.

### Ejemplos
- Almacenar y mostrar los nombres de los días de la semana en un array.
- Almacenar y mostrar los datos personales de un empleado en un array.
- Contar la cantidad de elementos en un array de artículos de librería.
- Recorrer arrays con índices no consecutivos o numéricos utilizando bucles y funciones.

## Arrays asociativos
En PHP, los **Arrays Asociativos** son estructuras de datos que permiten asociar claves (índices) con valores. A diferencia de los arrays indexados, los arrays asociativos utilizan claves personalizadas en lugar de índices numéricos. Aquí tienes un resumen de los conceptos clave y ejemplos para entenderlos:

### 1. Definición de Arrays Asociativos

- Los arrays asociativos permiten utilizar claves personalizadas en lugar de índices numéricos.
- Se utilizan para asociar datos con un identificador significativo.

Ejemplo:

```php
$menu = array(
    "Primer plato" => "Rabas",
    "Segundo plato" => "Pejerrey al verdeo con papas rústicas",
    "Postre" => "Helado"
);
echo $menu["Primer plato"]; // Muestra 'Rabas'
```
### 2. Claves Personalizadas
- Las claves pueden ser cualquier tipo de dato, como cadenas de texto, números, variables o incluso funciones.

- Ejemplo: 
```php
$indice = "favorito";
$color = array($indice => "violeta");
echo $color[$indice]; // Muestra 'violeta'
```

### 3. Acceso a Elementos
- Para acceder a un elemento del array asociativo, se utiliza la clave asociada a ese elemento.

- Ejemplo: 
```php
$precios["TV"] = 700;
$precios["Telefono"] = 150;
$precios["Computadora"] = 1900;
echo $precios["Computadora"]; // Muestra '1900'
```
### 4. Inicialización de Arrays Asociativos
- Se pueden inicializar los arrays asociativos utilizando el formato `array(clave => valor)` o `array(clave1 => valor1, clave2 => valor2)`.

- Ejemplo 
```php
$precios = array(
    "TV" => 1500,
    "Telefono" => 150,
    "Computadora" => 1900
);
echo $precios["Computadora"]; // Muestra '1900'
```

### 5. Función count()
- La función `count()` se utiliza para contar la cantidad de elementos en un array.
- Ejemplo:
```php
$un_array = array(4, 6, 3, 6, 7, 23, 1);
echo count($un_array); // Muestra '7'
```
### 6. Observación
- Los arrays asociativos permiten asociar claves personalizadas con valores, lo que facilita la identificación de elementos en el array.

### Ejemplo Adicional
- Almacenar ciudades del mundo en un array asociativo utilizando los tres primeros caracteres de la ciudad como clave.

```php
$ciudades = array(
    "par" => "París",
    "lon" => "Londres",
    "ate" => "Atenas",
    "ber" => "Berlín",
    "lim" => "Lima"
);
```
## Bucle para arrays
### foreach en PHP

En PHP, el bucle `foreach` se utiliza para recorrer (iterar) sobre arrays. A continuación, se explica su sintaxis y se proporcionan ejemplos para entender su uso:

### Sintaxis de foreach

```php
foreach ($array as $value) {
    // Sentencias
}

foreach ($array as $key => $value) {
    // Sentencias
}
```
- En la primera forma, $array es el array que se va a recorrer, y en cada ciclo, el valor de cada elemento se asigna a $value.
- En la segunda forma, $array es el array que se va a recorrer, y en cada ciclo, tanto la clave como el valor del elemento actual se asignan a $key y $value, respectivamente.

```php
// Ejemplo 1: Solo valor
$a = array(1, 2, 3, 17);
foreach($a as $v) {
    print "Valor actual de \$a: $v.\n";
}

// Ejemplo 2: Valor con clave (impresa para ilustrar)
$a = array(1, 2, 3, 17);
$i = 0; // Solo para propósitos demostrativos
foreach($a as $v) {
    print "\$a[$i] => $v.\n";
    $i++;
}

// Ejemplo 3: Clave y valor
$a = array(
    "uno" => 1,
    "dos" => 2,
    "tres" => 3,
    "diecisiete" => 17
);
foreach($a as $k => $v) {
    print "\$a[$k] => $v.\n";
}
```
### Funciones para Utilizar con Arreglos
### 1. Función sort()
- La función `sort()` permite ordenar los elementos de un arreglo de menor a mayor, en orden numérico o alfabético.

```php
// Ejemplo: Ordenar nombres de personas de menor a mayor
$nombres = array("María", "Luis", "Alberto", "Cesar", "Adriana");
sort($nombres);
```

### 2. Función asort()
- La función `asort()` ordena arreglos con índices de texto, manteniendo el valor de sus índices.

```php
// Ejemplo: Ordenar ciudades alfabéticamente de menor a mayor
$ciudad = array("par" => "París", "lon" => "Londres", "ate" => "Atenas");
asort($ciudad);
```
### 3. Función rsort()
- La función` rsort()` ordena un arreglo en orden descendente, de mayor a menor.
```php
// Ejemplo: Ordenar nombres de personas en forma descendente
$nombres = array("María", "Luis", "Alberto", "Cesar", "Adriana");
rsort($nombres);
```
### 4. Función arsort()
- La función `arsort()` ordena un arreglo con índices de texto en orden descendente.
```php
// Ejemplo: Ordenar ciudades en forma descendente
$ciudad = array("par" => "París", "lon" => "Londres", "ate" => "Atenas");
arsort($ciudad);
```

### 5. unción ksort()
- La función `ksort()` permite ordenar un arreglo por el índice.
```php
// Ejemplo: Ordenar nombres de países por índice
$paises = array("francia" => "franco", "japon" => "yen", "brasil" => "real");
ksort($paises);
```
### 6. Función krsort()
- La función `krsort()`ordena un arreglo por el índice en orden descendente.

```php
// Ejemplo: Ordenar nombres de países por índice en forma descendente
$paises = array("francia" => "franco", "japon" => "yen", "brasil" => "real");
krsort($paises);
```

### 7. Función shuffle()
- La función `shuffle() `permite mezclar los elementos de un arreglo en orden aleatorio.

```php
// Ejemplo: Mezclar elementos de un arreglo aleatoriamente
$ciudad = array("francia" => "franco", "japon" => "yen", "brasil" => "real");
shuffle($ciudad);

```
### 8. Función range()
- La función `range()` se utiliza para generar un arreglo con valores comprendidos en un rango.

```php
// Ejemplo: Generar un vector con valores entre 100 y 150
$numeros = range(100, 150);
```

### 9. Función array_fill()
- La función `array_fill()`se utiliza para llenar un arreglo con un dato repetido.

```php
// Ejemplo: Llenar un vector con el valor "PHP"
$vector = array_fill(10, 5, "PHP");
```

### 10. Función in_array()
- La función `in_array()` se utiliza para buscar un dato dentro de un arreglo y determinar si existe.

```php
// Ejemplo: Buscar un día en un vector de días de la semana
$dias = array("domingo", "lunes", "martes", "miércoles", "jueves", "viernes", "sábado");
$dia = "martes";
if (in_array($dia, $dias)) {
    echo "$dia existe en el vector de días";
} else {
    echo "$dia no existe en el vector de días";
}
```
## Más funciones para arrays
### Modificar el número de elementos de un array en PHP

### Reducir el tamaño de un array

#### 1. Función `array_slice()`

La función `array_slice()` se utiliza para recortar un array, conservando solo los elementos indicados por los índices. Recibe tres parámetros: el array original, el índice del primer elemento y el número de elementos a conservar (opcional).

```php
$entrada = array("Miguel", "Pepe", "Juan", "Julio", "Pablo");

// Reducir el tamaño del array
$salida = array_slice($entrada, 0, 3);

foreach ($salida as $actual) {
    echo $actual . "<br/>";
}

// Reducir el tamaño del array nuevamente
$salida = array_slice($salida, 1);

foreach ($salida as $actual) {
    echo $actual . "<br/>";
}
```
### 2. Función array_shift()
La función `array_shift()` extrae y devuelve el primer elemento de un array, acortando la longitud del mismo.

```php
$entrada = array("Miguel", "Pepe", "Juan", "Julio", "Pablo");

// Quitar el primer elemento del array
$salida = array_shift($entrada);

echo "La función devuelve: " . $salida . "<br/>";

foreach ($entrada as $actual) {
    echo $actual . "<br/>";
}

// Quitar el primer elemento del array nuevamente
$salida = array_shift($entrada);

echo "La función devuelve: " . $salida . "<br/>";

foreach ($entrada as $actual) {
    echo $actual . "<br/>";
}
```

### 3. Función unset()
La función `unset()` se utiliza para destruir una variable o eliminar una casilla de un array asociativo.
```php
$estadios_futbol = array(
    "Barcelona" => "Nou Camp",
    "Real Madrid" => "Santiago Bernabeu",
    "Valencia" => "Mestalla",
    "Independiente" => "Libertadores de América"
);

// Mostrar los estadios
foreach ($estadios_futbol as $indice => $actual) {
    echo $indice . " -- " . $actual . "<br/>";
}

// Eliminar el estadio asociado al Real Madrid
unset($estadios_futbol["Real Madrid"]);

// Mostrar los estadios después de eliminar uno
foreach ($estadios_futbol as $indice => $actual) {
    echo $indice . " -- " . $actual . "<br/>";
}
```
### Aumentar el tamaño de un array
### 1. Función array_push()
La función `array_push()` se utiliza para agregar uno o más elementos al final de un array y devuelve el número de elementos del array resultante.
```php
$tabla = array("Lagartija", "Araña", "Perro", "Gato", "Ratón");

// Aumentar el tamaño del array
array_push($tabla, "Gorrión", "Paloma", "Oso");

foreach ($tabla as $actual) {
    echo $actual . "<br/>";
}
```

### 2. Función array_merge()
La función `array_merge()` se utiliza para unir dos o más arrays en uno solo.
```php
$tabla = array("Lagartija", "Araña", "Perro", "Gato", "Ratón");
$tabla2 = array("12", "34", "45", "52", "12");
$tabla3 = array("Sauce", "Pino", "Naranjo", "Chopo", "Perro", "34");

// Unir los arrays en uno solo
$resultado = array_merge($tabla, $tabla2, $tabla3);

foreach ($resultado as $actual) {
    echo $actual . "<br/>";
}
```
También puedes aumentar el tamaño de un array asignando nuevos valores a las posiciones deseadas, ya sea en arrays indexados o asociativos.
```php
// Aumentar el tamaño de un array indexado
$tabla = array("Sauce", "Pino", "Naranjo");
$tabla[3] = "Algarrobo";

// Aumentar el tamaño de un array asociativo
$estadios_futbol = array(
    "Valencia" => "Mestalla",
    "Independiente" => "Libertadores de América"
);
$estadios_futbol["Barcelona"] = "Nou Camp";
```