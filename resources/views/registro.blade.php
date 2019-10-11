@extends('layouts.app')

@section('header')
	<h1>REGISTRO</h1>
@endsection

@section('content')
	<img src="css/images/registro.png">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1 class="panel-title">Registro de Usuario</h1>
				</div>
				<div class = "panel-body">
					<form method="POST" action="{{ route('registro') }}">
						{{ csrf_field() }}
						<div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
							<label for="name">Nombre de Usuario</label>
							<input class="form-control"
							 type="name"
							 name="name"
							 placeholder="Ingresa tu Nombre de Usuario">
							 {!! $errors->first('nombre', '<span class="help-block">:message</span>') !!}
						</div>
						<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
							<label for="email">Email</label>
							<input class="form-control"
							 type="email"
							 name="email"
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
						<div class="form-group {{ $errors->has('telefono') ? 'has-error' : '' }}">
							<label for="telefono">Teléfono</label>
							<input class="form-control"
							 type="telefono"
							 name="telefono"
							 placeholder="Ingresa tu número telefónico">
							 {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
						</div>
						<button class="btn btn-primary btn-block">Registrarse</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('footer')
	<a href="registro"> <img src="css/images/contactanos.png"> </a>
@endsection
