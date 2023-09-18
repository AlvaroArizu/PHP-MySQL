<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Funciones</title>
<style type="text/css">

body {
	background-color: #F65863;
}
</style>
</head>

<body>

<?php
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$destino = "mi_nombre@mi_mail.com";

mail ($destino, $asunto, $mensaje); //en el localhost la función mail da error, para probarlo deberíamos subirlo a un servidor
?>
<h2>Muchas gracias por su mensaje</h2>
<h4>El asunto ingresado fue: <?php echo $asunto; ?></h4>
<h4>El mensaje ingresado fue: <?php echo $mensaje; ?></h4>


</body>
</html>
