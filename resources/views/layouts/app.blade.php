<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Kamitube</title>
		<link rel="stylesheet" href="{{asset('css/app.css')}}"/>
		<link rel="stylesheet" href="{{asset('css/estilo.css')}}"/>
		<link rel="stylesheet" href="{{asset('css/menu.css')}}"/>
	</head>
	<body>
		<div class="header">
			@yield('header')
		</div>

		<div class="nav">
			@yield('nav')
		</div>

		<div class = "container">
			@yield('content')
		</div>

		<div class="footer">
			@yield('footer')
		</div>
	</body>
</html>
