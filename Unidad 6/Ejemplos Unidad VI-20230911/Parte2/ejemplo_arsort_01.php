<!doctype html>
<html>
<head>
  <title>Ejemplo Array</title>
  <meta charset="utf-8"/>
</head>
<body>
<?php
  // inicializacion del vector
  $ciudad = array("par" => "París",
                            "lon" => "Londres",
                            "ate" => "Atenas",
                            "ber" => "Berlín",
                             "lim" => "Lima");
  arsort($ciudad);
  echo "<h2>"."vector de ciudades ordenado en forma descendente";
  echo "<h3>"."<hr>";
  while (list($i,$valor)=each($ciudad))
   {
     echo "posición: " . $i . " - ";
     echo "contenido: " . $valor;
     echo "<br>";
    }
 ?>
</body>
</html> 
