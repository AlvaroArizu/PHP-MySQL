<!doctype html>
<html>
<head>
	<title>Ejemplo Array</title>
	<meta charset="utf-8"/>
</head>
<body>

<?php

// inicialización del vector

$dias=array("domingo","lunes","martes","miércoles","jueves","viernes","sábado");
$dias_descanso=array("domingo","sábado");


$d = "martes";
echo "<h2>"."vector de días"."</h2>";
while (list($i,$valor)=each($dias))
{
	  echo $valor. " ";
}
echo "<br/>";
echo "<br/>";
if (in_array($d,$dias))
echo "$d existe en el vector dias";
else
echo "$d no existe en el vector dias";

echo "<br/>";
echo "<br/>";
if (in_array($d,$dias_descanso))
echo "$d existe en el vector dias";
else
echo "$d no existe en el vector dias_descanso";
?>

</body>

</html>