<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" 
			href="{{asset('bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-3 offset-md-9">
				@auth
					@php
						$user = Auth::user();
					@endphp
					<div class="text-center">
						Hello, <a href="javascript:;">{{$user->name}}</a> | 
						<a href="{{ route('logout') }}">Đăng xuất</a>
					</div>
				@endauth
				@guest
				    <div class="text-center">
						<a href="{{ route('login') }}">Đăng nhập</a> | 
						<a href="javascript:;">Đăng ký</a>
					</div>
				@endguest
			</div>
		</div>
		<nav class="nav">
			@foreach ($categories as $c)
		  		<a class="nav-link active" href="{{ route('cate.list', ['slug' => $c->slug]) }}">{{$c->name}}</a>
			@endforeach
			<form action="{{ route('search') }}">
				<input type="text" name="keyword">
				<button class="btn btn-primary btn-sm" type="submit">Search</button>
			</form>
			@auth
			<a href="{{ route('post.add') }}" class="btn btn-success">Thêm mới bài viết</a>
			@endauth
		</nav>

		@yield('content')


	</div>
	<script type="text/javascript" 
		src="{{asset('js/jquery.min.js')}}"></script>
	<script type="text/javascript"
		src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>