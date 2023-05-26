<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		function Fibonacci($n) {
			if ($n < 0) {
		        return - 1;
		    } else if ($n == 0 || $n == 1) {
		        return $n;
		    } else {
		        return fibonacci ( $n - 1 ) + fibonacci ( $n - 2 );
		    }
		}

		if (isset($_GET['inputNumberStart']) || isset($_GET['inputNumberEnd'])) {
			if(empty($_GET['inputNumberStart']) || empty($_GET['inputNumberEnd'])) {
		        echo "Bạn không được bỏ trống";
		    }else{
		        $batDau = $_GET['inputNumberStart'];
		        $ketThuc = $_GET['inputNumberEnd'];
		        
		        for ($i = $batDau; $i <= $ketThuc; $i++) { 
		        	echo "Số Fibonacci thứ " . $i . " là: ";
		        	echo Fibonacci($i);
		        	echo "<br>";
		        }
		    }
		}
	?>
	<br>
	<a href="cau10.php">Quay lại</a>
</body>
</html>