<?php 

$data = ["andi", "0411", "Informatika"]

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1" cellspacing="0" cellpadding="10">
		<tr>
			<th>Nama</th>
			<th>NIM</th>
			<th>Prodi</th>
		</tr>
		<tr>
			<td><?= $data[0]; ?></td>
			<td><?= $data[1]; ?></td>
			<td><?= $data[2]; ?></td>
		</tr>
	</table>
</body>
</html>