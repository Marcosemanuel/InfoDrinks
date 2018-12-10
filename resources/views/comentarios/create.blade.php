@extends('templates.template3')
@section('title')
 	AQUI VOCÊ DEIXA O SEU COMENTARIO
@endsection
@section('body')

		<div class="navbar w-50 p-3 ">
	<form method="POST" action="{{route('comentarios.store')}}">
		{{ csrf_field() }}
		<div class="form-group">
			<label class="display-4"  style="color: white">Comentário</label>
			<textarea class="form-control" rows="3"  name="comentario"></textarea>
		</div>
		
		<button type="submit" style="background-color: #1D2731" class="btn btn-primary">Enviar</button>
	</form>
		</div>
@endsection