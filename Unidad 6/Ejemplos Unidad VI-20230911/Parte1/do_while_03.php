<!doctype html>
<html>
<head>
<title>Ejemplo con do while</title>
<meta charset="utf-8"/>
</head>
<body><?php
$i=1;
do 
  {
  echo "$i<br>";
  $i++;
  }

while ($i <=10);
//Igual que el anterior pero $i arranca desde 1, entonces el bucle se ejecuta 10 veces
?>
</body>
</html>