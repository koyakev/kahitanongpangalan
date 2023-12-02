<!DOCTYPE html>

<html>
<head>

<title>iHateMonday</title>

</head>

<body>

@php

$id = $_GET['id'];

echo $id;

$users = DB::table('users')->where('id', '=', $id)->get();

foreach($users as $user){
	
	$username = $user->username;
	
}

echo $username;

$data = DB::table('transactions')->where('username', '=', $username)->get();

@endphp

<a href="{{ route('index') }}">Home</a>

<table border=1>
	
	<tr>
		<th>Transaction ID</th>
		<th>Product Name</th>
		<th>Amount</th>
		<th>Check Out</th>
		<th>Action</th>
	</tr>
	
	<form method='GET' action="{{ route('checkout') }}">
	@csrf
		
		@foreach($data as $user)
		
			<tr>
				<td>{{ $user->id }}</td>
				<td>{{ $user->product_name }}</td>
				<td>{{ $user->amount }}</td>
				<td><input type='checkbox' name='forcheckout[]' value='{{ $user->id }}'></td>
				<td><a href='{{ route("item.edit", ["id" => $user->id]) }}'>Edit</a></td>
				<td><a href='{{ route("item.cancel", ["id" => $user->id]) }}'>Cancel</a></td>
			</tr>
		@endforeach
	
</table>

<select name='mode'>
	<option>BDO Bank Transfer</option>
	<option>GCash</option>
</select>
<br>
<input type='text' name='account' required>
<br>

<button type="Submit">Check Out</button>
</form>

<table border=1>
	@php
	
	$data = DB::table('check_outs')->where('user_id', '=', $id)->get();
	
	if(is_null($data)){
		echo "<tr>";
		echo "<td>No Transactions Done.</td>";
		echo "</tr>";
	} else {
		
		$datetoday = date('Y-m-d');
		
		echo "<tr>";
		echo "<th>Check Out Number</th>";
		echo "<th>Items</th>";
		echo "<th>Total Amount</th>";
		echo "<th>Delivery</th>";
		echo "</tr>";
		
		foreach($data as $user){
			$delivery = $user->delivery;
			echo "<tr>";
			echo "<td>$user->id</td>";
			echo "<td>$user->items</td>";
			echo "<td>$user->mode_of_payment</td>";
			echo "<td>$user->totalamount</td>";
			echo "<td>";
			
			if($datetoday == $delivery){
				echo "<p>To be delivered today</p>";
			} elseif ($datetoday > $delivery){
				echo "delivered";
			} elseif ($datetoday < $delivery){
				echo $delivery;
			}
			
			echo "</td>";
			echo "</tr>";
		}
	}
	@endphp

</table>

</body>
</html>