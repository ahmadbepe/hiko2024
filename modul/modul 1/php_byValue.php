<html>
<head>
<title>Pass by Value</title>
</head>
<body>

<?php

function hasil($i) {
	$i=$i+$i;
}

$i = 5;
hasil ($i);
echo $i;
?>

</body>
</html>