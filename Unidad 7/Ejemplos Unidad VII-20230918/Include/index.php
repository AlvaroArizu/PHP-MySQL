<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Funciones</title>
<style type="text/css">

.estilo {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 14pt;
	font-weight: bold;
	color: #FF0000;
}
#encabezado {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12pt;
	color: #000066;
}</style>
</head>

<body>

<?php include("encabezado.htm"); ?>
<p class='estilo'>
Hoy es:
<?php 
include("fecha.php"); 
?>
</p>

</body>
</html>
