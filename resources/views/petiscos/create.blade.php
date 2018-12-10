
@extends('templates.template3')
@section('title')
 	COLOCA AQUELA RECEITA MASSA DE TIRA GOSTO 
@endsection
@section('body')

<div class="navbar">
	<form method="POST" action="{{route('petiscos.store')}}">
		{{ csrf_field() }}
			<div class="form-group">
				<label>Titulo</label>
				<input class="form-control" type="text" name="petiscos">
			</div>
			<div>
				<label>Descrição</label>
				<textarea type="text" class="form-control" name="description"> </textarea>
			</div><br>
			<button type="submit" style="background-color: #1D2731" class="btn btn-primary">Arrocha</button>
			

	</form>
		</div>
@endsection