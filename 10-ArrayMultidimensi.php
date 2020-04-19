<?php
$data = [
	["luffy", "0411", "Informatika"],
	["sanji", "0821", "Mesin"],
	["namy", "0322", "Elektro"],
	["usop", "0587", "Ekonomi"]
];

// var_dump($data);
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
		<?php foreach ($data as $mhs) : ?>
			<tr>
				<td><?= $i; ?></td>
				<td><?= $mhs[0]; ?></td>
				<td><?= $mhs[1]; ?></td>
				<td><?= $mhs[2]; ?></td>
			</tr>
			<?php $i++; ?>
		<?php endforeach ?>
	</table>
</body>

</html>