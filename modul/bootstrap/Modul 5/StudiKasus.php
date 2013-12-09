<html> 
<head> 
	<title>STUDI KASUS</title>
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
	
	<form method="post" action="" name="frm_select"> 
	Tampilkan 
		<select name="row_page" onchange="document.forms.frm_select.submit();"  > 
			<option>--pilih--</option> 
			<option value="5">5</option> 
			<option value="10">10</option> 
			<option value="20">20</option> 
			<option value="50">50</option> 
			<option value="100">100</option> 
		</select> baris per halaman. 
	</form>

	<?php
	
	
	if (isset($_POST['row_page']) && $_POST['row_page']) {
	$baris =$_POST['row_page'];
	require_once './koneksi.php';
	//***************** Setup paging 
	$sql = 'SELECT * FROM mahasiswa'; 
 
	$self = $_SERVER['PHP_SELF']; 
	$page = isset($_GET['page']) ? $_GET['page'] : 0; 
 
	// Jumlah link counter, misal (prev 1 2 3 next) = 3 
	$link_num   = 5;
	// Jumlah record per halaman 
	$record_num = $baris;
	// Item pertama yang akan ditampilkan 
	$offset     = $page ? ($page - 1) * $record_num : 0; 
 
	$total_rows = mysql_num_rows(mysql_query($sql)); 
	$query      = $sql. ' LIMIT ' . $offset . ', ' . $record_num; 
	$result     = mysql_query($query); 
	$max_page   = ceil($total_rows/$record_num); 
 
	// Reset jika page tidak sesuai 
	if ($page > $max_page || $page <= 0) { 
		$page = 1; 
	} 
 
	//***************** Generate paging 
	$paging = ''; 
	if($max_page > 1) { 
		//*** Render link previous 
		if ($page > 1) { 
			$paging .= ' <a href="'.$self.'?page='.($page-1).'">previous</a>'; 
		} else { 
			$paging .= ' previous '; 
		} 
 
		//*** Render link counter halaman 
		for ($counter = 1; $counter <= $max_page; $counter += $link_num) { 
			if ($page >= $counter) { 
				$start = $counter; 
			} 
		} 
		if ($max_page > $link_num) { 
			$end = $start + $link_num; 
			if ($end > $max_page) { 
				$end = $max_page + 1; 
			} 
		} else { 
			$end = $max_page; 
		} 
		for ($counter = $start; $counter < $end; $counter++) { 
			if ($counter == $page) { 
				$paging .= $counter; 
			} else { 
				$paging .= ' <a href="'.$self.'?page='.$counter.'">' .$counter.'</a> '; 
			} 
		} 
 
		//*** Render link next 
		if ($page < $max_page) { 
			$paging.= ' <a href="' .$self.'?page='.($page+1).'">next</a> '; 
		} else { 
			$paging.= ' next ';
		} 
 
	} 
	?> 
 
	<table border=1 cellspacing=1 cellpadding=5> 
		<tr> 
			<th>#</th> 
			<th width=100>NIM</th> 
			<th width=150>Nama</th> 
			<th>Alamat</th> 
		</tr> 
		<?php 
		$i = 1; 
		while ($row = mysql_fetch_row($result)) { ?> 
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

	//***************** Tampilkan navigasi 
	echo $paging; 
 }
	?> 
</body> 
</html> 