<!-- Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng. -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
		function FindMax($a) {
			echo "Phần tử lớn nhấn trong mảng: " . max($a);
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
		FindMax($arr);
	?>
</body>
</html>