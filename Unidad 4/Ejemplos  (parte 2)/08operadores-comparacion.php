<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo operadores</title>
</head>
<body>

<?php
   $a = 8;
   $b = 3;
   $c = 3;
   echo ($a == $b) && ($c > $b),"<br>"; //Falso, muestra un espacio en blanco. Ambos deben ser verdaderos para ser True.
   echo ($a == $b) || ($b == $c),"<br>";//Verdadero, porque al menos uno lo es muestra un 1.
   echo !($b <= $c),"<br>";
?></body>
</html>