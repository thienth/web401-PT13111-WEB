<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" 
			href="{{asset('bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
	<div class="container">
		<h2>{{$post->title}}</h2>
		<div class="col-md-6 col-md-offset-3 text-center">
			<img src="{{$post->image}}" class="img-fluid">
		</div>
		<p><b>{{$post->short_desc}}</b></p>
		<p>{{$post->content}}</p>
	</div>
</body>
</html>