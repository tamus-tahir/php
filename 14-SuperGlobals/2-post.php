<?php

if (isset($_POST["submit"])) {
	echo $_POST["username"];
}

?>

<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>
	<!-- 
		post digunakan untuk mengolah data
		data yang dikirim tidak akan tampil di url
	-->
	<form action="" method="post">
		<input type="text" name="username">
		<button type="submit" name="submit">Login</button>
	</form>
</body>

</html>