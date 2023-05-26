<!-- Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng. -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
		function FindMaxOdd(array $a) {
			$max = $a[0];
			for ($i = 1; $i < count($a); $i++) { 
				if ($max < $a[$i] && $a[$i] % 2 != 0) {
					$max = $a[$i];
				}
			}

			echo "Số lẻ lớn nhất trong mảng là: " . $max;
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
		FindMaxOdd($arr);
	?>
</body>
</html>