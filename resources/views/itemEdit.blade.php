<!DOCTYPE html>

<html>
<head>

<title>iHateMonday</title>

</head>
<body>

@php

$id = $_GET['id'];

$transacts = DB::table('transactions')->where('id', '=', $id)->get();

foreach($transacts as $transact){
	$product_name = $transact->product_name;
	$amount = $transact->amount;
	$username = $transact->username;
	$contact = $transact->contact;
	$address = $transact->address;
	$size = $transact->size;
}

@endphp

<form method="GET" action="{{ route('item.update', ['id' => $id]) }}">
	@csrf
	<input type="hidden" name="id" value="{{ $id }}">
	<input type="hidden" name="product_name" value="{{ $product_name }}">
	<input type="hidden" name="username" value="{{ $username }}">
	<input type="hidden" name="amount" value="{{ $amount }}">
	<input type="text" name="contact" value="{{ $contact }}"><br>
	<input type="text" name="address" value="{{ $address }}"><br>
	<select name="size">
		<option disabled></option>
		<option>Small</option>
		<option>Medium</option>
		<option>Large</option>
	</select>
	<button type="submit">Submit</button>
</form>

</body>
</html>