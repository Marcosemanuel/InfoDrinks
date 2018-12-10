@extends('templates.template2')

@section('titile')
	{{$comentario->id}}
@endsection

@section('card')

				<form method="POST" action="{{route('comentario.destroy', ['id' => $comentario->id])}}">
				{{ csrf_field() }}
				<input type="hidden" name="_method" value="DELETE" >
			
			<button type="submit">Arrocha</button>
			</form>

				<div class="card-header">	
					{{$comentario->id}}
				</div>
				<div class="card-body">
					{{$comentario->coment}}					
				</div>
@endsection