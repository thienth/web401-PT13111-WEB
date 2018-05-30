<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" 
			href="{{asset('bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
	<div class="container">
		<nav class="nav">
			@foreach ($categories as $c)
		  		<a class="nav-link active" href="#">{{$c->name}}</a>
			@endforeach
		</nav>
		<div class="main-content">
			<div class="row">
			@foreach($posts as $p)
				<div class="col-md-4">
					<div class="card">
					  <a href="{{ route('detail.post', ['
					    slug' => $p->slug]) }}">
					  	<img class="card-img-top" src="{{$p->image}}" alt="{{$p->title}}">
					  </a>
					  
					  <div class="card-body">
					    <h5 class="card-title">{{$p->title}}</h5>
					    <p class="card-text">{{$p->short_desc}}</p>
					    <a href="{{ route('detail.post', ['
					    slug' => $p->slug]) }}" class="btn btn-primary">Detail</a>
					  </div>
					</div>
				</div>
			@endforeach
			</div>
		</div>
		
	</div>


	<script type="text/javascript" 
		src="{{asset('js/jquery.min.js')}}"></script>
	<script type="text/javascript"
		src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>