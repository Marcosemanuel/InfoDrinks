@extends('templates.template2')

@section('titile')
	{{$musica->id}}
@endsection

@section('card')

				<form method="DELETE" action="{{route('musicas.destroy', ['id' => $musica->id])}}">
			{{ csrf_field() }}
			
			<button type="submit">Arrocha</button>
			</form>

				<div class="card-header">	
					{{$musica->titulo}}
				</div>
				<div class="card-body">
					{{$musica->link}}					
				</div>
				<div class="card-body">
					{{$musica->genero}}					
				</div>
			<
@endsection