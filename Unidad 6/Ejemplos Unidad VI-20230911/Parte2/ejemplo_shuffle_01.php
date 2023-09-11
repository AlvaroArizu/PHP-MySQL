<!doctype html>
<html>
<head>
	<title>Ejemplo Array</title>
	<meta charset="utf-8"/>
</head>
<body>
<?php

// inicialización del vector

$ciudad = array("francia" => "franco",
                          "japon" => "yen",
                          "brasil" => "real",
                          "italia" => "lira",
                          "argentina" => "peso");

arsort($ciudad);

shuffle($ciudad);

echo "<h2>"."vector ordenado en forma aleatoria "."</h2>";


while (list($i,$valor)=each($ciudad))

{
echo "posición: " . $i . " - ";

echo "contenido: " . $valor;

echo "<br/>";

}

?>

</body>

</html>
