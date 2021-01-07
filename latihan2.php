<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mari Belajar Coding</title>
</head>
<body>
	<div align="center">
		<h2 align="center">Data Mahasiswa</h2>
		<table align="center" width="60%" border="1">
			<thead>
				<tr>
					<th>NIM</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Jurusan</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$sql="select * from mahasiswa";
				$query=mysql_query($sql) or die(mysql_error());
				while ($dataMahasiswa=mysql_fetch_array($query)) {
				?>
				<tr>
					<td><?=$dataMahasiswa['nim']?></td>
					<td><?=$dataMahasiswa['nama']?></td>
					<td><?=$dataMahasiswa['alamat']?></td>
					<td><?=$dataMahasiswa['jurusan']?></td>
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>
<?php
	$html = ob_get_contents();
	ob_end_clean();
	$mpdf->WriteHTML(utf8_encode($html));
	$mpdf->Output("dataMahasiswa.pdf" ,'I');
?>
