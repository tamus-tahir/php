<?php 
// membuat variabel
$prodi = "Informatika";
// cetak variabel
echo $prodi;

echo '<br>';

// penggabungan variabel
$nama_depan = "Tamus";
$nama_belakang = "Tahir";

// tanda (.) digunakan untuk menggabungkan variabel
echo $nama_depan . " " . $nama_belakang;
?>

<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>
	<!-- cetak variabel -->
	<h1>Teknik <?= $prodi; ?></h1>
</body>

</html>