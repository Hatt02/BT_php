<!-- Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng. -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		$chuoi = "Tran Thi Ha";

		$text = "a";
		$count = 0;
		for ($i = 0; $i < strlen($chuoi); $i++) { 
			if ($text == $chuoi[$i]) {
				$count++;
			}
		}

		echo "Số lần xuất hiện của '" . $text . "' bên trong '" . $chuoi . "' là: " . $count;
	?>
</body>
</html>