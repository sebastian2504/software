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
	<form action="registrarVideo" method="POST" role="form">
		{{ csrf_field() }}
		<legend>Crear un nuevo Video</legend>
		<div class="form-group">
			<label for="">Nombre</label>
			<input required type="text" name="nombre" class="form-control" id="" placeholder="Aqui va el nombre del video">
		</div>
		<div class="form-group">
			<label for="">Duracion</label>
			<input required type="text" name="duracion" class="form-control" id="" placeholder="Aqui va la duracion del video">
		</div>

		<div class="form-group">
			<label for="">Descripcion</label>
			<textarea required name="descripcion" class="form-control" id="" placeholder="Aqui va la descripcion del video"></textarea>
		</div>
		<button type="submit" class="btn btn-primary">Crear</button>
	</form>
@endsection
