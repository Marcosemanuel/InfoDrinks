@extends('templates.template3')
@section('title')
 	COLOCA UMA MUSICA NOVA PRA GENTE 
@endsection
@section('body')

	<form method="POST" action="{{route('musicas.store')}}">
		{{ csrf_field() }}
		<div class="form-group">
		<label style="color: white">Titulo</label>
		<input type="text" class="form-control" name="musica">
		</div>
		<div class="form-group">
		<label style="color: white">Link</label>
		<input type="text" class="form-control" name="link">
		</div>
		<div>
		<label style="color: white">Genero</label>
		<input type="text" class="form-control" name="genero">
		</div>
		<button type="submit" style="background-color: #1D2731"  class="btn btn-primary" >Cadastrar</button>
	</form>
@endsection