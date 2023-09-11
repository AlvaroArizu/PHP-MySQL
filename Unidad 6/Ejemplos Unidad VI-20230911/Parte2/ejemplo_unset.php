<!doctype html>
<html>
<head>
	<title>Ejemplo Array</title>
	<meta charset="utf-8"/>
</head>
<body><?php
$estadios_futbol = array("Barcelona"=> "Nou Camp","Real Madrid" => "Santiago Bernabeu","Valencia" => "Mestalla","Independiente" => "Libertadores de América");

//mostramos los estadios
foreach ($estadios_futbol as $indice=>$actual)
	echo $indice . " -- " . $actual . "<br/>";


//eliminamos el estadio asociado al Real Madrid, ya que lo que juego hoy en día no es futbol!
unset ($estadios_futbol["Real Madrid"]);

//mostramos los estadios otra vez
foreach ($estadios_futbol as $indice=>$actual)
	echo $indice . " -- " . $actual . "<br/>";
	
//eliminamos el array completo
unset ($estadios_futbol);

//volvemos a generar el array, ahora con un solo elemento
$estadios_futbol = array("Barcelona"=> "Nou Camp");



//mostramos los estadios otra vez
foreach ($estadios_futbol as $indice=>$actual)
	echo $indice . " -- " . $actual . "<br/>";	
	
?>
</body>
</html>