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
                       <th class="text-center">NOMBRE DEL ROL</th>
                       <th class="text-center">DESCRIPCION</th>
                       <th class="text-center">DEPENDENCIA</th>
                       <th class="text-center">ACCIONES</th>
                   </tr>
                   @foreach($roles as $users1)
                   <tr><td>{{ $users1->ID_ROL}}</td>
                       <td>{{ $users1->NOMBRE_ROL}}</td>
                       <td>{{ $users1->DESCRIPCION}}</td>
                       <td>{{ $users1->DEPENDENCIA}}</td>
                       <td>
                           <a href="">VER</a>
                           <a href="">EDITAR</a>
                       </td>
                       </tr>
                   @endforeach

</table>
{!! $roles->render() !!}
                <a class="btn btn-outline-secondary" href="{{URL::to('RolCrear/agregar')}}">Agregar</a>
</div>
@endsection
