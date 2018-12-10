@extends('templates.template3')
@section('title')
 	CADASTRA UMA BEBIDA NOVA AI
@endsection
@section('body')
	<div class="navbar">
	<form method="POST" action="{{route('bebidas.store')}}">
		{{ csrf_field() }}
		<div class="form-group">
			<label  style="color: white">Titulo da bebida</label>
			<input type="text" class="form-control" name="bebida">
		</div>
		<div class="form-group">
			<label  style="color: white">Descrição da bebida</label>
			<input type="text" class="form-control" name="description">
		</div>
		<div class="form-group">
		<label  style="color: white">URL da imagem</label>
		<input type="file" name="image" class="form-control">
		</div>
		<button style="background-color: #1D2731" type="submit" class="btn btn-primary">Cadastrar</button>
	</form>
		</div>
@endsection