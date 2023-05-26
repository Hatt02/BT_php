<!-- Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng. -->
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
		
		$soCanTim = rand(0, 100);
		$check = false;

		foreach ($arr as $key => $value) {
			if ($soCanTim == $value) {
				echo "Số cần tìm là:". $soCanTim . " nằm ở vị trí " . $key . " trong mảng.";
				$check = true;
			}
		}

		if (!$check) {
			echo "Số " . $soCanTim . " không có trong mảng";
		}
	?>
</body>
</html>