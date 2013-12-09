<html>

<head>
	<title>Halaman USER</title>
	<style type="text/css">
	.inner {
	margin:200px auto;
	padding:20px;
	width:240px;
	border: 1px solid #333;
	}
	</style>
</head>

<body>

<?php
//ini_set('display error', 1);
define('_VALID', 1);

//include file eksternal
require_once('./auth.php');
require_once './koneksi.php'; 
require_once './data_handler.php'; 

define('MHS', 'mahasiswa'); 

init_login();
validate();

data_handler('?m=data');

?> 

<p>
<a href="?m=logout">Logout</a>

</body>


</html>