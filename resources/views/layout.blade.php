<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'Al chilazo')</title>
</head>
<body>
	@yield('content')
	<ul>
		<li><a href="/">Inicio</a></li>
		<li><a href="/about">Sobre nosotros</a></li>
		<li><a href="/contact">Contactanos</a></li>
	</ul>
</body>
</html>