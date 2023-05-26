<!-- Viết chương trình PHP để tính tổng của các số trong một mảng. -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
		function SumArray(array $a) {
			$tong = 0;
			foreach($a as $item) {
				$tong += $item;
			}

			echo "Tổng mảng đã tạo là: " . $tong;
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
		SumArray($arr);
	?>
</body>
</html>