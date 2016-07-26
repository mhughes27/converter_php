<?php 
	$temp_c  = floatval($_GET["celsius"]);
	$temp_f  = floatval($_GET["fahrenheit"]);
	
	$dist_m  = $_GET["miles"];
	$dist_km  = $_GET["kilometers"];
	
	$mass_kg  = $_GET["kilograms"];
	$mass_st  = $_GET["stones"];
	$mass_lb  = $_GET["pounds"];
?>

<?php include("functions.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Unit Converter</title>
</head>
<body>

<h1> Unit Converter </h1>

<div>
<h3>Temperature</h3>
<form method="get" action="result.php">
	<p><input type="text" name="celsius" placeholder="Please enter a value">˚C</p>
	<p>=</p>
	<p><input type="text" name="fahrenheit" placeholder="Please enter a value">˚F</p>
	<button type="submit" value="submit">Convert</button>
</form>
</div>


<div>
<h3>Distance</h3>
<form method="get" action="result.php">
	<p><input type="text" name="kilometers" placeholder="Please enter a value">kilometers</p>
	<p>=</p>
	<p><input type="text" name="miles" placeholder="Please enter a value">miles</p>
	<button type="submit" value="submit">Convert</button>
</form>
</div>


<div>
<h3>Mass/Weight</h3>
<form method="get" action="result.php">
	<p><input type="text" name="kilograms" placeholder="Please enter a value">kilograms</p>
	<p>=</p>
	<p><input type="text" name="pounds" placeholder="Please enter a value">pounds</p>
	<p>=</p>
	<p><input type="text" name="stones" placeholder="Please enter a value">stones</p>
	<button type="submit" value="submit">Convert</button>
</form>
</div>



</body>
</html>