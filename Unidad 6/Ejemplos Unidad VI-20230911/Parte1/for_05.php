<!doctype html>
<html>
<head>
<title>Ejemplo con Rand</title>
<meta charset="utf-8"/>
</head>
<body>
<?php
$valor=rand(1,100);
$inicio=1;
while($inicio<=$valor)
{
  echo $inicio;
  echo "<br>";
  $inicio++;
}
?>
</body>
</html>
