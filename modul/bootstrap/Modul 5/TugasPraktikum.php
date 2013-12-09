<html>

<head>
	<title>PENGURUTAN DATA</title>
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

	<?php
	//include file eksternal
	require_once './koneksi.php'; 
	$sql = 'SELECT nim, nama, alamat FROM mahasiswa ORDER BY nim ';
	$res = mysql_query($sql);
	$urut='asc';
	$kecilbesar='asc';
	if($res){
				
		$num = mysql_num_rows($res);
		
		if($num){
			?>
			<div class="tabel">
				
					<table border=1 width=700 cellpadding=4 cellspacing=0>
					<?php
					if(isset($_GET['orderby'])){
						$orderby=$_GET['orderby'];
						$urut=$_GET['urut'];
						$sql="SELECT * FROM  mahasiswa order by $orderby $urut";
						if($urut=='asc'){
							$kecilbesar='desc';
						}else{
							$kecilbesar='asc';
						}
					}
					?>
					<tr>
						<th>#</th>
						<th width=120><a href='TugasPraktikum.php?orderby=nim&urut=<?=$kecilbesar;?>'>NIM</a></th>
						<th width=200><a href='TugasPraktikum.php?orderby=nama&urut=<?=$kecilbesar;?>'>Nama</a></th>
						<th width=200><a href='TugasPraktikum.php?orderby=alamat&urut=<?=$kecilbesar;?>'>Alamat</a></th>
					</tr>
					<?php
					
					
					$i=1;
					$res = mysql_query($sql);
					while($row = mysql_fetch_row($res)){
						$bg = (($i % 2) != 0) ? '' : 'even';
						$id = $row[0]; ?>
						<tr class="<?php echo $bg; ?>">
							<td width="2%"><?php echo $i;?></td>
							<td><?php echo $id;?></td>
							<td><?php echo $row[1];?></td>
							<td><?php echo $row[2];?></td>
						</tr>
						<?php
						$i++;
					}
				?>
				</table>
			</div>
		<?php
		}else{
			echo 'Belum ada data, isi <a href="' . $root.'&amp;act=add">di sini</a>';
		}
	}
	?>


</body>


</html>