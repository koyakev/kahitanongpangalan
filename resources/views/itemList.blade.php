<!DOCTYPE html>

<html>
<head>

<title>iHateMonday</title>

</head>

<body>

@php

echo $id;
echo "<br>";
echo $username;

$data = DB::table('transactions')->where('username', $username)->get();

@endphp

<table border=1>
	
	<tr>
		<th>Transaction ID</th>
		<th>Product Name</th>
		<th>Amount</th>
		<th>Check Out</th>
	</tr>
	
	<form method='POST' action={{ route('checkout') }}>
	@csrf
		
		@foreach($data as $user)
			<tr>
				<td>{{ $user->id }}</td>
				<td>{{ $user->product_name }}</td>
				<td>{{ $user->amount }}</td>
				<td><input type='checkbox' name='forcheckout[]' value='{{ $user->id }}'></td>
			</tr>
		@endforeach
	
</table>

<button type="Submit">Check Out</button>
</form>

<table border=1>
	@php
	
	$data = DB::table('check_outs')->get();
	
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