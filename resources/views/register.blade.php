<!DOCTYPE html>

<html>
<head>

<title>iHateMonday</title>

</head>
<body>

@php

echo $product;
echo "<br>";
echo $amount;

@endphp

<form method="POST" action="{{ route('transact.registerStore') }}">
	@csrf
	<input type="hidden" name="product_name" value="{{ $product }}">
	<input type="hidden" name="amount" value="{{ $amount }}">
	<input type="text" name="name" placeholder="Your name"><br>
	<input type="text" name="username" placeholder="Your username"><br>
	<input type="text" name="contact" placeholder="Your contact number"><br>
	<input type="text" name="address" placeholder="Your address"><br>
	<input type="password" name="password"><br>
	<select name="size">
		<option></option>
		<option>Small</option>
		<option>Medium</option>
		<option>Large</option>
	</select>
	<select name="payment_method">
		<option></option>
		<option>Cash on Delivery</option>
		<option>GCash</option>
	</select>
	<button type="submit">Submit</button>
</form>

</body>
</html>