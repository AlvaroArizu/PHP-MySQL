<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Funciones</title>
</head>

<body>


<?php
function iva($base,$porcentaje=21){//creo la funcion iva y declaro 21 como valor por defecto de $porcentaje
   return $base * $porcentaje /100;
}

echo "El iva 21% de 1.000 es:  " .iva(1000) . "<br/>";// como no paso el valor del iva toma el que definì por defecto (21)
echo "El iva 10.5% de 1.000 es:  " .iva(1000,10.5) . "<br/>";
echo "El iva excento de 1.000 es:  " .iva(10,0) . "<br/>";
?>




</body>
</html>
