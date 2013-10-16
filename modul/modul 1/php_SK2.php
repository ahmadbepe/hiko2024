<html>
<head>
	<title>Studi Kasus 2</title>
</head>

<body>
	<br/>
	<br/>
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
	baris: <input type="text" name="baris" />
	kolom: <input type="text" name="kolom" />
	<br/>
	<input type="submit" name="submit" />
	</form>
	<br />
<?php
if(isset($_GET['submit'])){
	$baris = $_GET["baris"];
	$kolom = $_GET["kolom"];
	function generate($baris, $kolom){
		echo "<table border='2' cellpadding='20'>";
		for ($b=0; $b<$baris; $b++) {
			echo "<tr>";
			for ($k=0; $k<$kolom; $k++) {
				echo "<td> </td>";
			}
			echo"</tr>";
		}
		echo"</table>";
	}
	if(isset($baris) AND isset($kolom)){
		generate($baris,$kolom);
	}
}
?>

</body>
</html>