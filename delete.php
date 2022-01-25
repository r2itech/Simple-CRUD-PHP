<?php
	include "koneksi.php";
	
	extract($_GET);
	
	$hapus = mysqli_query($con,"delete from identitas where nim='$nim'");
	if($hapus)
		echo "Data berhasil Dihapus";
	else
		echo "Penghapusan Data Gagal!!!";
?>