@extends('layouts.app')

@section('header')
  <h1>{{ $video->nombre }}</h1>
@endsection

@section('nav')
  <div class="posicio_nav">

    <div class="posicion_botones">
      <div class="boton"><a href="{{asset('videosCrear')}}"> <img src="{{asset('css/images/subir_video.png')}}"></a></div>
      <div class="boton"><a href="{{asset('videosListarTodos')}}"> <img src="{{asset('css/images/mis_videos.png')}}"></a></div>
      <div id="lista_reproduccion" class="boton"><a href="#"> <img src="{{asset('css/images/lista.png')}}"></a></div>
      <div id="favoritos" class="boton"><a href="#"> <img src="{{asset('css/images/favoritos.png')}}"></a></div>
      <form action="{{ route('logout') }}" method="post">
        {{ csrf_field() }}
        <button  id="cerrar_sesion" class="boton"><img src="{{asset('css/images/cerrar_sesion.png')}}"></button>
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
	<form action="{{url('actualizarVideo', [$video->id])}}" method="POST" role="form">
		{{ csrf_field() }}
		<legend>Actualizar: {{ $video->nombre }}</legend>
		<div class="form-group">
			<label for="">Nombre Nuevo</label>
			<input required type="text" name="nombre" value="{{ $video->nombre }}" class="form-control" id="">
		</div>
		<div class="form-group">
			<label for="">Duracion Nueva</label>
			<input required type="text" name="duracion" value="{{ $video->duracion }}"  class="form-control" id="">
		</div>

		<div class="form-group">
			<label for="">Descripcion Nueva</label>
			<textarea required name="descripcion" placeholder="{{ $video->descripcion }}" class="form-control" id=""></textarea>
		</div>
		<button type="submit" class="btn btn-primary">Actualizar</button>
	</form>
@endsection
