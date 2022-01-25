<?php
	include "koneksi.php";
	extract($_POST);
	$simpan_update = mysqli_query($con, "update identitas set nama='$nama', kelas='$kelas' where nim='$nim'");
	if($simpan_update)
		echo "<center>
			  <b>Data Berhasil DiUpdate :*";
	else
		echo "<center>Memperbarui data gagal!!!";
?>