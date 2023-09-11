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

reset($v);

do{

$i = key($v);

echo $v[$i].' ';

}while(next($v));

?>
</body>
</html>