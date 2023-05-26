<!-- Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng. -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		$arr = [];
		for ($i= 0; $i < 10; $i++) { 
			array_push($arr, rand(0, 100));
		}

		echo "Mảng tự sinh là: <br> array[";
		foreach ($arr as $item) {
			echo (string)$item . ", ";
		}

		echo "] <br>";  
		$arrNew = array_unique($arr);   
		echo "Mảng sau khi loại bỏ trùng lặp: <br>";
		echo "array[";
		foreach ($arrNew as $item) {
			echo (string)$item . ", ";
		}

		echo "] <br>";
	?>
</body>
</html>