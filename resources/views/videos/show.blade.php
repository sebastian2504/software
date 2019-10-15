@extends('layouts.app')

@section('header')
  <h1> {{ auth()->user()->name }} </h1>
@endsection

@section('nav')
  <div class="posicio_nav">

    <div class="posicion_botones">
      <div class="boton"><a href="videosCrear"> <img src="css/images/subir_video.png"></a></div>
      <div class="boton"><a href="videosListarTodos"> <img src="css/images/mis_videos.png"></a></div>
      <div id="lista_reproduccion" class="boton"><a href="#"> <img src="css/images/lista.png"></a></div>
      <div id="favoritos" class="boton"><a href="#"> <img src="css/images/favoritos.png"></a></div>
      <form action="{{ route('logout') }}" method="post">
        {{ csrf_field() }}
        <button  id="cerrar_sesion" class="boton"><img src="css/images/cerrar_sesion.png"></button>
      </form>
    </div>

    <div class="posicion_parrafos">
      <p class="parrafo">Subir Video</p>
      <p class="parrafo">Mis videos</p>
      <p class="parrafo">Lista de reproducción</p>
      <p class="parrafo">Favoritos</p>
      <p class="parrafo">Cerrar Sesión</p>
    </div>

  </div>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h1 class="panel-title">Videos Disponibles</h1>
        </div>

        <div class="">

        </div>
        <div class = "panel-body">
          <ul>
            @foreach($videos as $video)
              <div class="video_nombre">
                  <li>{{ $video->nombre }}</li>
              </div>

              <div class="boton_editar">
                <a  href="{{ url('videosEditar', [$video->id])}}" class="btn btn-warning">Editar</a>
              </div>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>


@endsection
