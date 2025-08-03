<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <!-- Estilos -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
</head>
<body>

    {{-- Header reutilizable --}}
    @include('layouts.header')

    {{-- Contenido específico de cada vista --}}
      <!-- Start Banner 
    ============================================= -->
    <div class="banner-area circle-shape text-center auto-height text-light heading-capitalized bg-gradient">
        <div class="shape-left-bottom">
            <img src="assets/img/shape/bg-3.png" alt="Shape">
        </div>
        <div class="container">
            <div class="content-box">
                <div class="row align-center">
                    <div class="col-lg-8 offset-lg-2 info">
                        <h2 class="wow fadeInDown" data-wow-duration="1s">
                            <strong>Impulsa tu rendimiento</strong> con tecnología de alto nivel
                        </h2>
                        <a class="btn circle btn-md btn-light effect wow fadeInUp" data-wow-duration="1.8s"
                            href="/productos">Explora nuestra tienda</a>
                    </div>

                    <div class="col-lg-8 offset-lg-2 wow fadeInRight" data-wow-duration="1s">
                        <div class="thumb-innner">
                            <img src="https://d2ln05ulrd319s.cloudfront.net/wp-content/uploads/2022/11/chica_resultado.webp"
                                alt="Thumb">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    {{-- Scripts --}}
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>

