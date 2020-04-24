@extends('layouts.app')

@section('content')

<title>Big Data E-Commerce</title>
                   <a class="btn btn-outline-secondary" href="{{URL::to('GestionUser')}}">MI PERFIL</a>
                   <a class="btn btn-outline-secondary" href="{{URL::to('GestionUser')}}">MENSAJES</a>
                   <a class="btn btn-outline-secondary" href="{{URL::to('appl')}}">REGRESAR</a>
<br>
<BR>
<div class="container">
   <table class="table table-striped text-center">
                   <tr><th class="text-center">ID_SERVICIO</th>
                       <th class="text-center">ID_CATEGORIA</th>
                       <th class="text-center">NOMBRE_PRODUCTO</th>
                       <th class="text-center">PRECIO_UNITARIO</th>
                       <th class="text-center">ACCIONES</th>
                   </tr>
                   @foreach($Servicios as $users1)
                   <tr><td>{{ $users1->ID_SERVICIO}}</td>
                       <td>{{ $users1->ID_CATEGORIA}}</td>
                       <td>{{ $users1->NOMBRE_PRODUCTO}}</td>
                       <td>{{ $users1->PRECIO_UNITARIO }}</td>
                       <td>
                           <a href="">VER</a>
                           <a href="">EDITAR</a>
                       </td>
                       </tr>
                   @endforeach

</table>
{!! $Servicios->render() !!}
                <a class="btn btn-outline-secondary" href="{{URL::to('ServicioCrear/agregar')}}">Agregar</a>
</div>
@endsection
