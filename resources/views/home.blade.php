@extends('layouts.app')

@section('content')
<title>Big Data E-Commerce</title>
                   <a class="btn btn-outline-secondary" href="{{URL::to('MI PERFIL')}}">MI PERFIL</a>
                   <a class="btn btn-outline-secondary" href="{{URL::to('MENSAJES')}}">MENSAJES</a>
                   <a class="btn btn-outline-secondary" href="{{URL::to('appl')}}">APPL</a>
                   <br>
                   <br>
                   <div>
                    <center><img  src="{{ asset('Imagenes/FotoPrincipal2.png') }}"/></center>
                    </div>
                    <div>
                        </br>
            <table style="width: 90%;font-family: Arial;" align="center" cellpadding="0" cellspacing="0" >
                <td colspan="2" align="left"><p style="font-size: 15px; text-align: justify; line-height : 30px;font-family:'Times New Roman', Times, serif;margin:0 auto">
                   Big data un concepto que ha conseguido popularizarse en la sociedad y que llego para quedarse, aunque hay un sin número de definiciones de la palabra “BIG DATA”, que varían para cada tipo de organizaciones, industrias y tipos de personas, veamos a continuación las definiciones más comunes:</br>
                   El término inglés Big Data hace referencia a todos aquellos conjuntos de datos cuyo tamaño supera la capacidad de búsqueda, captura, almacenamiento, gestión, análisis, transferencia, visualización o protección legal de las herramientas informáticas convencionales.</br>
                   Big Data según cita es el “tratamiento y análisis de enormes repositorios de datos,
                   tan desproporcionadamente grandes que resulta imposible tratarlos con las
                    herramientas de bases de datos y analíticas convencionales” (Dans, 2011).
                    Big Data es “un conjunto de datos cuyo tamaño está más allá de la capacidad de la
                    mayoría de los softwares utilizados para capturar, gestionar y procesar la información
                    dentro de un lapso tolerable de tiempo” (Gorka Armentia, 2018)
                    Pero no solo hace referencia al volumen de los datos, sino que esta gran
                    disponibilidad de datos necesita ser evaluados dentro de las siguientes dimensiones:
                    Volumen: Cada día, las empresas registran un aumento significativo de sus datos
                    (terabytes, petabytes y exabytes), creadospor personas y máquinas. En el año 2000
                    se generaron 800.000 petabytes (PB), de datos almacenados y se espera que esta
                    cifra alcance los 35 zettabytes (ZB) en el 2020. Las redes sociales también generan
                    datos, es el caso de Twitter, que por sí sola genera más de 7 terabytes (TB)
                    diariamente, y de Facebook, 10 TB de datos cada día. Algunas empresas generan
                    terabytes de datos cada hora de cada día del año, es decir, las empresas están
                    inundadas de datos.</br>
                   </p>
                </td>
    </table>
</div>
<div>
        <br>
        <b><center>Elaborado por: Semillero de Investigaciòn BigData</center></b>
        </div>

@endsection
