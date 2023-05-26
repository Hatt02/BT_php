<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		function PerfectSquare($start, $end) {
			for ($i = $start; $i <= $end; $i++) { 
				$x = sqrt($i);
    			if ((int)$x*(int)$x == $i) {
    				echo $i . " là số chính phương <br>";
    			}
			}
		}

		if (isset($_GET['inputNumberStart']) || isset($_GET['inputNumberEnd'])) {
			if(empty($_GET['inputNumberStart']) || empty($_GET['inputNumberEnd'])) {
		        echo "Bạn không được bỏ trống";
		    }else{
		        $batDau = $_GET['inputNumberStart'];
		        $ketThuc = $_GET['inputNumberEnd'];
		        
		        PerfectSquare($batDau, $ketThuc);
		    }
		}
	?>
	<br>
	<a href="cau29.php">Quay lại</a>
</body>
</html>