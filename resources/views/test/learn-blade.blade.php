<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	


	<h2>Here I learn Blade</h2>

	{{-- @if(count($result)>=1)
	<h3>Isset array data</h3>
	@else
	<h3>Array is empty</h3>
	@endif --}}


	<hr>
	@if(is_array($result))
		
		 	@foreach($result as $element)
		 	<tr>
		 		<td>{{$element['name']}}</td>
		 		<td>{{$element['surname']}}</td>
		 		<td>{{$element['salary']}}</td>
		 		</tr>
		 	@endforeach
	 	
	 	@else
	 	<h1>{{$result}}</h1>
	@endif
</body>
</html>