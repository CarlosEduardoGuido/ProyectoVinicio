<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<link href="{{asset('dashmin-1.0.0/css/bootstrap.min.css')}}" rel="stylesheet">

<html>
	<head>
		<title>CONSULTORIO SMILE'S</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
		<noscript><link rel="stylesheet" href="{{asset('assets/css/noscript.css')}}" /></noscript>
	    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">
				@if(auth()->check())
					<b><li><a>Bienvenido</a></b><br>{{ auth()->user()->name}}</li>
					<li><a href="{{ route('login.destroy') }}"><b>Cerrar Sesion</a></li></b>
					@else
					
					<td colspan="2">
						<a class="btn btn-primary" href="{{ route('login.create') }}" >
							<button class="btn btn-primary">Iniciar Sesion</button><br>
						</a>
						<a class="btn btn-primary" href="{{ route('register.create') }}">
							<button class="btn btn-primary">Registrate</button>	
						</a>
					
				@endif
				<!-- Header -->
					<header id="header" class="alt">
						<span class="logo"><img src="images/" alt="" /></span>
						<b><h1>CONSULTORIO DENTAL SMILE'S</h1></b>
						<b><p>Mejorando Sonrisas<br/></b>
					</header>
					
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#intro" class="active">Introducción</a></li>
							<li><a href="#first">Quienes Somos</a></li>
							<li><a href="#second">Especialidades</a></li>
							@if(auth()->check())
							<li><a href="#cta">Agendar Cita</a></li>
							<li><a href="#cta">Contactanos</a></li>
							<li><a href="{{route('historialusr')}}">Historial Clinico</a></li>
							<li><a href="{{ url('shop') }}">Tienda</a></li>
							@endif
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						@include('notificacion')
						<!-- Introduction -->
							@yield('contenido')

							
				<!-- Footer -->
					<footer id="footer">
						<section>
							<table>
								<tr>
									<h2>HORARIO DE ATENCION</h2>
								</tr>
								<tr>
									<center><td><b>LUNES A VIERNES</b></td></center>
									<center><td><b>10:00 am - 20:00 pm</b></td></center>
								</tr>
								<tr>
									<center><td><b>SABADO</b></td></center>
									<center><td><b>10:00 am - 15:00 pm</b></td></center>
								</tr>
							</table>
						
							<table>
								<tr>
								<h2>INFORMACION DE CONSULTORIO</h2>
								</tr>
									<tr>
									<center><td><b>Direccion</b></td></center>
									<center><td><b>Antonio Albarran #315 Col. Lazaro Cardenas, Toluca EDOMEX.</b></td></center>
									</tr>
									<tr>
									<center><td><b>Telefono</b></td></center>
									<center><td><b>725488585</b></td></center>
									</tr>
									<tr>
									<center><td><b>Email</d></td></center>
									<center><td><b>MALENY@GMAIL.COM</b></td></center>
									</tr>
							</table>
							<ul class="icons">
								<li><a href="#" class="icon brands fa-facebook-f alt"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon brands fa-instagram alt"><span class="label">Instagram</span></a></li>
							</ul>
						</section>
					</footer>
			</div>
		<!-- Scripts -->
			<script src="{{asset('assets/js/jquery.min.js')}}"></script>
			<script src="{{asset('assets/js/jquery.scrollex.min.js')}}"></script>
			<script src="{{asset('assets/js/jquery.scrolly.min.js')}}"></script>
			<script src="{{asset('assets/js/browser.min.js')}}"></script>
			<script src="{{asset('assets/js/breakpoints.min.js')}}"></script>
			<script src="{{asset('assets/js/util.js')}}"></script>
			<script src="{{asset('assets/js/main.js')}}"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	</body>
</html>