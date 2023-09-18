<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Funciones</title>
</head>

<body><?php
function cafe($temp,$tipo="con leche") {
return "Haciendo café $tipo $temp.<br/>";
}
echo cafe("caliente"); //Escribe: 'Haciendo café con leche caliente'
?>
</body>
</html>