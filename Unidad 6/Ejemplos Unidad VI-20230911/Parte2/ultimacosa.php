<!doctype html>
<html>
<head>
	<title>Ejemplo Array</title>
	<meta charset="utf-8"/>
</head>
<body><?php

//Agrego elementos al array de forma directa:

$tabla = array ("Sauce","Pino","Naranjo");
$tabla[3]="Algarrobo";
$tabla[]="Ceibo";
foreach ($tabla as $actual)
	echo $actual . "<br/>";
	
$estadios_futbol = array("Valencia" => "Mestalla","Independiente" => "Libertadores de América");
$estadios_futbol["Barcelona"]= "Nou Camp";
foreach ($estadios_futbol as $indice=>$actual)
	echo $indice . " -- " . $actual . "<br/>";
?>
</body>
</html>