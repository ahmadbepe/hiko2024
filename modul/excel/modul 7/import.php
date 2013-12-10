<html>
<head>
	<title>Excel Import</title>
</head>
<body>
<?php
 //menggunakan class phpExcelReader
 include "excel_reader2.php";
 
 //koneksi ke db mysql
 mysql_connect("localhost","root","");
 mysql_select_db("mysql");
  
//membaca file excel yang diupload
 $data = new Spreadsheet_Excel_Reader($_FILES['input']['tmp_name']);
 //membaca jumlah baris dari data excel
 $baris = $data->rowcount($sheet_index=0);
 
//nilai awal counter jumlah data yang sukses dan yang gagal diimport
 $sukses = 0;
 $gagal = 0;
 
//import data excel dari baris kedua, karena baris pertama adalah nama kolom
 for ($i=2; $i<=$baris; $i++) {
 //membaca data nip (kolom ke-1)
 $nim = $data->val($i,1);
 //membaca data nama depan (kolom ke-2)
 $nama = $data->val($i,2);
 //membaca data nama belakang (kolom ke-3)
 $alamat=$data->val($i,3);
 
//setelah data dibaca, sisipkan ke dalam tabel pegawai
 $query = "INSERT INTO mahasiswa values ('$nim','$nama','$alamat')";
 $hasil = mysql_query($query);
 }
 //menambah counter jika berhasil atau gagal
 if($hasil) $sukses++;
 else $gagal++;

 //tampilkan report hasil import
 echo "<h3> Proses Import Data Mahasiswa</h3>";
 echo "<p>Jumlah data berhasil diimport : ".$sukses."<br>";
 echo "Jumlah data gagal diimport : ".$gagal."<p>";
 ?>
 <div class = "container" align = "center">
     <form method="post" enctype="multipart/form-data" action="excelintegration.php">
     Download Hasil <br/>
     <input name="upload" type="submit" value="unduh">
 </div>
 

 
</body>
</html>
