<!doctype html>
<html>
<head>
  <title>Ejemplo Array</title>
  <meta charset="utf-8"/>
</head>
<body>
<?php
  // inicialización del vector
     $nombre[10] = "marcelo";
     $nombre[20] = "alicia";
     $nombre[15] = "alejandra";
     $nombre[35] = "mario";
     $nombre[12] = "alberto";
  // impresión del vector
  reset($nombre); 
  echo ("<h2>" . "vector de nombres"."</h2>");
  do
    {
     // buscar posición especificada
     $i = key($nombre);
     // buscar contenido en esa posición
     $valor = current($nombre);
     echo ("posición: " . $i . " - ");
     echo ("contenido: " . $valor);
     echo ("<br/>");
    }
    while (next($nombre));
 ?>
</body>
</html>
