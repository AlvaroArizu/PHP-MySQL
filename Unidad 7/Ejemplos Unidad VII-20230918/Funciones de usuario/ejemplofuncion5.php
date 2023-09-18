<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Funciones</title>
</head>

<body><?php
function agregar($string) {// Paso por valor del parámetro. 
$string .= ' y algo más.';
}
$str = 'Esto es una cadena, ';
agregar($str);
echo $str."<br/>"; // Escribe 'Esto es una cadena, '
agregar(&$str);
echo($str);// Escribe 'Esto es una cadena, y algo más.'
?>
</body>
</html>
