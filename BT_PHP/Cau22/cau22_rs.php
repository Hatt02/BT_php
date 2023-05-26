<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		function USCLN($a, $b) {
		    if ($b == 0) return $a;
		    return USCLN($b, $a % $b);
		}

		function BSCNN($a, $b) {
		    return ($a * $b) / USCLN($a, $b);
		}

		if (isset($_GET['inputNumberStart']) || isset($_GET['inputNumberEnd'])) {
			if(empty($_GET['inputNumberStart']) || empty($_GET['inputNumberEnd'])) {
		        echo "Bạn không được bỏ trống";
		    }else{
		        $batDau = $_GET['inputNumberStart'];
		        $ketThuc = $_GET['inputNumberEnd'];
		        
		        echo "UCLN của " . $batDau . " và " . $ketThuc . " là: " . USCLN($batDau, $ketThuc);
		        echo "<br> BCNN của " . $batDau . " và " . $ketThuc . " là: " . BSCNN($batDau, $ketThuc);
		    }
		}
	?>
	<br>
	<a href="cau22.php">Quay lại</a>
</body>
</html>