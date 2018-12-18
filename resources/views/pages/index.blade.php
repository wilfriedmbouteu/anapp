@extends('master')


@section('content')
<div class="row">
<div class="col-md-7">
<h2> Blog Posts</h2>
<hr>
<br>
@foreach($posts as $post)

<a href="/post/{{ $post->id }} "><h3> <img src="uploads/avatars/{{ $post->user->avatar}} "  style="width:32px; height:32px; position:relative;    border-radius: 50% " alt="avatar" > &nbsp {{ $post->title}} </h3></a>
<br>

<p>   
	{{$post->body}} &nbsp|<strong> posted on: {{ $post->created_at->toFormattedDateString() }} </strong></p>

@endforeach
</div>
</div>

@endsection