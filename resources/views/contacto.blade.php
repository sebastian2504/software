@extends('layouts.app')

@section('header')
	<h1> CONTACTO </h1>
@endsection

@section('content')
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7948.442710035505!2d-75.49803790295266!3d5.067837763141921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e476f8c1179651b%3A0x18322787cebd6883!2sUniversidad%20Aut%C3%B3noma%20de%20Manizales!5e0!3m2!1ses!2sco!4v1570813641984!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

  <div id="posicion_formulario" class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">

				<div class="panel-heading">
					<h1 class="panel-title"> ¿Cómo podemos ayudarte? <br> ¡Envianos un mensaje! </h1>
				</div>

				<div class = "panel-body">

					<form method="POST" action="{{ route('registro') }}">
						{{ csrf_field() }}

						<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
							<label for="email">Email</label>
							<input class="form-control"
							 type="email"
							 name="email"
							 placeholder="Ingresa tu Email">
							 {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
						</div>

						<div class="form-group">
							<label for="mensaje">Mensaje</label>

              <textarea class="form-control"
              type="mensaje"
              name="mensaje"
              placeholder="Escribe aquí el mensaje..."
              rows="7" cols="80" required></textarea>
						</div>

						<button class="btn btn-primary btn-block">Enviar</button>
					</form>
				</div>
			</div>
		</div>
  </div>
@endsection
