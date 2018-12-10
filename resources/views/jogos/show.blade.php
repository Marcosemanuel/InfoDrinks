
@extends('templates.template2')

@section('titile')
	{{$jogo->id}}
@endsection

@section('card')

				<form method="POST" action="{{route('jogos.destroy', ['id' => $jogo->id])}}">
				{{ csrf_field() }}
				<input type="hidden" name="_method" value="DELETE" >
			
			<button type="submit">Arrocha</button>
			</form>

				<div class="card-header">	
					{{$jogo->id}}
				</div>
				<div class="card-body">
					{{$jogo->perguntas}}					
				</div>
@endsection