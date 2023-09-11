<!doctype html>
<html>
<head>
<title>Ejemplo con for</title>
<meta charset="utf-8"/>
</head>
<body><?php
$numero = 5;
echo "Factorial de $numero = ";
$factorial = 1;
for ( $i = $numero ; $i >= 1 ; $i --) {
	$factorial *= $i;
	echo "$i";
	if ($i == 1)
	echo " = ";
	else
	echo " x ";
}
echo "$factorial";
?>
</body>
</html>
