<?php
	if (isset($_GET['inputNumber'])) {
		if(empty($_GET['inputNumber'])) {
	        echo "Bạn không được bỏ trống";
	    }else{
	        $number = $_GET['inputNumber'];
	        if ($number % 2 == 0) {
				echo "<p>Số " . $number . " là số chẵn</p>";
			} else {
				echo "<p>Số " . $number . " không là số chẵn</p>";
			}
	    }
	}