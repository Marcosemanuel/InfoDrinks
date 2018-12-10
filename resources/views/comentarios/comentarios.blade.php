@extends('templates.template1')

@section('cad')
AQUI OS COMENTARIOS
@endsection

@section('content')
	@if(isset($comentarios))
	<div class="container-fluid">
	<ul>
		
		@foreach($comentarios as $comentario)
			<div class="card">
				<div class="card-header">
					<a href="{{route('comentarios.show', ['id' => $comentario->id])}}">{{$comentario->titulo}}</a>
					
				</div>
				<div class="card-body">
					<p>
						{{$comentario->id}}	
					</p>
				
					<p>
						{{$comentario->coment}}	
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












