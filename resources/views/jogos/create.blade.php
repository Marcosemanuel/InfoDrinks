@extends('templates.template3')
@section('title')
 	ADICIONA UM JOGO NOVO AI
@endsection
@section('body')

	<form method="POST" action="{{route('jogos.store')}}">
		{{ csrf_field() }}
		<div class="form-group">
			<label class="display-4"  style="color: white">Desafio</label>
			<textarea class="form-control" rows="3"  name="jogo"></textarea>
		</div>
		
		<button type="submit" style="background-color: #1D2731" class="btn btn-primary">Enviar</button>
		
@endsection