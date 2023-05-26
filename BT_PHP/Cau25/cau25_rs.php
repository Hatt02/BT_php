<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		function PrimeNumber($n) {
			if($n < 2){
		        echo $n . " không phải là số nguyên tố. <br>";
		    }
		    $count = 0;
		    for($j = 2; $j <= sqrt($n); $j++){
		        if($n % $j == 0){
		            $count++;
		        }
		    }

		    if($count == 0){
		        echo $n . " là số nguyên tố. <br>";
		    } else {
		        echo $n . " không phải là số nguyên tố. <br>";
		    }
		}

		if (isset($_GET['inputNumber'])) {
			if(empty($_GET['inputNumber'])) {
		        echo "Bạn không được bỏ trống";
		    }else{
		        $number = $_GET['inputNumber'];
		        
		        PrimeNumber($number);
		    }
		}
	?>
	<br>
	<a href="cau25.php">Quay lại</a>
</body>
</html>