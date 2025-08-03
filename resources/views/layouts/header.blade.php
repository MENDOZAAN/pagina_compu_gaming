<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Digilab - SEO & Digital Marketing Agency Template">

    <!-- ========== Page Title ========== -->
    <title>@yield('title', default: 'Compu Gaming')</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/flaticon-set.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/bootsnav.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap"
        rel="stylesheet">

</head>

<body class="cornflower-blue">

    <!-- Preloader Start -->
    <div id="site-preloader" class="site-preloader">
        <div class="loader-wrap">
            <div class="ring">
                <span></span>
            </div>
            <h2>Compu Gaming</h2>
        </div>
    </div>
    <!-- Preloader Ends -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default attr-bg navbar-fixed white no-background bootsnav">

            <!-- Start Top Search -->
            <div class="container-full">
                <div class="row">
                    <div class="top-search">
                        <div class="input-group">
                            <form action="#">
                                <input type="text" name="text" class="form-control" placeholder="Search">
                                <button type="submit">
                                    <i class="ti-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container-full">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav extra-color">
                    <ul>
                        <li class="search"><a href="#"><i class="fas fa-search"></i></a></li>
                        <li class="side-menu"><a href="#"><i class="fas fa-th-large"></i></a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('assets/img/logo/Logo grande blanco.png') }}" class="logo logo-display"
                            alt="Logo" style="height: 50px;">
                        <img src="{{ asset('assets/img/logo/Logo grande.png') }}" class="logo logo-scrolled" alt="Logo"
                            style="height: 50px;">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->

                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-center" data-in="#" data-out="#">
                        <!-- Categorías principales -->
                        <li><a href="/contacto">Inicio</a></li>

                        <li class="dropdown">
                            <a href="{{ route('tienda') }}" class="dropdown-toggle active"
                                data-toggle="dropdown">Tienda</a>
                            <ul class="dropdown-menu">
                                <li><a href="/productos/laptops"><i class="fas fa-laptop"></i> Laptops</a></li>

                                <li><a href="/productos/computadoras"><i class="fas fa-desktop"></i> Computadoras de
                                        Escritorio</a></li>

                                <li><a href="/productos/impresoras"><i class="fas fa-print"></i> Impresoras</a></li>

                                <li><a href="/productos/tablets"><i class="fas fa-tablet-alt"></i> Tablets

                                <li><a href="/productos/proyectores"><i class="fas fa-video"></i> Proyectores</a></li>

                            </ul>

                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Periféricos</a>
                            <ul class="dropdown-menu">
                                <li><a href="/productos/teclados"><i class="fas fa-keyboard"></i> Teclados</a></li>
                                <li><a href="/productos/mouse"><i class="fas fa-mouse-pointer"></i> Mouse</a></li>
                                <li><a href="/productos/monitores"><i class="fas fa-desktop"></i> Monitores</a></li>
                                <li><a href="/productos/audifonos"><i class="fas fa-headphones-alt"></i> Audífonos</a>
                                </li>
                                <li><a href="/productos/webcams"><i class="fas fa-video"></i> Webcams</a></li>
                                <li><a href="/productos/sillas-gamer"><i class="fas fa-couch"></i> Sillas Gamer</a></li>

                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">PCs Armadas</a>
                            <ul class="dropdown-menu">
                                <li><a href="/pc-gamer"><i class="fas fa-gamepad"></i> PC Gamer</a></li>
                                <li><a href="/pc-oficina"><i class="fas fa-briefcase"></i> PC Oficina</a></li>
                                <li><a href="/pc-streaming"><i class="fas fa-video"></i> PC Streaming</a></li>
                                <li><a href="/pc-creator"><i class="fas fa-pen-nib"></i> PC para Creadores</a></li>

                            </ul>
                        </li>


                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nosotros</a>
                            <ul class="dropdown-menu">
                                <li><a href="/nosotros">¿Quiénes somos?</a></li>
                                <li><a href="/garantia">Garantía y Soporte</a></li>
                                <li><a href="/preguntas-frecuentes">Preguntas Frecuentes</a></li>
                                <li><a href="/contacto">Contáctanos</a></li>
                            </ul>
                        </li>

                        <li><a href="/contacto">Contacto</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>

            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="ti-close"></i></a>

                <!-- Contacto rápido -->
                <div class="widget">
                    <h4 class="title">Contáctanos</h4>
                    <p>
                        ¿Tienes dudas? Escríbenos por WhatsApp, correo o visítanos en tienda. Estamos para ayudarte a
                        armar tu próxima PC.
                    </p>
                    <a href="https://wa.me/51999999999" class="btn btn-theme effect btn-sm"
                        data-animation="animated slideInUp">
                        <i class="fab fa-whatsapp"></i> Escríbenos
                    </a>
                </div>

                <!-- Información adicional -->
                <div class="widget">
                    <h4 class="title">Enlaces útiles</h4>
                    <ul>
                        <li><a href="/nosotros">¿Quiénes somos?</a></li>
                        <li><a href="/garantia">Garantía</a></li>
                        <li><a href="/preguntas-frecuentes">Preguntas Frecuentes</a></li>
                        <li><a href="/login">Iniciar Sesión</a></li>
                        <li><a href="/register">Registrarse</a></li>
                    </ul>
                </div>

                <!-- Redes sociales -->
                <div class="widget social">
                    <h4 class="title">Síguenos</h4>
                    <ul class="link">
                        <li class="facebook"><a href="https://facebook.com/tuempresa" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li class="instagram"><a href="https://instagram.com/tuempresa" target="_blank"><i
                                    class="fab fa-instagram"></i></a></li>
                        <li class="tiktok"><a href="https://tiktok.com/@tuempresa" target="_blank"><i
                                    class="fab fa-tiktok"></i></a></li>
                        <li class="youtube"><a href="https://youtube.com/@tuempresa" target="_blank"><i
                                    class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>

                <!-- Dirección -->
                <div class="widget">
                    <h4 class="title">Dirección</h4>
                    <p>
                        Amazonas #549 Huancayo, Junin, Perú<br>
                        Lunes a Sábado 09:00 a.m. - 8:00 p.m. y Domingos de 10:00 a.m. - 6:00 p.m.
                    </p>
                </div>
            </div>
            <!-- End Side Menu -->


        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->





    <!-- jQuery Frameworks
============================================= -->
    <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/equal-height.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.custom.13711.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/progress-bar.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/count-to.js') }}"></script>
    <script src="{{ asset('assets/js/YTPlayer.min.js') }}"></script>
    <script src="{{ asset('assets/js/progresscircle.js') }}"></script>
    <script src="{{ asset('assets/js/bootsnav.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>


</body>

</html>