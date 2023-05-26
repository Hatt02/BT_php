<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
		function CheckString($a, $b) {
			if (strpos($a, $b) == false) {
				echo "Chuỗi " . $b . " không nằm trong chuỗi " . $a;
			} else {
				echo "Chuỗi " . $b . " có nằm trong chuỗi " . $a;
			}
		}


		if (isset($_GET['inputString']) || isset($_GET['inputStringCheck'])) {
			if(empty($_GET['inputString']) || empty($_GET['inputStringCheck'])) {
		        echo "Bạn không được bỏ trống";
		    }else{
		        $chuoi = $_GET['inputString'];
		        $chuoiCon = $_GET['inputStringCheck'];
		        
		        CheckString($chuoi, $chuoiCon);
		    }
		}
	?>

	<br>
	<a href="cau4.php">Quay lại</a>
</body>
</html>