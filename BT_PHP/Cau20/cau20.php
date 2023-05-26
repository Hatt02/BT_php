<!-- Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng. -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
		function AddItem(array $a) {
			$dau = "them dau";
			$cuoi = "them cuoi";

			array_unshift($a, $dau);
			array_push($a, $cuoi);

			echo "Mảng mới: <br> array[";
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
		AddItem($arr);
	?>
</body>
</html>