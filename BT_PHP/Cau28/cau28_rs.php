<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		function SumOdd($n) {
			$sum = 0;
			for ($i = 1; $i <= $n; $i++) { 
				$sum += $i;
			}

		    echo "Tổng các số từ 1 đến " . $n . " là: " . $sum;
		}

		if (isset($_GET['inputNumber'])) {
			if(empty($_GET['inputNumber'])) {
		        echo "Bạn không được bỏ trống";
		    }else{
		        $number = $_GET['inputNumber'];
		        
		        SumOdd($number);
		    }
		}
	?>
	<br>
	<a href="cau28.php">Quay lại</a>
</body>
</html>