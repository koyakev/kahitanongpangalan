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

<form method="POST" action="{{ route('user.verify') }}">
	@csrf
	<input type="hidden" name="product" value="{{ $product }}">
	<input type="hidden" name="amount" value="{{ $amount }}">
	<input type="text" name="username" placeholder="Your username"><br>
	<input type="password" name="password"><br>
	<button type="submit">Submit</button>
</form>

<form method="GET" action="{{ route('transact.register') }}">
		<input type="hidden" name="product" value="{{ $product }}">
		<input type="hidden" name="amount" value="{{ $amount }}">
		<button type="link">Register Here</button>
</form>

<i>*Insert a button for registration. Pass the type="hidden" once again to a registration form using with.</i> 

</body>
</html>