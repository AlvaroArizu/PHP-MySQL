# Unidad 5
- Estructuras de control 
- Condicionales
- Else
- Switch

## Estructuras de control
Las "Estructuras de Control" son un concepto fundamental en programación que permite dar dinamismo a los scripts. Estas estructuras permiten repetir acciones sucesivas o elegir una secuencia de acciones basándose en condiciones específicas durante la ejecución del programa. Son un conjunto de instrucciones presentes en la mayoría de los lenguajes de programación que facilitan la toma de decisiones y la ejecución de tareas repetitivas.

## Condicionales
Los condicionales son estructuras de control que permiten que un programa tome decisiones basadas en condiciones específicas. En PHP, estas decisiones se toman utilizando las instrucciones 
- if
- else 
- elseif
  
### IF
```php
$edad = 25;
if ($edad >= 18) {
    echo "Eres mayor de edad.";
}
```

### ELSE
```PHP
<?php
$x=4;
if ($x>5) {
echo "El valor de x es mayor a 5";
}
else {
echo "El valor de x es menor o igual a 5"; }
?>
```

```HTML
<html>
<head> <title>Problema</title> </head>
<body>
<?php
$valor=rand(1,10);
echo "<p>El valor sorteado es $valor</p>";
if ($valor<=5)
{
echo "<p>Es menor o igual a 5</p>"; }
else
{
echo "<p>Es mayor a 5</p>";
}
?> </body> </html>
```

### ELSEIF
```PHP
<?php
$test = 33;
if ($test > 40) {
echo " $test es mayor que 40."; }
elseif ($test > 35) {
echo " $test es mayor que 35."; }
elseif ($test > 30) {
echo " $test es mayor que 30."; }
else {
echo " $test es menor que 40, 35 y 30."; }
?>
```
No está de más mencionar, que para plantear las distintas condiciones, debemos tener en cuenta que disponemos de los siguientes operadores:

- **= =** para ver si una variable es igual a otra. 
-  **!=** distinto.
- **>=** mayor o igual.
- **>** mayor.
- **<=** menor o igual 
- **<** menor
Para comparar usamos dos signos igual (= =), ya que si utilizáramos uno solo estaríamos asignando no comparando.

### SWITCH
Un switch es una estructura que evalúa el valor de una variable o expresión y depende de su valor, ejecuta cierto bloque de código.

```PHP
<?php
$examen="Bueno";
switch($examen) {
case "Excelente": echo "Su nota fue 10. "; break;
case "Muy bien": echo "Su nota fue 8 o 9. "; break;
case "Bueno": echo "Su nota fue 6 o 7";
break;
case "Regular": echo "Su nota fue 4 o 5"; break;
default: echo "Su nota fue menor o igual a 3. "; }
?>
```
