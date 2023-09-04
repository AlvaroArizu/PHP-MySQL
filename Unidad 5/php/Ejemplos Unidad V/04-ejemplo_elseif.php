<!doctype html>
<html>
<head>
<title>Ejemplo elseif</title>
<meta charset="utf-8"/>
</head>
<body>
<?php
$valor=rand(1,200);
echo "El valor sorteado es $valor<br>";
if ($valor<=9)
{
  echo "Tiene un dígito";
}
elseif ($valor<100)
{
  echo "Tiene 2 dígitos";
}
else
{
  echo "Tiene 3 dígitos";
}
?>
</body>
</html>
