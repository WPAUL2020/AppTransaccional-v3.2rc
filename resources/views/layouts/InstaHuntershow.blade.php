<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!---Meta-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="InstHunters" />
    <meta name="author" content="" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('blogFrontend/assets/images/favicon.ico') }}">


    <title>InstaHuter Preview</title>



    <!-- Scripts -->
    <script src="{{ asset('blogFrontend/assets/js/jquery-1.11.3.min.js') }}" defer></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('blogFrontend/assets/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('blogFrontend/assets/css/font-icons/entypo/css/entypo.css') }}">
	<link rel="stylesheet" href="{{ asset('blogFrontend/assets/css/neon.css') }}">

</head>
<body>
    <div class="wrap">

        <!-- Logo and Navigation -->
    <div class="site-header-container container">

        <div class="row">

            <div class="col-md-12">

                <header class="site-header">

                    <section class="site-logo">

                        <a href="{{ url('/') }}">
                            <img src="{{ asset('Imagenes/logo.png') }}" width="120" />
                        </a>

                    </section>

                    <nav class="site-nav">

                        <ul class="main-menu hidden-xs" id="main-menu">
                            <li>
                                <a href="{{ url('/') }}">
                                    <span>Inicio</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{URL::to('Servicios')}}">
                                    <span>Sevicios</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{URL::to('Contact')}}">
                                    <span>Contactenos</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/home') }}">
                                    <span>Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('instahunters') }}">
                                    <span>InstaHunters <i class="fas fa-spider"></i></span>
                                </a>
                            </li>
                        </ul>


                        <div class="visible-xs">

                            <a href="#" class="menu-trigger">
                                <i class="entypo-menu"></i>
                            </a>

                        </div>
                    </nav>

                </header>

            </div>

        </div>

    </div>
        <!-- Breadcrumb -->
    <section class="breadcrumb">

        <div class="container">

            <div class="row">

                <div class="col-sm-9">

                    <h1>Vista Previa</h1>

                                <ol class="breadcrumb bc-3" >
                            <li>
                    <a href="{{ url('/home') }}"><i class="fas fa-home"></i> Home</a>
                </li>
                        <li>

                                <a href="{{ url('instahunters') }}">InstaHunters <i class="fas fa-spider"></i></a>
                        </li>
                    <li class="active">

                                <strong>Vista Previa <i class="fas fa-eye"></i></strong>
                        </li>
                        </ol>

                </div>

            </div>

        </div>

    </section>
@yield('content')

    <!-- Blog -->

	<!-- Bottom scripts (common) -->
	<script src="{{ asset('blogFrontend/assets/js/gsap/TweenMax.min.js') }}" defer></script>
	<script src="{{ asset('blogFrontend/assets/js/bootstrap.js') }}" defer></script>
	<script src="{{ asset('blogFrontend/assets/js/joinable.js') }}" defer></script>
	<script src="{{ asset('blogFrontend/assets/js/resizeable.js') }}" defer></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="{{ asset('blogFrontend/assets/js/neon-custom.js') }}" defer></script>
</body>
</html>
