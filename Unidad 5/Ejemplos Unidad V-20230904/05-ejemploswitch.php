<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ejemplo Switch</title>
</head>

<body>
<?php
$examen="Bueno";
switch($examen) {
case "Excelente": echo "Su nota fue 10. ";
			   break;
case "Muy bien": echo "Su nota fue 8 o 9. ";
			   break;
case "Bueno": echo "Su nota fue 6 o 7";
		         break;
case "Regular": echo "Su nota fue 4 o 5";
			break;
default: echo "Su nota fue menor o igual a 3. ";
}
?>

</body>
</html>
