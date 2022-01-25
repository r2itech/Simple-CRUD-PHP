<html>
<head>
	<title>Biodata Mahasiswa</title>
</head>
<body>
	<h1>BIODATA MAHASISWA</h1>
	<table border="1">
		<form name="form1" method="post" action="simpan.php">
		<tr>
			<td>NIM</td>	<td><input name="nim" type="text"></td>
		</tr>
		<tr>
			<td>NAMA</td>	<td><input name="nama" type="text"></td>
		</tr>
		<tr>
			<td>KELAS</td>	<td><input name="kelas" type="text"></td>
		</tr>
		<tr>
			<td colspan="2" align="right">
				<input name="simpan" type="submit" value="SIMPAN">
				<input name="reset" type="reset" value="RESET">
			</td>
		</tr>
		</form>
	</table>
	<br>
	<?php
		include 'tampil.php';
	?>
</body>
</html>