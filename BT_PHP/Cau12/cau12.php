<!-- Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ. -->
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
		$phanTuCanChen = 'chen';  
		array_splice( $arr, 3, 0, $phanTuCanChen );   
		echo "Sau khi chèn phần tử '" . $phanTuCanChen ."' thì mảng sẽ như sau: "."<br>";
		echo "array[";
		foreach ($arr as $item) {
			echo (string)$item . ", ";
		}

		echo "] <br>";
	?>
</body>
</html>