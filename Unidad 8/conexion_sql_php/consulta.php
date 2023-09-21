<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Consulta a la base de datos</title>
</head>

<body>
<?php
include ("conect.php");

$result = mysqli_query( $conexion, "SELECT * FROM libros");
$result = mysqli_query($conexion, "SELECT * FROM libros WHERE titulos LIKE 'L%'");
$result = mysqli_query($conexion, "SELECT * FROM libros WHERE nro_orden=8");
$result = mysqli_query($conexion, "SELECT * FROM libros WHERE editorial='Alfaguara'");
$result = mysqli_query($conexion, "SELECT * FROM libros ORDER BY precio ");
?>

<table width="758" border = '1'>

<tr>

<td width="93"><b>Nro de orden</b></td>
<td width="192"><b>Titulo</b></td>
<td width="142"><b>Autor</b></td>
<td width="137"><b>Editorial</b></td>
<td width="50"><b>Edici�n</b></td>
<td width="104"><b>Precio</b></td>
</tr>

<?php
while ($row = mysqli_fetch_row($result)){
?>
<tr>

<td><?php echo $row[0]; ?></td>
<td><?php echo $row[1]; ?></td>
<td><?php echo $row[2]; ?></td>
<td><?php echo $row[3]; ?></td>
<td><?php echo $row[4]; ?></td>
<td><?php echo $row[5]; }?></td>
</tr>

</table>


</body>
</html>
