<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('dashmin-1.0.0/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashmin-1.0.0/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('dashmin-1.0.0/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('dashmin-1.0.0/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">



        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>SMILES</h3>
                            </a>
                            <h3>Inicia Sesion</h3>
                        </div>
                        <form class="mt-4" method="POST" action="">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Correo" id="correo">
                            @error('email')
                            <p class="error-message">Correo esta vacio </p>
            @enderror
                            <label for="email">Correo</label>
                 
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                            @error('password')
                            <p class="error-message">Campo de Contraseña  Esta Vacio </p>
            @enderror
                            <label for="password">Contraseña</label>
                           
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Enviar</button>
                        <p class="text-center mb-0">No tienes cuenta? <a href="{{ route('register.create') }}">Registrate</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('dashmin-1.0.0/lib/chart/chart.min.js')}}"></script>
    <script src="{{asset('dashmin-1.0.0/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('dashmin-1.0.0/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('dashmin-1.0.0/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('dashmin-1.0.0/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('dashmin-1.0.0/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('dashmin-1.0.0/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
</body>
<script>
    const $correo = document.querySelector("#correo");
    const patroncorreo = /[a-zA-Z/]+/;
    console.log($correo);
    $correo.addEventListener("keydown", event => {
        if (patroncorreo.test(event.key)) {
            document.getElementById('correo').style.border = "1px solid #00cc00";
        } else {
            if (event.keyCode == 8 || event.keyCode == 32) {} else {
                event.preventDefault();
            }
        }
    });
</script>

</html>