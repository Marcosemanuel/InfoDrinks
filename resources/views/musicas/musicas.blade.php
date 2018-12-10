@extends('templates.template1') 
@section('cad') SE LIGA NESSAS MUSICAS
@endsection
@section('content')

@if(isset($musicas))
<div class="container-fluid">
    <ul>
        <a href="musicas/create" class="btn btn-primary btn-lg btn-block">Coloca um som novo ai</a>
        <br> @foreach($musicas as $musica)
        <div class="card">
            <div class="card-header">
                <a href="{{route('musicas.show', ['id' => $musica->id])}}">{{$musica->titulo}}</a>
                
            </div>
            <div class="card-body">
                <p>{{$musica->link}}</p>
                <p>{{$musica->genero}}</p>

            </div>
        </div>
        <br>
        <br> @endforeach
    </ul>
    @endif
</div>

@endsection