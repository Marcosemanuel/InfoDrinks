@extends('templates.template')
@section('nav')
@endsection
@section('head')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection

@section('content')
   
<div class="container">
     
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">  
        <a class="nav-link" data-toggle="tab" href="#inicio" style="color: #388CC1">Inicio</a>
    </li>

    <li class="nav-item">  
        <a class="nav-link" data-toggle="tab" href="#home" style="color: #388CC1">Bebidas</a>
    </li>
    <li class="nav-item">
        <a  class="nav-link"data-toggle="tab" href="#menu1" style="color: #388CC1"> Petiscos </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu2" style="color: #388CC1"> Jogos </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu3" style="color: #388CC1"> Tabuleiros </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu4" style="color: #388CC1"> Musicas </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu5" style="color: #388CC1"> Comentários </a>
    </li>
  </ul>
  <br>

  <br>
  <div class="tab-content">
    <div id="inicio" class="tab-pane fade in active" >
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="https://ss-static-01.esmsv.com/id/80657/galeriaimagenes/obtenerimagen/?id=35&tipoEscala=stretch&width=1024&height=400" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://ss-static-01.esmsv.com/id/80657/galeriaimagenes/obtenerimagen/?id=39&tipoEscala=stretch&width=1024&height=400" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://inventordotempo.files.wordpress.com/2015/07/whisky_hd_wallpaper_0020.jpg?w=1024&h=400&crop=1" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    </div>
    <div id="home" class="tab-pane fade in active" >
        <center><h2 style="color: white"> MELHORES DRINKS PARA SUA FARRA </h2></center>
     @if(isset($bebidas))
    <div class="container-fluid">
    <ul>
       
        @foreach($bebidas as $bebida)
            <div class="card">
                <div class="card-header" >
                    <a  style="color: #D9B310"href="{{route('bebidas.show', ['id' => $bebida->id])}}">{{$bebida->titulo}}</a>
                    
                </div>
                <div class="card-body">
                    <p>{{$bebida->description}}</p>
                    <p>{{$bebida->image}}</p>
                </div>
            </div>
            <br>
            <br>
        @endforeach
        </ul>
     @endif 
    </div>
    </div>
    <div id="menu1" class="tab-pane fade">
        <center><h2 style="color: white"> SÓ PETISCO TOP </h2></center>
     @if(isset($petiscos))
    <div class="container-fluid">
    <ul>
        
        @foreach($petiscos as $petisco)
            <div class="card">
                <div class="card-header">
                    <a style="color: #D9B310" href="{{route('petiscos.show', ['id' => $petisco->id])}}">{{$petisco->titulo}}</a>
                    
                </div>
                <div class="card-body">
                    <p>
                        {{$petisco->description}}   
                    </p>
                    <p>
                        {{$petisco->image}} 
                    </p>
                
                
                </div>
            </div>
            <br>
            <br>
        @endforeach
         </ul>
        @endif 
        </div>
    </div>
    <div id="menu2" class="tab-pane fade">
        <center><h2 style="color: white"> VERDADE OU CONSEQUÊNCIA </h2></center>
        @if(isset($jogos))
    <div class="container-fluid">
    <ul>
       
        @foreach($jogos as $jogo)
            <div class="card">
                <div class="card-header" style="color: #D9B310">
                    <a style="color: #D9B310">DESAFIO</a>
                    
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
     
    </div>
    <div id="menu3" class="tab-pane fade">
         <center><h2 style="color: white"> COM ESSES TABULEIROS AQUI É TOP TOMAR UMA</h2></center>
     @if(isset($tabuleiros))
    <div class="container-fluid">
    <ul>
        <br>
        @foreach($tabuleiros as $tabuleiro)
            <div class="card">
                <div class="card-header" >
                    <a style="color: #D9B310" href="{{route('tabuleiros.show', ['id' => $tabuleiro->id])}}">{{$tabuleiro->titulo}}</a>

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
    </div>
    <div id="menu4" class="tab-pane fade">
         <center><h2 style="color: white"> AS MELHORES MÚSICAS ESTÃO NA NOSSA PLAYLIST  </h2></center>

@if(isset($musicas))
<div class="container-fluid">
    <ul>
        <br> @foreach($musicas as $musica)
        <div class="card">
            <div class="card-header"">
                <a style="color: #D9B310" href="{{route('musicas.show', ['id' => $musica->id])}}">{{$musica->titulo}}</a>
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
    </div>
    <div id="menu5" class="tab-pane fade">
         <center><h3 style="color: white"> FAZ UM COMENTÁRIO E NOS AJUDE A MELHORAR O SITE  </h3></center>

        <div class="navbar w-50 p-3 ">
    <form method="POST" action="{{route('comentarios.store')}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="display-5"  style="color: #D9B310">Comentário</label>
            <textarea class="form-control" rows="3"  name="comentario"></textarea>
        </div>
        
        <button type="submit" style="background-color: #1D2731" class="btn btn-primary">Enviar</button>
    </form>

        </div>
    </div>
  </div>

</div>

@endsection
<!--E por fim a ultima linha de código que eu escrevo pelo IFRN, graças a Deus tudo esta chegando ao fim. -->