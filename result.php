<!DOCTYPE html>
<html>
<head>
	<title>Unit Converter</title>
</head>
<body>

<h1>Results</h1>

<div>
<h3>Temperature</h3>
<form method="get" action="/convert">
	<p><input type="text" name="celsius" value="<%= @toCelsius %>">˚C</p>
	<p>=</p>
	<p><input type="text" name="fahrenheit" value="<% @toFahrenheit %>">˚F</p>
	<button type="submit" value="submit">Convert</button>
</form>
</div>


<div>
<h3>Distance</h3>
<form method="get" action="/convert">
	<p><input type="text" name="kilometers" value="<%= @toKilometers %>">kilometers</p>
	<p>=</p>
	<p><input type="text" name="miles" value="<%= @toMiles %>">miles</p>
	<button type="submit" value="submit">Convert</button>
</form>
</div>


<div>
<h3>Mass/Weight</h3>
<form method="get" action="/convert">
	<p><input type="text" name="kilograms" value="<%= @kilograms %>">kilograms</p>
	<p>=</p>
	<p><input type="text" name="pounds" value="<%= @pounds %>">pounds</p>
	<p>=</p>
	<p><input type="text" name="stones" value="<%= @stones %>">stones</p>
	<button type="submit" value="submit">Convert</button>
</form>
</div>

</body>
</html>