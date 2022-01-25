<?php
include "koneksi.php";

extract($_POST);

$SIMPAN = mysqli_query($con, "insert into identitas values('$nim','$nama','$kelas')");
if($SIMPAN)
	echo "<script>alert('Data Berhasil Disimpan')</script>
	<a href='index.php'>Kembali ke Halaman Utama</a>";
else
	echo "<script>alert('Penyimpanan Data Gagal')</script>";
?>