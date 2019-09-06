<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<ul>

@foreach($customers as $customer)
<li>{{ $customer->name }}</li>
@endforeach

</ul>
</body>
</html>