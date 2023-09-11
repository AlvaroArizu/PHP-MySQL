<!doctype html>
<html>
<head>
	<title>Ejemplo Array</title>
	<meta charset="utf-8"/>
</head>
<body><?php
/* foreach ejemplo 3: clave y valor */
$a = array(
   "uno" => 1,
   "dos" => 2,
   "tres" => 3,
   "diecisiete" => 17
);

foreach($a as $k => $v) {
   print "\$a[$k] => $v.\n";
}

?></body>
</html>
