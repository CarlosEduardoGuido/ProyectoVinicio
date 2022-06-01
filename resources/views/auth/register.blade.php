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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">



        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>SMILE'S</h3>
                            </a>
                            <h3>Registrate</h3>
                        </div>
                        <form class="mt-4" method="POST" action="">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />    
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
                            <label for="name">Nombre</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="numero" name="numero" placeholder="Numero">
                            <label for="numero">Numero</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion">
                            <label for="direccion">Direccion</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Correo">
                            <label for="email">Correo</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                            <label for="password">Contraseña</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirma Contraseña">
                            <label for="password_confirmation">Confirma Contraseña</label>
                        </div>
                        <br>
                        <div  class="g-recaptcha"   style=" @error('g-recaptcha-response') border: tomato 1px solid;@enderror" data-sitekey="6LfNocoaAAAAAImpuxs1HMFwgc1oHebl0dymqDxt"></div>
                        <input type="hidden" value="Correcto" name="avisodeprivacidad">
                        <input class="form-check-input" type="checkbox" name="" id="avisoSuccess">
                        <a href="{{ route('aviso') }}"><label >HE LEIDO Y ACEPTO LOS AVISOS DE PRIVACIDAD</label></a>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4" id="save" >Registrate</button>

                        <p class="text-center mb-0">Tienes una cuenta? <a href="{{ route('login.create') }}">Inicia sesion</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
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
    <script>
        const $avisoSuccess = document.querySelector("#avisoSuccess");
        var save = document.getElementById("save");
        save.disabled=true;

        $avisoSuccess.addEventListener("change", event => {
        if ($avisoSuccess.checked) {
            save.disabled=false;
        } else {
            save.disabled=true;
    }
});
    </script>
</body>

</html>
