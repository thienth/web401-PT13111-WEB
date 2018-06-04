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
		  		<a class="nav-link active" href="#">{{$c->name}}</a>
			@endforeach
			<form action="{{ route('search') }}">
				<input type="text" name="keyword">
				<button type="submit">Search</button>
			</form>
		</nav>

		@yield('content')


	</div>
	<script type="text/javascript" 
		src="{{asset('js/jquery.min.js')}}"></script>
	<script type="text/javascript"
		src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>