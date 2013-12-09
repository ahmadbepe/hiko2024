<?php

session_start();

defined('_VALID') or die ('not_allowed');

function init_login() {
	//Simulasi data account nama dan password
	$nama = 'user';
	$pass = 'user';
	$admin = 'admin';
	$passadmin ='admin';
	
	if(isset($_POST['nama'])&& isset($_POST['pass'])) {
		$n = trim($_POST['nama']);
		$p = trim($_POST['pass']);
		
		if(($n===$nama) && ($p===$pass)) {
		$_SESSION['nlogin']=$n;
		$_SESSION['time'] = time();
		
		//redireksi
		?>
		<script type="text/javascript">
		document.location.href="./";
		</script>
		<?php
		}else if(($n===$admin) && ($p===$passadmin)) {
		$_SESSION['nlogin']=$n;
		$_SESSION['time'] = time();
		
		//redireksi
		?>
		<script type="text/javascript">
		document.location.href="./halamanadmin.php";
		</script>
		<?php
		
		}else{
			echo 'Maaf, Nama atau Password yang anda masukkan Tidak Sesuai';
			return false;
		}
	}
}

function validate() {
	if(!isset($_SESSION['nlogin']) || !isset($_SESSION['time'])) { ?>
	<div class="inner">
	<form action = "" method="post">
	<table border=0 cellpadding=5>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" /></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="pass" /></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="Submit" name="LOGIN" /></td>
		</tr>
	</table>
	</form>
	</div>
	<?php
	exit;
	}
	
	if(isset($_GET['m']) && $_GET['m'] == 'logout') {
	//Hapus Session
	if(isset($_SESSION['nlogin'])) {
		unset($_SESSION['nlogin']);
	}
	if(isset($_SESSION['time'])) {
		unset($_SESSION['time']);
	}
	
	//redireksi halaman
	?>
	<script type="text/javascript">
	document.location.href="./";
	</script>
	<?php
	}
}
?>