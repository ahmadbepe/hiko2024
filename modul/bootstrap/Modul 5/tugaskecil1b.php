<html>
<head> 
	<title>Pencarian Data</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">	
</head> 
 
<body> 
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  <ul class="nav nav-pills">
  <li><a href="\bootstrap"><b>Home</b></a></li>
  <li><a href="\bootstrap/profil"><b>Profile</b></a></li>
  <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Tugas</b> <b class="caret"></b></a>
        <ul class="dropdown-menu">
			<li><a href="\bootstrap/modul 4">Modul 4</a></li>
			<li class="divider"></li>
			<li><a href="\bootstrap/modul 4/aplikasi_db">Aplikasi db</a></li>
			<li><a href="\bootstrap/modul 4/StudiKasus">Studi Kasus</a></li>
			<li><a href="\bootstrap/modul 4/TugasPraktikum">Tugas Praktikum</a></li>
			<li class="divider"></li>
			<li><a href="\bootstrap/modul 5">Modul 5</a></li>
			<li class="divider"></li>
			<li><a href="\bootstrap/modul 5/LimitasiData.php">Limitasi Data</a></li>
			<li><a href="\bootstrap/modul 5/PagingData.php">Paging Data</a></li>
			<li><a href="\bootstrap/modul 5/PencarianData.php">Pencarian Data</a></li>
			<li><a href="\bootstrap/modul 5/StudiKasus.php">Studi Kasus</a></li>
			<li><a href="\bootstrap/modul 5/tugaskecil1a.php">Tugas Kecil 1a</a></li>
			<li><a href="\bootstrap/modul 5/tugaskecil1b.php">Tugas Kecil 1b</a></li>
			<li><a href="\bootstrap/modul 5/tugaskecil2.php">Tugas Kecil 2</a></li>
			<li><a href="\bootstrap/modul 5/TugasPraktikum.php">Tugas Praktikum</a></li>
        </ul>
      </li>
	</ul>
<?php $kata = "masukkan nama";?>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="get"> 
	Nama <input type="text" name="nama" value="<?php echo isset($_GET['nama']) ? $_GET['nama'] : '';?>" size=40 /> 
	<input type="submit" value="CARI" /> 
</form> 
 
<?php 
if(isset($_GET['nama'])){ 
	require_once './koneksi.php'; 
 
	// Kata kunci pencarian 
	$key = $_GET['nama']; 
 
	// Variabel $sql berisi pernyataan SQL pencarian menggunakan LIKE
	$sql = "SELECT * FROM mahasiswa WHERE nama  LIKE '%$key%' OR alamat LIKE '%$key%'"; 
 
	$res = mysql_query($sql); 
 
	if ($res) { 
		$num = mysql_num_rows($res); 
		if ($num) { 
			echo 'Ditemukan ' . $num . ' row(s)'; ?> 
 
			<table border=1 cellspacing=1 cellpadding=5> 
				<tr> 
					<th>#</th> 
					<th width=100>NIM</th> 
					<th width=150>Nama</th> 
					<th>Alamat</th> 
				</tr> 
				<?php 
				$i = 1; 
				while ($row = mysql_fetch_row($res)) { ?> 
					<tr> 
						<td> 
							<?php echo $i;?> 
						</td> 
						<td> 
							<?php echo $row[0];?> 
						</td> 
						<td> 
							<?php echo $row[1];?> 
						</td> 
						<td> 
							<?php echo $row[2];?>
						</td> 
					</tr> 
					<?php 
					$i++; 
				} 
				?> 
			</table> 
			<?php 
		} else { 
			echo 'Data Tidak Ditemukan'; 
		} 
	} 
 
} else { 
	echo 'Masukkan kata kunci pencarian'; 
} 
 
?> 
 
</body> 
</html> 