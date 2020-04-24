<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Servicios</title>



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
        </style>
    </head>
    <body>

        <div class="row justify-content-sm-center">
            @if (Route::has('login'))
                <div class="top-right links">
                <a class="btn btn-outline-secondary" href="{{URL::to('/')}}">Inicio</a>
                <a class="btn btn-outline-secondary" href="{{URL::to('Contact')}}">Contactenos</a>
                <a class="btn btn-outline-secondary" href="../pdfs/Proyecto_BIGDATA_2020_V1.pdf">Documentación App</a>
                    @auth
                    <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Portal de Usuarios</a>
                    @endauth
                </div>
            @endif

            <div class="container">
    <div class="content">
         <br>
         <br>
         <br>


    <div class="col-md-6">
        <img style="height: 700px;" src="{{ asset('Imagenes/Servicios.png') }}" alt="">
    </div>
    <div class="title m-b-md">
                <h1 style="font-size: 40px;font-family: Carlito; color:#65E0F3;">Web Scraping</h1>
    </div>
        <!-- Items-->
        <div class="d-flex flex-row">

          <table style="width: 70%;font-family: Arial;" align="center" cellpadding="0" cellspacing="0" >
                <td colspan="2" align="left"><p style="font-size: 15px; text-align: justify; line-height : 30px;font-family:'Arial', Times, serif;margin:0 auto"><center>
                Probablemente no sea la primera vez que escuches el término web scraping. Y si no, seguro que te lo has encontrado en alguna de sus otras formas, como data scraping, rastreo, scraping de datos, extracción de datos o, haciendo referencia a aplicaciones más concretas, como price mapping.
            </center>
                </p>
                </td>
            </table>

          </div>
        </div>
        <br>
        <!-- Items-->
        <div class="d-flex flex-row">
          <div class="p-4">
            <i class="fas fa-certificate"></i>
          </div>
          <div>
          <b><center>Elaborado por: Semillero de Investigación BigData</center></b>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
</section>
    </body>
</html>




