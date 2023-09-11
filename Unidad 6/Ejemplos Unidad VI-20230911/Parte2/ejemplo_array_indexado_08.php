<!doctype html>
<html>
<head>
	<title>Ejemplo Array</title>
	<meta charset="utf-8"/>
</head>
<body><?php

$arreglo =array("lápiz","goma","hoja","tinta");

reset($arreglo);
for ($i = 0; $i < count($arreglo); $i++) {
  echo key($arreglo) . "=" . current($arreglo) . "<br/>";
  next($arreglo);
}
?> 
</body>
</html>
