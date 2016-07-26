<?php 
	$temp_c  = floatval($_GET["celsius"]);
	$temp_f  = floatval($_GET["fahrenheit"]);
	
	$dist_m  = $_GET["miles"];
	$dist_km  = $_GET["kilometers"];
?>
<?php
	
	if ($_GET["kilograms"] != "") {
		$mass_kg  = $_GET["kilograms"];
		$stones = Mass::kg_to_st($mass_kg);
		$pounds = Mass::kg_to_lb($mass_kg);		
	}
	elseif ($_GET["stones"] != "") {
		$mass_st  = $_GET["stones"];
		$pounds = Mass::st_to_lb($mass_st);
		$kilograms = Mass::st_to_kg($mass_st);
	}
	elseif ($_GET["pounds"] != "") {
		$mass_lb  = $_GET["pounds"];
		$stones = Mass::lb_to_st($mass_lb);
		$kilograms = Mass::lb_to_kg($mass_lb);
	}
?>


<?php include("functions.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Unit Converter</title>
</head>
<body>

<h1>Results</h1>


<div>
<h3>Temperature</h3>
<form method="get" action="index.php">
	<p><input type="text" name="celsius" value="<?php echo Temperature::to_celsius($temp_f); ?>">˚C</p>
	<p>=</p>
	<p><input type="text" name="fahrenheit" value="<?php echo Temperature::to_fahrenheit($temp_c); ?>">˚F</p>
	<button href="index.php" type="submit" value="submit">Return</button>
</form>
</div>


<div>
<h3>Distance</h3>
<form method="get" action="index.php">
	<p><input type="text" name="kilometers" value="<?php echo Distance::to_kilometers($dist_m); ?>">kilometers</p>
	<p>=</p>
	<p><input type="text" name="miles" value="<?php echo Distance::to_miles($dist_km); ?>">miles</p>
	<button href="index.php" type="submit" value="submit">Return</button>
</form>
</div>


<div>
<h3>Mass/Weight</h3>
<form method="get" action="index.php">
	<p><input type="text" name="kilograms" value="<?php echo Mass::$kilograms ?>">kilograms</p>
	<p>=</p>
	<p><input type="text" name="pounds" value="<?php echo Mass::$pounds ?>">pounds</p>
	<p>=</p>
	<p><input type="text" name="stones" value="<?php echo Mass::$stones ?>">stones</p>
	<button href="index.php" type="submit" value="submit">Return</button>
</form>
</div>

</body>
</html>