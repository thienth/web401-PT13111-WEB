@extends('layouts.main')
@section('title', $post->title)
@section('content')
	<div class="main-content">
		<h2>{{$post->title}} 
			<a href="{{ route('post.edit', ['id' => $post->id]) }}">Edit</a>
		</h2>
		<div class="col-md-6 col-md-offset-3 text-center">
			<img src="{{$post->image}}" class="img-fluid">
		</div>
		<p><b>{{$post->short_desc}}</b></p>
		<p>{{$post->content}}</p>
	</div>
@endsection