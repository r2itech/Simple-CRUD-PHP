<html>
<head>
	<title>Biodata Mahasiswa</title>
</head>
<body>
	<?php
		include "koneksi.php";
		extract($_GET);
		$cari = mysqli_query($con, "SELECT * from identitas where nim='$nim'");
		$data = mysqli_fetch_array($cari);
	echo "<h1>BIODATA MAHASISWA</h1>
	<table border='1'>
		<form name='form1' method='post' action='proses_update.php'>
		<tr>
			<td>NIM</td>	<td><input name=nim type=text value='$data[nim]' readonly></td>
		</tr>
		<tr>
			<td>NAMA</td>	<td><input name=nama type=text value='$data[nama]'></td>
		</tr>
		<tr>
			<td>KELAS</td>	<td><input name=kelas type=text value='$data[kelas]'></td>
		</tr>
		<tr>
			<td colspan=2 align=right>
				<input name=simpan type=submit value=UPDATE>
				<input name=reset type=reset value=RESET>
			</td>
		</tr>
		</form>
	</table>";
	?>
</body>
</html>