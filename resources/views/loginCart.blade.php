<!DOCTYPE html>

<html>
<head>

<title>iHateMonday</title>

</head>
<body>


<form method="GET" action="{{ route('checkout.verify') }}">
	@csrf
	<input type="text" name="username" placeholder="Your username" required><br>
	<input type="password" name="password" required><br>
	<button type="submit">Submit</button>
</form>

</body>
</html>