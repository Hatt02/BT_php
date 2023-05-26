<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		if (isset($_GET['inputStringStart']) || isset($_GET['inputStringEnd'])) {
			if(empty($_GET['inputStringStart']) || empty($_GET['inputStringEnd'])) {
		        echo "Bạn không được bỏ trống";
		    }else{
		        $chuoi = $_GET['inputStringStart'];
		        $chuoiCon = $_GET['inputStringEnd'];
		        
		        if (strpos($chuoi, $chuoiCon) != false) {
		        	echo "Chuỗi '" . $chuoiCon . "' có nằm trong chuỗi '" . $chuoi . "'";
		        } else {
		        	echo "Chuỗi '" . $chuoiCon . "' không nằm trong chuỗi '" . $chuoi . "'";		        }
		    }
		}
	?>
	<br>
	<a href="cau30.php">Quay lại</a>
</body>
</html>