# Estructuras de control 
* while
* do while 
* for

## Bucles
Los bucles nos permiten iterar conjuntos de instrucciones, es decir repetir la ejecución de un conjunto de instrucciones mientras se cumpla una condición.

## While
El bucle while en PHP se utiliza para ejecutar un conjunto de instrucciones repetidamente mientras una condición dada sea verdadera. Aquí hay puntos clave sobre el bucle while:

### 1. Estructura básica:
```php
while (expresión) {
    // Código a ejecutar
}

```
### 2. Evaluación de la condición:
- Antes de cada iteración, la expresión se evalúa.
- Si la expresión es verdadera (TRUE), el código dentro del bucle se ejecuta.
- Si la expresión es falsa (FALSE) desde el principio, el bucle nunca se ejecutará.

### 3. Modificación de la condición
- Es importante cambiar algo en la expresión dentro del bucle para que en algún momento deje de ser verdadera y el bucle se detenga.
- Por lo general, se utiliza una variable para controlar la condición, y se modifica dentro del bucle.

### 4. Ejecución repetida
- El código dentro del bucle se ejecuta repetidamente mientras la condición sea verdadera.
- La condición se verifica al principio de cada iteración.
  
### 5. Ejemplo en HTML:
Aquí hay un ejemplo en HTML y PHP que cuenta del 0 al 10 e imprime si cada número es par o impar:
```php
<?php
$cuenta = 0;
while ($cuenta <= 10) {
    if ($cuenta % 2 == 0) {
        echo "El $cuenta es un número PAR<br>";
    } else {
        echo "El $cuenta es un número IMPAR<br>";
    }
    $cuenta++;
}
?>
```
En este ejemplo, el bucle while se ejecuta mientras $cuenta sea menor o igual a 10. Se verifica si $cuenta es par o impar utilizando el operador %.

El bucle while es útil cuando deseas realizar una acción repetida basada en una condición que puede cambiar durante la ejecución del bucle. Asegúrate de tener cuidado con la lógica de control para evitar bucles infinitos.

## Do...While
El bucle `do...while` en PHP es similar al bucle `while`, pero con una diferencia clave: en un bucle `do...while`, el bloque de código se ejecuta al menos una vez, y luego la condición se verifica. Si la condición es verdadera, el bloque de código se ejecutará nuevamente. Aquí está el resumen de cómo funciona el bucle `do...while` en PHP:

### 1. Estructura básica:
```php
do {
    // Código a ejecutar
} while (expresión);
```
### 2. Ejecución al menos una vez:
- El bloque de código dentro del `do` se ejecuta antes de verificar la condición en `while`.
- Esto significa que, incluso si la condición es falsa desde el principio, el bloque de código se ejecutará al menos una vez.

### 3. Evaluación de la condición:
- Después de que el bloque de código se ejecuta, la expresión se evalúa.
- Si la expresión es verdadera (TRUE), el bloque de código se ejecutará nuevamente.
- Si la expresión es falsa (FALSE), el bucle se detendrá y la ejecución continuará después del bucle.

### 4. Ejemplo en HTML:
Aquí hay un ejemplo similar al anterior, pero utilizando un bucle `do...while` para contar del 0 al 10 e imprimir si cada número es par o impar:
```php
<?php
$cuenta = 0;
do {
    if ($cuenta % 2 == 0) {
        echo "El $cuenta es un número PAR<br>";
    } else {
        echo "El $cuenta es un número IMPAR<br>";
    }
    $cuenta++;
} while ($cuenta <= 10);
?>
```
En este ejemplo, el bloque de código se ejecuta al menos una vez, y luego la condición ($cuenta <= 10) se verifica. Si la condición es verdadera, el bucle se ejecutará nuevamente.

El bucle do...while es útil cuando deseas asegurarte de que el código dentro del bucle se ejecute al menos una vez, independientemente de la condición. Luego, la condición se verifica para determinar si el bucle debe continuar ejecutándose.

## Ciclo For
El ciclo `for` en PHP es una estructura de control utilizada para ejecutar un conjunto de instrucciones un número específico de veces. A diferencia de los bucles `while` y `do...while`, el ciclo `for` se utiliza cuando conoces de antemano el número de iteraciones que deseas realizar. Aquí tienes los puntos clave sobre el ciclo `for`:

### 1. Estructura básica:
```php
for (inicialización; condición; incremento/decremento) {
    // Código a ejecutar
}
```
### 2. Inicialización:
- La inicialización se realiza una sola vez al principio del ciclo.
- Se utiliza para establecer una variable de control que se utilizará para contar las iteraciones.

### 3. Condición:
- La condición se verifica antes de cada iteración.
- Si la condición es verdadera (TRUE), el código dentro del ciclo se ejecuta.
- Si la condición es falsa (FALSE), el ciclo se detiene.

### 4. Incremento/Decremento:
- El incremento o decremento se realiza después de cada iteración.
- Se utiliza para cambiar el valor de la variable de control y avanzar hacia el final del ciclo.

### 5. Ejemplo en HTML:
Aquí tienes un ejemplo en HTML y PHP que utiliza un ciclo `for` para contar del 1 al 10 e imprimir cada número:
```php
<?php
for ($i = 1; $i <= 10; $i++) {
    echo "Número: $i<br>";
}
?>
```
En este ejemplo, el ciclo for se utiliza para contar del 1 al 10. La variable de control $i se inicializa en 1, se verifica si es menor o igual a 10 en cada iteración y se incrementa en 1 después de cada iteración.

El ciclo for es útil cuando sabes cuántas veces deseas ejecutar un bloque de código y quieres mantener un control preciso sobre la variable de control y su incremento o decremento.
