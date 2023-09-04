<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Metodo Get</title>
</head>

<body>

  <?php
 //Preguntamos si se obtuvieron datos por el método “get”

	if($_GET['nombre']=='juan') {  //Evaluamos si la variable “nombre” enviada tiene el valor “juan”.
?><ul>
  <li>Nombre: Juan</li>
  <li>Apellido: Pérez</li>
  <li>Edad: 24</li>
  </ul>
  
  
  <?php
	} elseif ($_GET['nombre']=='pepe') { //Evaluamos si la variable “nombre” enviada  tiene el valor “pepe”.

?>
<ul>
  <li>Nombre: Pepe</li>
  <li>Apellido: González</li>
 <li>Edad: 30</li>
</ul>
  
<?php
}
?>

</body>
</html>
