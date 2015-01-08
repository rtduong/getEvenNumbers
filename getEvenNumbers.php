<html>
<body>

<?php 
	$name = $_GET['number'];
	for ($i = 2; $i <= $name; $i++) {
		if ($i % 2 === 0) {
			echo $i;
		}
	}
?>

</body>
</html>