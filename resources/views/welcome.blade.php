<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->


        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .m-md {
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                <a class="btn btn-outline-secondary" href="{{URL::to('/')}}">Inicio</a>
                <a class="btn btn-outline-secondary" href="{{URL::to('Servicios1')}}">Servicios</a>
                <a class="btn btn-outline-secondary" href="{{URL::to('Contact')}}">Contactenos</a>
                @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Portal de Usuarios</a>
                    @endauth
        </div>
            @endif
        <div class="container">
            <div class="content">
                <div class="title m-b-md">
                        <center>BIG DATA</center>
                </div>
            <img style="height: 400px;" src="{{ asset('Imagenes/logo.png') }}" alt="">
            <br>
            <br>
            <br>
            <div><b><center> Transforma tu empresa en un motor de   crecimiento para tu negocio</center></b>
        <br>
        <br>
        <br>
        <br>
        <br>

        <b><center>Elaborado por: Semillero de Investigación BigData</center></b>

            </div>
            </div>
        </div>
        </div>

    </body>
</html>
