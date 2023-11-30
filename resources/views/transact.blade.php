<!DOCTYPE html>

<html>
<head>

<title>iHateMonday</title>

</head>
<body>

<form method="POST" action="{{ route('transact.store') }}">
	@csrf
	<input type="text" name="product_name" value="{{ $product }}">
	<input type="number" name="amount" value="{{ $amount }}"><br>
	<input type="text" name="username" value="{{ $username }}"><br>
	<input type="text" name="contact" value="{{ $contact }}"><br>
	<input type="text" name="address" value="{{ $address }}"><br>
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