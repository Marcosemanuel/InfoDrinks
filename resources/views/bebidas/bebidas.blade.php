
@extends('templates.template1')

@section('cad')
AQUI OS MELHORES DRINKS
@endsection

@section('content')
	@if(isset($bebidas))
	<div class="container-fluid">
	<ul>
		<a href="bebidas/create" class="btn btn-primary btn-lg btn-block" >Coloca uma bebida nova ai papudinho</a><br>
		@foreach($bebidas as $bebida)
			<div class="card">
				<div class="card-header">
					<a href="{{route('bebidas.show', ['id' => $bebida->id])}}">{{$bebida->titulo}}</a>
					
				</div>
				<div class="card-body">
					<p>{{$bebida->description}}</p>
					<p>{{$bebida->image}}</p>
				</div>
			</div>
			<br>
			<br>
		@endforeach
</ul>
@endif 
</div>

@endsection

