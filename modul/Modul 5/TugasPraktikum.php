<html>

<head>
	<title>PENGURUTAN DATA</title>
</head>

<body>

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