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
                   <tr><th class="text-center">ID</th>
                       <th class="text-center">MEDIO DE PAGO</th>
                       <th class="text-center">ACCIONES</th>
                   </tr>
                   @foreach($MedioPagos as $users1)
                   <tr><td>{{ $users1->ID_PAGO}}</td>
                       <td>{{ $users1->METODO_PAGO}}</td>
                       <td>
                           <a href="">VER</a>
                           <a href="">EDITAR</a>
                       </td>
                       </tr>
                   @endforeach

</table>
{!! $MedioPagos->render() !!}
                <a class="btn btn-outline-secondary" href="{{URL::to('MedioPagoCrear/agregar')}}">Agregar</a>
</div>
@endsection
