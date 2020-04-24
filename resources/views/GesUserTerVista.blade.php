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
                   <tr><th class="text-center">NOMBRE</th>
                       <th class="text-center">TIPO DE DOCUMENTO</th>
                       <th class="text-center">NUM_DOCUMENTO</th>
                       <th class="text-center">DIRECCION</th>
                       <th class="text-center">TELEFONO</th>
                       <th class="text-center">EXTENSION</th>
                       <th class="text-center">USUARIO</th>
                       <th class="text-center">ACCIONES</th>
                   </tr>
                   @foreach($empleados as $users1)
                   <tr><td>{{ $users1->NOMBRE}}</td>
                       <td>{{ $users1->TIPO_DOCUMENTO}}</td>
                       <td>{{ $users1->NUM_DOCUMENTO}}</td>
                       <td>{{ $users1->DIRECCION }}</td>
                       <td>{{ $users1->TELEFONO}}</td>
                       <td>{{ $users1->EXTENSION}}</td>
                       <td>{{ $users1->USUARIO}}</td>
                       <td>
                           <a a href="GesUserTerEdit/updateUser/{{$users1->ID_EMPLEADO_TERCERO}}">EDITAR</a>
                       </td>
                       </tr>
                   @endforeach

</table>
{!! $empleados->render() !!}
                <a class="btn btn-outline-secondary" href="{{URL::to('GesUserTerCrear/agregar')}}">Agregar</a>
</div>
@endsection
