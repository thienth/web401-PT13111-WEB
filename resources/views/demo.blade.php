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
		  <a class="nav-link active" href="#">Active</a>
		  <a class="nav-link" href="#">Link</a>
		  <a class="nav-link" href="#">Link</a>
		  <a class="nav-link disabled" href="#">Disabled</a>
		</nav>
		<div class="main-content">
			<div class="row">
			@for($i = 0; $i < 10; $i++)
					<div class="col-md-4">
						<div class="card">
						  <img class="card-img-top" src="https://4.bp.blogspot.com/-Szhlq51RdAE/WtiQ73yBe6I/AAAAAAAAErI/D3DSHKPX-2cy07MhHWRuqxvppdQASr4wQCLcBGAs/s1600/XinhBaby.Net-gai-xinh-facebook-gai-xinh-sai-gon-nhi-gia-tran-gai-xinh-binh-dinh-ngan-ngan-vo-vo-co-gai-co-vong-1-cuc-dep01.jpg" alt="Card image cap">
						  <div class="card-body">
						    <h5 class="card-title">Card title</h5>
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						    <a href="#" class="btn btn-primary">Go somewhere</a>
						  </div>
						</div>
					</div>
				
			@endfor
			</div>
		</div>
		
	</div>


	<script type="text/javascript" 
		src="{{asset('js/jquery.min.js')}}"></script>
	<script type="text/javascript"
		src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>