<!-- Viết chương trình PHP để tìm số lớn thứ hai trong một mảng. -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
		function FindSecondMax(array $a) {
			rsort($a);

			echo "Số lớn thứ 2 trong mảng là " . $a[1];
			
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
		FindSecondMax($arr);
	?>
</body>
</html>