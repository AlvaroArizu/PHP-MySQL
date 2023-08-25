<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo constantes</title>
</head>
<body>

<?php
define("CONSTANTE", "Hola Mundo.");
echo CONSTANTE; // muestra " Hola Mundo."
echo Constante; /* muestra "Constante" y un aviso del sistema (esto último de acuerdo a como estén configurados en el php.ini los errores).*/
?> 

</body>
</html>



