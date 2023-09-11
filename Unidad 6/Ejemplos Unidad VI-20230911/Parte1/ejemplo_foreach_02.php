<!doctype html>
<html>
<head>
	<title>Ejemplo Array</title>
	<meta charset="utf-8"/>
</head>
<body><?php

/* foreach ejemplo 2: valor (con clave impresa para ilustrar) */
$a = array(1, 2, 3, 17);

$i = 0; /* solo para propositos demostrativos */

foreach($a as $v) {
   print "\$a[$i] => $v.\n";
   $i++;
}

?></body>
</html>
