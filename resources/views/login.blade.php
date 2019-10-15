@extends('layouts.app')

@section('header')
	<h1>INICIAR SESIÓN</h1>

@endsection

@section('content')
	<img src="css/images/login.png">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">

				<div class="panel-heading">
					<h1 class="panel-title">Acceso a la Aplicación</h1>
				</div>

				<div class = "panel-body">
					<form method="post" action="{{ route('login') }}">
						{{ csrf_field() }}

						<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
							<label for="email">Email</label>
							<input class="form-control"
							 type="email"
							 name="email"
							 value="{{ old('email') }}"
							 placeholder="Ingresa tu Email">
							 {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
						</div>

						<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
							<label for="password">Contraseña</label>
							<input class="form-control"
							 type="password"
							 name="password"
							 placeholder="Ingresa tu contraseña">
							 {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
						</div>

						<button class="btn btn-primary btn-block">Acceder</button><br>
						<a href="registro">¿Aún no estas registrado?</a>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('footer')
	<div class="espacio_contacto"></div>
	<a href="contacto"> <img src="css/images/contactanos.png"> </a>
@endsection
