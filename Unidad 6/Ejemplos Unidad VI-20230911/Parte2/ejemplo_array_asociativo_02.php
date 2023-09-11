<!doctype html>
<html>
<head>
	<title>Ejemplo Array</title>
	<meta charset="utf-8"/>
</head>
<body><?php

 $indice = 'favorito';
 $color = array($indice => 'violeta');
 
 // utilizo como índice una variable
 echo $color[$indice];
 
 echo "<br/>";
 
 // utilizo como índice directamente el valor de la variable
 echo $color['favorito'];
 
?>
</body>
</html>
