@extends('layouts.template')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        
            <ul class="nav justify-content-center">
                <li class="nav-item">
                  <a class="nav-link active" style="color: white;" href="{{url('bebidas') }}">Bebidas</a>
                </li>
              <li class="nav-item active">
                <a class="nav-link"style="color: white;"  href="{{url('petiscos') }}">Petiscos</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" style="color: white;" href="{{url('musicas') }}">Musicas</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link " style="color: white;" href="{{url('tabuleiros') }}">Tabuleiros</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link " style="color: white;" href="{{url('jogos') }}">Jogos</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link " style="color: white;" href="{{url('comentarios') }}">Comentarios</a>
              </li>
            </ul>
                        
       
    </div>
</div>
@endsection
