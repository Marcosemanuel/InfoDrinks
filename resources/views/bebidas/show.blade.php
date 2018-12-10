@extends('templates.template2')

@section('title')
	{{$bebida->id}}
@endsection

@section('card')
	

			<form method="POST" action="{{route('bebidas.destroy', ['id' => $bebida->id])}}">
			{{ csrf_field() }}
			<input type="hidden" name="_method" value="DELETE" >
			
			<button type="submit">Arrocha</button>
			</form>

			<div class="card-header">	
				{{$bebida->titulo}}
			</div>
			<div class="card-body">
				{{$bebida->description}}					
			</div>
				<img src="imagem/{{$bebida->image}}">			
			</div>
@endsection
		


