<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>{{session()->get('counter')}}</h1>
	@if (session('error'))
<div class="alert alert-danger">{{ session('error') }}</div>
@endif
</body>
</html>