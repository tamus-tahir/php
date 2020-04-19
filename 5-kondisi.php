<?php
$i = 10;
if ($i > 5) {
	echo "Luffy";
} else {
	echo "Zoro";
}
?>


<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>
	<?php if ($i > 5) : ?>
		<p><?= "Luffy"; ?></p>
	<?php else : ?>
		<p><?= "Zoro" ?></p>
	<?php endif; ?>
</body>

</html>