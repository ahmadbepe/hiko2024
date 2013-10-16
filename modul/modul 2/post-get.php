<html>
<head>
	<title>Metode POST-GET</title>
</head>

<body>
	<form action=?"<?php $_SERVER['PHP_SELF'];?> method="post">
	Nama 
	<input type="text" name="nama" /> <br/>
	
	<input type="submit" value="OK" />
	</form>
	
	<?php
	if (isset($_GET['nama'])) {
		echo 'Hallo, ' . $_GET['nama'];
	}
	?>
</body>
</html>