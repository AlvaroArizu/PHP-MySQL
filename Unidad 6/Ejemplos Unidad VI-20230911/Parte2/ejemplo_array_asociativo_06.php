<!doctype html>
<html>
<head>
  <title>Ejemplo Array</title>
  <meta charset="utf-8"/>
</head>
<body>
<?php

  // inicialización del vector
  $ciudad = array("par" => "París",
                            "lon" => "Londres",
                            "ate" => "Atenas",
                            "ber" => "Berlín",
                            "lim" => "Lima");

echo "<h2>"."Vector de ciudades"."</h2>";
  while (list($i,$valor)=each($ciudad))
   {
     echo "posición: " . $i . " - ";
     echo "contenido: " . $valor;
     echo "</br>";
    }
 ?>
</body>
</html>
