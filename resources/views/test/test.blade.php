<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
<h1>Test view here</h1>
<h2>First variable {{ $var1 ?? 'Default'}}</h2>
<h2>Second variable {{ $var2 ?? 'Default'}}</h2>
<ul>
	<li>{{ $name ?? 'Default'}}</li>
	<li>{{ $surname ?? 'Default'}}</li>
	<li>{{ $salary ?? 'Default'}}</li>
	<h4>The current time is {{date('Y-m-d,H:i:s')}}</h4>
</ul>


<h3>Array count </h3>

<h2>Most intresting City: {{$city ?? 'Minsk'}} Contry: {{ $country ?? 'Belarus'}}</h2>

<h3>Trick with date: {{$year ?? date('Y')}}</h3>

<p>Test text {!! $string ?? 'Default'!!}</p>
{{-- Blade comment --}}
{{--One more blade comment--}}




</body>
</html>