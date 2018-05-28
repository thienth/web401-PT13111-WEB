<p>Ten toi la: {{$x}}</p>
<p>Toi {{$y}} tuoi</p>
@if ($y <= 18)
	<p>Em chua 19</p>
@else
	<p>Em da hon 19 tuoi</p>
@endif
{!! $desc !!}

<ul>
@foreach (['tam', 'hieu', 'the', 'huy', 'long', 'phong'] as $e)
	<li>{{$e}} - index = {{$loop->index}} - iteration = {{$loop->iteration}} - remain = {{$loop->remaining}}</li>
@endforeach
</ul>