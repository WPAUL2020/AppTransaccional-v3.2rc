@extends('layouts.app')

@section('content')

<title>Big Data E-Commerce</title>
                   <a class="btn btn-outline-secondary" href="{{URL::to('GestionUser')}}">MI PERFIL</a>
                   <a class="btn btn-outline-secondary" href="{{URL::to('GestionUser')}}">MENSAJES</a>
                   <a class="btn btn-outline-secondary" href="{{URL::to('appl')}}">Regresar</a>
<br>
<BR>
<div class="container">
   <table class="table table-striped text-center">
                   <tr><th class="text-center">SECTOR</th>
                       <th class="text-center">NOMBRE</th>
                       <th class="text-center">DIRECCION</th>
                       <th class="text-center">TELEFONO</th>
                       <th class="text-center">PAIS</th>
                       <th class="text-center">CORREO</th>
                       <th class="text-center">WEBSITE</th>
                       <th class="text-center">NIT</th>
                       <th class="text-center">OBSERVACION</th>
                       <th class="text-center">ACCIONES</th>
                   </tr>
                   @foreach($users as $users1)
                   <tr><td>{{ $users1->	ID_SECTOR_EMPRESA_TERCERO}}</td>
                       <td>{{ $users1->NOMBRE }}</td>
                       <td>{{ $users1->DIRECCION }}</td>
                       <td>{{ $users1->TELEFONO }}</td>
                       <td>{{ $users1->PAIS }}</td>
                       <td>{{ $users1->CORREO }}</td>
                       <td>{{ $users1->WEBSITE }}</td>
                       <td>{{ $users1->NIT }}</td>
                       <td>{{ $users1->OBSERVACION }}</td>
                       <td>
                            <a href="GestionClientesEdit/updateEmpresa/{{$users1->ID_EMPRESA_TERCERO}}">EDITAR</a>
                       </td>
                       </tr>
                   @endforeach

</table>
{!! $users->render() !!}
                <a class="btn btn-outline-secondary" href="{{URL::to('Clientes/agregar')}}">Agregar</a>
</div>
@endsection

