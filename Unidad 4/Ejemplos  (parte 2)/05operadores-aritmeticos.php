<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo operadores</title>
</head>
<body>

<?php

$numero=24;
echo $numero."<br/>";

echo $numero++; // Lo muestra primero y luego lo incrementa, por ello muestra 24
echo "<br/>";
echo $numero; // Volvemos a mostrarlo y ya vale 25
echo "<br/>";

echo $numero--; // Lo muestra primero y luego lo decrementa, por ello muestra 25
echo "<br/>";

echo $numero; // Volvemos a mostrarlo y ya vale 24
echo "<br/>";

echo ++$numero; // Lo incrementa primero y luego lo muestra, por ello muestra 25
echo "<br/>";

echo --$numero; // Lo decrementa primero y luego lo muestra, por ello muestra 24
echo "<br/>";



?> </body>
</html>