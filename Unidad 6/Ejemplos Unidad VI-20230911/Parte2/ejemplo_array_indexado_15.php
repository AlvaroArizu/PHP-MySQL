<!doctype html>
<html>
<head>
	<title>Ejemplo Array</title>
	<meta charset="utf-8"/>
</head>
<body><?php
$lugar[0] = 'Londres';
$lugar[15] = 'Paris';
$lugar [5] = 'Valencia';
$lugar [500]  = 'Bilbao';
$lugar[30] = 'Atenas';
while (list($i,$valor)=each($lugar)){
echo "$valor<br/>";
}
?>
</body>
</html>
