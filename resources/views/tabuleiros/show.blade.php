@extends('templates.template2')
@section('title')
	{{$tabuleiro->id}}
@endsection
@section('card')

				<form method="POST" action="{{route('tabuleiros.destroy', ['id' => $tabuleiro->id])}}">
				{{ csrf_field() }}
				<input type="hidden" name="_method" value="DELETE" >
			
			<button type="submit">Arrocha</button>
			</form>

				<div class="card-header">	
					{{$tabuleiro->titulo}}
				</div>
				<div class="card-body">
					{{$tabuleiro->description}}					
				</div>
@endsection