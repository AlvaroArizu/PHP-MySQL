<?php
$entrada = array ("Miguel", "Pepe", "Juan", "Julio", "Pablo");

//quito la primera casilla
$salida = array_shift ($entrada);
//muestro el array/
echo "La función quita: " . $salida . "<br/>";
foreach ($entrada as $actual)
	echo $actual . "<br/>";


//quito la primera casilla, que ahora sería la segunda del array original
$salida = array_shift ($entrada);
echo "La función quita: " . $salida . "<br/>";
//muestro el array
foreach ($entrada as $actual)
	echo $actual . "<br/>";
?>

