<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Arrays Exercises 2</title>
</head>
<body>
	<?php 
	$text = file("arr.txt"); 
  
	function oddCmp($text) { 
    	return ($text & 1); 
	} 
	function evenCmp($text) { 
	    return !($text & 1); 
	} 
  
	echo "Test Data :<br>";
	echo "Input the number of elements to be stored in the array :5 <br><br>";
	echo "Input 5 elements in the array :<br>";
	$odd = array_filter($text, "oddCmp"); 
	$even = array_filter($text, "evenCmp"); 
	$odd = array_values(array_filter($odd)); 
	$even = array_values(array_filter($even)); 

	echo "Expected Output : <br>";
	print"<br>The Odd elements are : <br>"; 
	print_r($odd); 

	print"<br>The Even elements are : <br>"; 
	print_r($even); 
	?>
</body>
</html>