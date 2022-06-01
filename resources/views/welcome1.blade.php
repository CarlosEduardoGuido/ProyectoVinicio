@extends('plantilla.plantilla')
@section('contenido')
<section id="intro" class="main">
								<div class="spotlight">
									<div class="content">
                                        <center>
										<header class="major">
											<h2><b>SMILE'S</b></h2>
										</header>
										<p><b>Somos tu mejor opcion para el cuidado de tu sonrisa</b></p>
										<span class="logo"><img src="images/inicio.png" alt="" /></span>
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
										<tr>
											<th><h3>CIRUGIA MAXILOFACIAL</h3></th>
											<td><span class="logo"><img src="images/maxilofacial_opt_opt.png" alt="" /></span></td>
										</tr>
										<tr>
											<th><h3>ODONTOPEDIATRA</h3></th>
											<td><span class="logo"><img src="images/ondontopediatria_opt.png" alt="" /></span></td>
										</tr>
										<tr>
											<th><h3>ENDODONCIA</h3></th>
											<td><span class="logo"><img src="images/endodoncia1.png" alt="" /></span></td>
										</tr>
										<tr>
											<th><h3>ORTODONCIA</h3></th>
											<td><span class="logo"><img src="images/ortodoncia.png" alt="" /></span></td>
										</tr>
										<tr>
											<th><h3>ESTETICA</h3></th>
											<td><span class="logo"><img src="images/estetica.png" alt="" /></span></td>
										</tr>
									</table>
								</header>
							</section>
							<br>
							
						<!-- Get Started -->
							<section id="cta" class="main special">
								<header class="major">
									<h2>Agendar Cita</h2>
									<a button type="button" class="btn btn-outline-info" href="{{route('agendarCita')}}">AGENDAR CITA</button></a>
									
								</header>
							</section>
					</div>


@endsection