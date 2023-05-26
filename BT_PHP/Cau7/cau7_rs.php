<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		function Factorial($a) {
			$result = 1;
			for ($i = 1; $i <= $a; $i++) { 
				$result *= $i;
			}

			echo "Giai thừa của " . $a . " là: " . $result;
		}

		if (isset($_GET['inputNumber'])) {
			if(empty($_GET['inputNumber'])) {
		        echo "Bạn không được bỏ trống";
		    }else{
		        $number = $_GET['inputNumber'];

		        if ($number <= 0) {
		        	echo "Bạn phải nhập một số NGUYÊN DƯƠNG!";
		        } else {
		        	Factorial($number);
		        }
		        
		    }
		}
	?>
	<br>
	<a href="cau7.php">Quay lại</a>
</body>
</html>