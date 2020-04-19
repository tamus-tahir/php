<?php
$data = [
	["nama" => "Luffy", "nim" => "0411", "prodi" => "Informatika"],
	["nama" => "Sanji", "nim" => "0821", "prodi" => "Mesin"],
	["nama" => "Usop", "nim" => "0981", "prodi" => "Elektro"]
];
?>

<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>

	<table border="1" cellspacing="0" cellpadding="10">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>NIM</th>
			<th>Prodi</th>
		</tr>
		<?php $i = 1; ?>
		<?php foreach ($data as $d) : ?>
			<tr>
				<td><?= $i; ?></td>
				<td><?= $d["nama"]; ?></td>
				<td><?= $d["nim"]; ?></td>
				<td><?= $d["prodi"]; ?></td>
			</tr>
			<?php $i++; ?>
		<?php endforeach ?>
	</table>

</body>

</html>