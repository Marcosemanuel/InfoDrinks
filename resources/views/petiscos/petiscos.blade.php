@extends('templates.template1')

@section('cad')
SÓ TIRA GOSTO TOP
@endsection

@section('content')
	@if(isset($petiscos))
	<div class="container-fluid">
	<ul>
		<a href="petiscos/create" class="btn btn-primary btn-lg btn-block" >Coloca uma bebida nova ai papudinho</a><br>
		@foreach($petiscos as $petisco)
			<div class="card">
				<div class="card-header">
					<a href="{{route('petiscos.show', ['id' => $petisco->id])}}">{{$petisco->titulo}}</a>
					
				</div>
				<div class="card-body">
					<p>
						{{$petisco->description}}	
					</p>
					<p>
						{{$petisco->image}}	
					</p>
				
				
				</div>
			</div>
			<br>
			<br>
		@endforeach
</ul>
@endif 
</div>

@endsection




