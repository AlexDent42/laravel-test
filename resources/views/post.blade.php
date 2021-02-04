@if(is_array($post))
<div class="info">

	
	<span class="date">{{$post['date']}}</span>
	<span class="author">{{$post['author']}}</span>
</div>
<div class="text">
	{{$post['text']}}

</div>
<a href="{{route('all-posts')}}">Все посты</a>
@else
<div class="info">

	
	<span class="date">Page doesnt exists</span>
	
</div>
@endif