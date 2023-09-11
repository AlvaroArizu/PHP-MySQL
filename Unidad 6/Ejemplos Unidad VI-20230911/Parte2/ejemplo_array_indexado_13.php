<!doctype html>
<html>
<head>
	<title>Ejemplo Array</title>
	<meta charset="utf-8"/>
</head>
<body><?php
$v[0] = 'PHP';
$v[1] = 'estamos';
$v[3] = 'aprendiendo, paso a paso';
$size = count($v);
reset($v);
for($i=0;$i<$size;$i++){
$j = key($v);
echo $v[$j].' ';
next($v);
}
?></body>
</html>
