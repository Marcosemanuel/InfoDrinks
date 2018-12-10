@extends('templates.template1')

@section('cad')
VEJA AQUI OS NOSSOS GAMES
@endsection

@section('content')
	@if(isset($jogos))
	<div class="container-fluid">
	<ul>
		<a href="jogos/create" class="btn btn-primary btn-lg btn-block" >Cadastrar perguntas</a><br>
		@foreach($jogos as $jogo)
			<div class="card">
				<div class="card-header">
					<a href="{{route('jogos.show', ['id' => $jogo->id])}}">{{$jogo->titulo}}</a>
					
				</div>
				<div class="card-body">
					<p>
						{{$jogo->perguntas}}	
					</p>
				
				</div>
			</div>
			<br>
			<br>
		@endforeach
</ul>
@endif 
</div>

@endsection

































