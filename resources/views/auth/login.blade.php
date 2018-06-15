<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" 
			href="{{asset('bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
	<div class="container">


		<div class="col-md-6 offset-md-3">
			<form action="" method="post">
				@csrf
				@isset($errMsg)
				<div class="text-center">
					<span class="text-danger">{{$errMsg}}</span>
				</div>
				@endisset
				<div class="form-group">
					<label>Email</label>
					<input class="form-control" type="text" name="email" placeholder="Enter Email" />
				</div>
				<div class="form-group">
					<label>Password</label>
					<input class="form-control" type="password" name="password" placeholder="Enter Password" />
				</div>
				<div class="text-center">
					<button type="submit" class="btn btn-sm btn-primary">Login</button>
					<a href="{{route('homepage')}}" class="btn btn-sm btn-danger">Cancel</a>
				</div>
			</form>
		</div>	


	</div>
	<script type="text/javascript" 
		src="{{asset('js/jquery.min.js')}}"></script>
	<script type="text/javascript"
		src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>