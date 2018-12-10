@extends('templates.template1')

@section('cad')
AQUI TODOS OS TABULEIROS
@endsection

@section('content')
	@if(isset($tabuleiros))
	<div class="container-fluid">
	<ul>
		<a href="tabuleiros/create" class="btn btn-primary btn-lg btn-block" >Adicione um novo tabuleiro</a><br>
		@foreach($tabuleiros as $tabuleiro)
			<div class="card">
				<div class="card-header">
					<a href="{{route('tabuleiros.show', ['id' => $tabuleiro->id])}}">{{$tabuleiro->titulo}}</a>
					
				</div>
				<div class="card-body">
					<p>{{$tabuleiro->description}}</p>
					<p>{{$tabuleiro->image}}</p>
				</div>
			</div>
			<br>
			<br>
		@endforeach
</ul>
@endif 
</div>

@endsection












	