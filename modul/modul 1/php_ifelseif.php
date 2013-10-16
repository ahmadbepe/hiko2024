<!DOCTYPE HTML PUBLIC "-//w3c//DTD HTML 4.0 Transitional//EN">
<html xlmns="http://www.w3.org/1999/xhtml"xml:lang="en" lang="en">
<head>
	<title>Seleksi if-elseif</title>
</head>

<body>

<?php

$a = 10;
$b = 5;

if($a > $b) {
	echo 'a lebih besar dari b';
} elseif ($a==$b) {
	echo 'a sama dengan b';
} else {
	echo 'a kurang dari b';
}
?>

</body>
</html>