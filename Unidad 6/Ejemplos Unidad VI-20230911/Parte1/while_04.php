<!doctype html>
<html>
<head>
<title>Ejemplo con while</title>
<meta charset="utf-8"/>
</head>
<body><?php
$i = 1;
$suma = 0;

while ( $i < 10) {
$suma = $suma + $i;
$i ++;
}

echo "<strong>Suma total: $suma</strong>";
?>
</body>
</html>