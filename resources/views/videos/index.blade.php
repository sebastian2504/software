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
	<div class="container">
		<h1>Videos Disponibles</h1>
		<ul>
			@foreach($videos as $video)
				<li>{{ $video->nombre }}</li>
				<button type="submit" class="btn btn-warning">Editar</button>
			@endforeach
		</ul>
	</div>
@endsection
