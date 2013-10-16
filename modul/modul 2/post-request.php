<html>
<head>
	<title>Metode POST-REQUEST</title>
</head>

<body>
	<form action=?"<?php $_SERVER['PHP_SELF'];?> method="post">
	Nama 
	<input type="text" name="nama" /> <br/>
	
	<input type="submit" value="OK" />
	</form>
	
	<?php
	if (isset($_REQUEST['nama'])) {
		echo 'Hallo, ' . $_REQUEST['nama'];
	}
	?>
</body>
</html>