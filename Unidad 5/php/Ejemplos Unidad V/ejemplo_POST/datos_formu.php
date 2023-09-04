<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Paso de datos con variables establecidas por el usuario</title>
<style type="text/css">

body {
	background-color: #CCCCCC;
}
.Estilo1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.Estilo3 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
.Estilo6 {font-size: 12px; font-weight: bold; }

</style>
</head>

<body>

<h2>DATOS DEL USUARIO <h2>
<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$mail = $_POST['mail'];
$domicilio = $_POST['domicilio'];
$telefono = $_POST['telefono'];
$ciudad = $_POST['ciudad'];
$pais = $_POST['pais'];

?>
<ul>
  <li>Su nombre es: <?php echo $nombre; ?></li>
  <li>Su apellido es: <?php echo $apellido; ?></li>
  <li>Su edad es: <?php echo $edad; ?></li>
  <li>Su mail es: <?php echo $mail; ?></li>
  <li>Su dirección es: <?php echo $direccion; ?></li>
  <li>Su ciudad es: <?php echo $ciudad; ?></li>
  <li>Su país es: <?php echo $pais; ?></li>
  <li>Su teléfono es: <?php echo $telefono; ?></li>
</ul>

</body>
</html>
