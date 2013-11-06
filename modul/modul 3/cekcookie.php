<html>

<head>
	<title>Cek Dukungan Cookie</title>
</head>

<?php

if(isset($_GET['q']) && ($_GET ['q'] ==1)) {
	if(isset($COOKIE['tets'])) {
		echo 'support';
	} else {
		echo 'tidak support';
	}
	
} else {
	setcookie('test','value');
	$_self = $_SERVER['PHP SELF'];
	
	//Redireksi ke current script
	header('Location:'. $self . '?q=1');
	exit;
}
?>

<p>
Tekan Refresh (F5);

</body>
</html>