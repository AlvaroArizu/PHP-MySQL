<!doctype html>
<html>
<head>
	<title>Ejemplo Array</title>
	<meta charset="utf-8"/>
</head>
<body>
<?php
// inicialización del vector
$letras = range("c","w");
echo "<h2>"."letras generadas"."</h2>";
while (list($i,$valor)=each($letras))
{
      echo $valor . " - ";
}
?>
</body>
</html>

