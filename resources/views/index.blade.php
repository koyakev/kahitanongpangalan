<!DOCTYPE html>

<html>
<head>

<title>iHateMonday</title>

</head>
<body>

@if($message = Session::get('success'))
	<p>{{ $message }}</p>
@elseif($message = Session::get('failure'))
	<p>{{ $message }}</p>
@else
	<p>{{ $message }}</p>
@endif

<a href="{{ route('checkout.user') }}">Check Out</a>

<div>
	<h1>Product 1</h1>
	<p>Amount: 1000</p>
	<form method="GET" action="{{ route('user.login') }}">
		<input type="hidden" name="product" value="Product 1">
		<input type="hidden" name="amount" value=1000>
		<button type="submit">Buy</button>
	</form>
</div>

<div>
	<h1>Product 2</h1>
	<p>Amount: 2000</p>
	<form method="GET" action="{{ route('user.login') }}">
		<input type="hidden" name="product" value="Product 2">
		<input type="hidden" name="amount" value=2000>
		<button type="submit">Buy</button>
	</form>
</div>

<div>
	<h1>Product 3</h1>
	<p>Amount: 3000</p>
	<form method="GET" action="{{ route('user.login') }}">
		<input type="hidden" name="product" value="Product 3">
		<input type="hidden" name="amount" value=3000>
		<button type="submit">Buy</button>
	</form>
</div>

<div>
	<h1>Product 4</h1>
	<p>Amount: 4000</p>
	<form method="GET" action="{{ route('user.login') }}">
		<input type="hidden" name="product" value="Product 4">
		<input type="hidden" name="amount" value=4000>
		<button type="submit">Buy</button>
	</form>
</div>

</body>
</html>