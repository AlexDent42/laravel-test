<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		@foreach($posts as $post)
		
	{{-- <h1>{{$post['title']}}</h1> --}}

			<div class="post">
				<h2>{{$post['title']}}</h2>
				<div class="info">
					<span class="date">{{$post['date']}}</span>
					<span class="author">{{$post['author']}}</span>
				</div>
				<div class="text">
					{{$post['teaser']}}
				</div>
				<div class="more">
					<a href="/post/{{$post['id']}}">ссылка на пост</a>
				</div>
			</div>


@endforeach

</body>
	@include('includes.footer')
</html>