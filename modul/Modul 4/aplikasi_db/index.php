<html> 
 
<head> 
	<title>Akses dan Manipulasi Data</title> 
	<style type="text/css"> 
	.even { 
		background: #ddd; 
	} 
	</style>
  
</head> 
 
<body> 
 
<?php 
ini_set('display_errors',1); 
 
// Meng-include file koneksi dan data handler 
require_once './koneksi.php'; 
require_once './data_handler.php'; 
 
// Konstanta nama tabel 
define('MHS', 'mahasiswa'); 
 
// Memanggil fungsi data handler 
data_handler('?m=data'); 
 
?> 
 
</body> 
</html>