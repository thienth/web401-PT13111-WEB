<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" 
			href="{{asset('bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
	<div class="container">
		<nav class="nav">
			@foreach ($categories as $c)
		  		<a class="nav-link active" href="{{ route('cate.list', ['slug' => $c->slug]) }}">{{$c->name}}</a>
			@endforeach
			<form action="{{ route('search') }}">
				<input type="text" name="keyword">
				<button class="btn btn-primary btn-sm" type="submit">Search</button>
			</form>
			<a href="{{ route('post.add') }}" class="btn btn-success">Thêm mới bài viết</a>
		</nav>

		@yield('content')


	</div>
	<script type="text/javascript" 
		src="{{asset('js/jquery.min.js')}}"></script>
	<script type="text/javascript"
		src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>