<!doctype html>
<html>
<head>
	<title>Ejemplo Array</title>
	<meta charset="utf-8"/>
</head>
<body>

<?php

// inicialización del vector
$numeros = range(100,150);
echo "<h2>"."vector generado"."</h2>";
while (list($i,$valor)=each($numeros))
{
      echo $valor . " - ";
}
?>

</body>

</html>
