

<div>
	<h1>Product Name: {{$name ?? 'Default'}}</h1>
	<h3>Cost: {{$cost ?? 'Default'}}</h3>
	<h3>InStock: {{$inStock ?? 'Default'}}</h3>
	<p>Product description: {{$desc ?? 'Default'}}</p>
@if(isset($products))
	@foreach($products as $product)
		<h4>{{$product['name']}}</h4>
		<h4>{{$product['cost']}}</h4>
	@endforeach
@endif
</div>