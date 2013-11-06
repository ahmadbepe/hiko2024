<html>

<head>
	<title>Hapus Cookie</title>
</head>

<body>

<?php

setcookie('nama_cookie','nilai_cookie');

if (isset($COOKIE['nama_cookie'])) {
	echo 'cookie di-set <br/>';
	
	//Menghapus cookie, dengan masa berlaku 3 jam yang lalu
	setcookie('nama_cookie','',time() -3*3600);
	
}else{
	echo 'unset';
}

?>

<p>
Tekan Refresh (F5);

</body>

</html>