<!DOCTYPE HTML PUBLIC "-//w3c//DTD HTML 4.0 Transitional//EN">
<html xlmns="http://www.w3.org/1999/xhtml"xml:lang="en" lang="en">
<head>
	<title>Studi Kasus 1</title>
</head>

<body>
	<br/>
	<br/>
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
	Masukkan Jam: <input type="text" name="jam" />
	<input type="submit" name="submit" />
	</form>
	<br />
<?php
	if(isset($_GET['submit'])){
	$jam = $_GET["jam"];
	function greeting($jam){
	if($jam>=0){
		if($jam<=9) {
			echo "<h1>Selamat pagi</h1>";
		} elseif($jam<=18) {
			echo "<h1>Selamat siang</h1>";
		} elseif($jam<=24) {
			echo "<h1>Selamat malam</h1>";
		} else
			echo "";
	} else
		echo "";
	}
	if(isset($jam)){
		greeting($jam);
	}
}

?>

</body>
</html>