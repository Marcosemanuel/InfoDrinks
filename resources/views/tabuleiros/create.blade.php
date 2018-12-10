@extends('templates.template3')
@section('title')
 	SÓ ADICIONAR A IMAGEM DO SEU TABULEIRO
@endsection
@section('body')

		<div class="navbar">
	<form method="POST" action="{{route('tabuleiros.store')}}">
		{{ csrf_field() }}
		<div class="form-group">
			<label>Titulo do tabuleiro</label>
			<input type="text" class="form-control" name="titulo">
		</div>
		<div class="form-group">
			<label>Descrição do tabuleiro</label>
			<input type="text" class="form-control" name="description" >
		</div>
		<div class="form-group">
		<label>URL da imagem</label>
		<input type="file" name="image" class="form-control">
		</div>
		<button type="submit"style="background-color: #1D2731" class="btn btn-primary">Cadastrar</button>
	</form>
		</div>
@endsection