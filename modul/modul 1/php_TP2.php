<html>
<head>
	<title>Studi Kasus 2</title>
</head>

<body>
	<br/>
	<br/>
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
	cell: <input type="text" name="cell" />
	kolom: <input type="text" name="kolom" />
	<br/>
	<input type="submit" name="submit" />
	</form>
	<br />
<?php
if(isset($_GET['submit'])){
	$cell = $_GET["cell"];
	$kolom = $_GET["kolom"];
	function generate($cell, $kolom){
		echo "<table border='2' cellpadding='20'>";
		do{
			echo "<tr>";
				for($k=0;$k<$cell;$k++){
					if($k<$kolom){
						echo "<td> </td>";
					}
				}
			echo"</tr>";
			$cell=$cell-$kolom;	
			}
		while($cell>0);
		echo"</table>";
	}
	if(isset($cell) AND isset($kolom)){
		generate($cell,$kolom);
	}
}
?>


</body>
</html>