<!-- Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10. -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		echo "Bảng cửu chương 1 - 10: <br>";
		for ($i=1; $i <= 10; $i++) { 
			echo "Bảng " . $i . ": <br>";
			for ($j=1; $j <= 10; $j++) {
				echo "1 x " . $j . " = " . ($i * $j) . "<br>";
			}
			echo "<br>";
		}
	?>
</body>
</html>