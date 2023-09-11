<!doctype html>
<html>
<head>
	<title>Ejemplo Array</title>
	<meta charset="utf-8"/>
</head>
<body><?php 

  $mis_barrios = array( 
		'norte'=>'Vicente Lopez', 
        'sur'=>'Avellaneda', 
        'oeste'=>'Castelar'); 

  echo count($mis_barrios); //Muestra 3
  echo "<br/>"; // Salto de línea
  echo $mis_barrios['sur']; //Muestra Avellaneda
		
		
?>
</body>
</html>