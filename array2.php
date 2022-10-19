<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>array part 2</title>
</head>
<body>

	<?php
		$text = file("textfile.txt");
		echo "Test Data: <br>";
		echo "Input the number of elements to be stored in the array :3 <br>";
		echo "Input 3 elements in the array : <br>";

		$count_values = array();
		foreach ($text as $a) {

     		@$count_values[$a]++;

		}

		print_r($count_values);
		echo "<br>";
		echo 'Total number of duplicate elements found in the array is : ' . count($count_values);
		echo "<br> <br>";

		
		
		
		$a = file("text.txt");

		$fr = array_fill(0, count($a), 0);
		$check = -1;
		for($i = 0; $i < count($a); $i++) {
			$count = 1;
			for($j = $i+1; $j < count($a); $j++) {
				if($a[$i] == $a[$j]) {
					$count++;
					$fr[$j] = $check;
				}
			}
			if($fr[$i] != $check)
			$fr[$i] =$count;
		}

		echo "Test Data: <br>";
		echo "Input the number of elements to be stored in the array :3 <br>";
		echo("Input 3 elements in the array : <br>");
		foreach( $a as $b ) {
			echo $b."  ";
		}

		echo (" <br>Expected Output : <br>frequency of given array elements: <br>" );
		for( $i = 0; $i < count($fr); $i++) {
			if($fr[$i] != $check) {
				echo( $a[$i] ." occurs " );
				echo( $fr[$i]." times. <br>");
				echo(" ");
			}
		}
		return 0;
		echo "<br> <br>";
	?>


</body>
</html>