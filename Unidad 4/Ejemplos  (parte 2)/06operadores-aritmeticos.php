<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo operadores</title>
</head>
<body>

<?php

$uno = 1;
echo $uno;
echo "<br/>";
 
$dos = 10%8; // 10/8=1, en lo que el resto es 2
echo $dos;
echo "<br/>";

$tres = 3;
echo $tres;
echo "<br/>";

$cuatro = 4;
echo $cuatro;
echo "<br/>";


$uno++; // la variable $uno ahora vale 2, ya que 1+1=2
echo $uno;
echo "<br/>";

$dos--; // la variable $dos ahora vale 1, ya que 2-1=1
echo $dos;
echo "<br/>";

$calculo = 1 + 5 * 3;  // Da como resultado 16 
echo $calculo;
echo "<br/>";
$calculo2 = (1 + 5) * 3;  // Da como resultado 18
echo $calculo2;


?> </body>
</html>