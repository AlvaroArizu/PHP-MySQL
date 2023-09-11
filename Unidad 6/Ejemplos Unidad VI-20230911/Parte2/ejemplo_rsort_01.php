<!doctype html>
<html>
<head>
  <title>Ejemplo Array</title>
  <meta charset="utf-8"/>
</head>
<body>

<?php

  // inicializacion del vector

  $nombres = array("María", "Luis", "Alberto", "Cesar", "Adriana");

  // ordenamiento del Vector descendente
 
 rsort($nombres);

  echo "<h2>"."Vector de nombres ordenados en forma descendente"."</h2>";

  while (list($i,$valor)=each($nombres))

   {
     echo "posición: " . $i . " - ";

     echo "contenido: " . $valor;

     echo "<br/>";
    }

 ?>

</body>

</html>
