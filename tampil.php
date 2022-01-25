
</body>
	<table border="1">
		<tr align="center">
			<td>NIM</td>
			<td>NAMA</td>
			<td>KELAS</td>
			<td colspan="2">AKSI</td>
		</tr>
		<?php
			include "koneksi.php";
			$query = mysqli_query($con, "select * from identitas");
			while($data = mysqli_fetch_array($query, MYSQLI_BOTH))
			{
				echo "<tr align=center>
						<td> $data[nim] </td>
						<td> $data[nama] </td>
						<td> $data[kelas] </td>
						<td> <a href=update.php?nim=$data[nim]> EDIT </a> </td>
						<td> <a href=delete.php?nim=$data[nim]> HAPUS </a> </td>
					  </tr>";
			}
		?>
	</table>