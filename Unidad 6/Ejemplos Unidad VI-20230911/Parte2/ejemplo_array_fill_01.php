<!doctype html>
<html>
<head>
	<title>Ejemplo Array</title>
	<meta charset="utf-8"/>
</head>
<body>
<?php

// inicialización del vector

$vector=array_fill(10,5,"php");
echo "<h2>"."vector generado"."</h2>";

while (list($i,$valor)=each($vector))
{
      echo "posición: " . $i . " - ";
      echo "contenido: " . $valor;
      echo "<br/>";
}
?>
</body>
</html>
