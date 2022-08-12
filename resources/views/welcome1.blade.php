@extends('plantilla.plantilla')
@section('contenido')
<section id="intro" class="main">
	@if(Session::has('estatus'))
<div class="alert alert-success alert-dismissible" role="alert">
    <p class="text-success">{{Session::get('estatus')}}</p>
</div>
@endif

								<div class="spotlight">
									<div class="content">
                                        <center>
										<header class="major">
											<h2><b>SMILE'S</b></h2>
										</header>
										<p><b>Somos tu mejor opcion para el cuidado de tu sonrisa</b></p>
										<img src="images/inicio.png" class="img-fluid" alt="...">
                                        </center>
									</div>
								</div>
							</section>
                            <!-- First Section -->
							<section id="first" class="main special">
								<header class="major">
									<h2>Quienes Somos</h2>
									<p>Somos un consultorio que tabajamos profesionalmente con todo tipo de trabajo referenciado con cuidados bucales.</p>
								</header>
								<ul class="features">
									<table>
										<li>
											<link rel="icos" href="dentista.png">
											<tr>
												<td><h3>VISION</h3></td>
												<hr>
												<td><p>Implantar y desarrollar un nuevo concepto de odontología multidisciplinar, capaz de ofertar y realizar todo tipo de tratamientos dentales, y teniendo como objetivos principales:</p></td>
												<td><p></p></td>
											</tr>
										</li>
										<li>
											<tr>
												<td><h3>MISION</h3></td>
												<hr>
												<td><p>Consultorio Dental Smile's, es una organización que pretende ser un referente a seguir dentro del sector de la odontología, por la calidad de su trabajo y por el trato humano.
												Para ello hacemos especial hincapié en el trato preferente a nuestros pacientes, poniendo todo nuestro saber hacer para solucionar de la forma mas satisfactoria sus problemas de salud dental.</p></td>
											</tr>
										</li>
										<li>
											<tr>
												<td><h3>VALORES</h3></td>
												<hr>
												<td><p>Los valores que Consultorio Dental Smile's promueve entre sus pacientes y empleados se pueden resumir en la búsqueda continua de resultados que satisfagan a todos los miembros de nuestra organización, siempre teniendo en cuenta a nuestros pacientes.
												Reconociendo como miembros a todos los colaboradores, empleados, proveedores, etc., que mes a mes colaboran o desarrollan su labor profesional en nuestro centro.</p></td>
											</tr>
										</li>
									</table>
								</ul>
							</section>
						<!-- Second Section -->
							<section id="second" class="main special">
								<header class="major">
									<table>
										<tr>
											<center><h2>Especialidades</h2></center>
										</tr>
										<div class="row row-cols-1 row-cols-md-3 g-4">
										<div class="col">
											<div class="card">
											<img src="images/maxilofacial_opt_opt.png"  class="card" style="height:200px;">
											<div class="card-body">
												<h5 class="card-title">CIRUGIA MAXILOFACIAL</h5>
											</div>
											</div>
										</div>
										<div class="col">
											<div class="card">
											<img src="images/ondontopediatria_opt.png" class="card" style="height:200px;">
											<div class="card-body">
												<h5 class="card-title">ODONTOPEDIATRA</h5>
											</div>
											</div>
										</div>
										<div class="col">
											<div class="card">
											<img src="images/endodoncia1.png" class="card" style="height:200px;">
											<div class="card-body">
												<h5 class="card-title">ENDODONCIA</h5>
											</div>
											</div>
										</div>
										<div class="col">
											<div class="card">
											<img src="images/ortodoncia.png" class="card" style="height:200px;">
											<div class="card-body">
												<h5 class="card-title">ORTODONCIA</h5>
											</div>
											</div>
										</div>
										<div class="col">
											<div class="card">
											<img src="images/estetica.png" class="card" style="height:200px;">
											<div class="card-body">
												<h5 class="card-title">ESTETICA</h5>
											</div>
											</div>
										</div>
										</div>
								</header>
							</section>
							<br>
						<!-- Get Started -->
							<section id="cta" class="main special">
								<header class="major">
									<h2>Agendar Cita</h2>
									<a button type="button" class="btn btn-outline-info" href="{{route('agendarCita')}}">AGENDAR CITA</button></a>
									
								</header>

<header>
	
	<form action="{{ route('enviar-emial') }}" method="GET"> 
		<form name="form" onsubmit="return checar()">

		{{ csrf_field() }}
		<table class="default">
		<h2>Contactanos</h2>
	
			<tr>
				<th>Nombre:</th>
				<td>
					<input type="text" name="nombre" id="nombre"  required>
					@error('nombre')
        <small>*{{$message}}</small>
         @enderror
				</td>
			</tr>
			<tr>
				<th>E-mail:</th>
				<td>
					<input type="email" name="email" id="email" required >
					@error('email')
        <small>*{{$message}}</small>
         @enderror
				</td>
			</tr>
			<tr>
				<th>Asunto:</th>
				<td>
					<input type="text" name="asunto" id="asunto" required >
					@error('asunto')
        <small>*{{$message}}</small>
         @enderror
				</td>
			</tr>
			<tr>
				<th>Escribe el mensaje:</th>
				<td>
					<textarea name="mensaje" id="mensaje" required></textarea>
					@error('mensaje')
        <small>*{{$message}}</small>
         @enderror
				</td>
			</tr>
			<tr>
				<td colspan="2">
				<center> <input type="submit" value="Enviar"></center>
				</td>
			</tr>
	
</header>
</section>
</div>	
</table><script>
      const $nombre = document.querySelector("#nombre");
    const patronName = /[a-zA-Z/]+/;
console.log($nombre);
    $nombre.addEventListener("keydown", event => {
        if (patronName.test(event.key)) {
            document.getElementById('nombre').style.border = "1px solid #00cc00";
        } else {
            if (event.keyCode == 8 || event.keyCode == 32) {} else {
                event.preventDefault();
            }
        }
    });
	const $email = document.querySelector("#email");
    const patronemail = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/;
console.log($email);
    $email.addEventListener("keydown", event => {
        if (patronemail.test(event.key)) {
            document.getElementById('email').style.border = "1px solid #00cc00";
        } else {
            if (event.keyCode == 8 || event.keyCode == 32) {} else {
                event.preventDefault();
            }
        }
    });
	const $asunto = document.querySelector("#asunto");
    const patronasunto = /[a-zA-Z/]+/;
console.log($asunto);
    $asunto.addEventListener("keydown", event => {
        if (patronasunto.test(event.key)) {
            document.getElementById('asunto').style.border = "1px solid #00cc00";
        } else {
            if (event.keyCode == 8 || event.keyCode == 32) {} else {
                event.preventDefault();
            }
        }
    });
	const $mensaje = document.querySelector("#mensaje");
    const patronmensaje = /[a-zA-Z/]+/;
console.log($mensaje);
    $mensaje.addEventListener("keydown", event => {
        if (patronmensaje.test(event.key)) {
            document.getElementById('mensaje').style.border = "1px solid #00cc00";
        } else {
            if (event.keyCode == 8 || event.keyCode == 32) {} else {
                event.preventDefault();
            }
        }
    });
</script>
</form>
@endsection