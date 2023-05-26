<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		function PrimeNumber($start, $end) {
			for ($i = $start; $i <= $end; $i++) { 
				if($i < 2){
			        continue;
			    }
			    $count = 0;
			    for($j = 2; $j <= sqrt($i); $j++){
			        if($i % $j == 0){
			            $count++;
			        }
			    }

			    if($count == 0){
			        echo $i . " là số nguyên tố. <br>";
			    }
			}
		}

		if (isset($_GET['inputNumberStart']) || isset($_GET['inputNumberEnd'])) {
			if(empty($_GET['inputNumberStart']) || empty($_GET['inputNumberEnd'])) {
		        echo "Bạn không được bỏ trống";
		    }else{
		        $batDau = $_GET['inputNumberStart'];
		        $ketThuc = $_GET['inputNumberEnd'];
		        
		        PrimeNumber($batDau, $ketThuc);
		    }
		}
	?>
	<br>
	<a href="cau8.php">Quay lại</a>
</body>
</html>