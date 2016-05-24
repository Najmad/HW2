<?php
	//echo outputs strings and numbers
	$greeting = "Hello World";
	echo $greeting;
	echo "<hr/>";
	$x = 10;
	echo $x;
	echo "<hr/>";

	$days = ["m", "t", "w", "th", "f"];

	//This outputs arrays
	print_r($days);
	echo "<hr style='border: solid 1px red;'/>";
	echo $days[1];

	function addTen( $x ){
		echo "***";
		echo gettype($x);
		echo "***";
		return $x + 10;
	}

	echo addTen(2);
?>