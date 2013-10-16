<!DOCTYPE HTML PUBLIC "-//w3c//DTD HTML 4.0 Transitional//EN">
<html xlmns="http://www.w3.org/1999/xhtml"xml:lang="en" lang="en">
<head>
	<title>Casting Tipe</title>
</head>

<body>

<?php

$str = '123abc';

//Casting nilai variabel $str ke integer
$bil = (int) $str; //$bil = 123

echo gettype($str);
//Output: string

echo gettype($bil);
//Output: integer

?>

</body>
</html>