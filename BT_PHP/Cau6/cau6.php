<!-- Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần. -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
		function SortArray(array $a) {
			sort($a);

			echo "Mảng sau khi sắp xếp tăng dần là: <br> array[";
			foreach ($a as $item) {
				echo (string)$item . ", ";
			}

			echo "] <br>";
		}

		$arr = [];
		for ($i= 0; $i < 10; $i++) { 
			array_push($arr, rand(0, 100));
		}

		echo "Mảng tự sinh là: <br> array[";
		foreach ($arr as $item) {
			echo (string)$item . ", ";
		}

		echo "] <br>";
		SortArray($arr);
	?>
</body>
</html>