@extends('layouts.app')

@section('content')

<title>Big Data E-Commerce</title>
<link href="{{ asset("bootstrap/css/bootstrap.css")  }}" rel="stylesheet" />
                   <a class="btn btn-outline-secondary" href="{{URL::to('GestionUser')}}">MI PERFIL</a>
                   <a class="btn btn-outline-secondary" href="{{URL::to('GestionUser')}}">MENSAJES</a>
                   <a class="btn btn-outline-secondary" href="{{URL::to('appl')}}">REGRESAR</a>
<br>
<BR>
<div class="container">
   <table class="table table-striped text-center">
                   <tr>
                       <th class="text-center">ID</th>
                       <th class="text-center">NOMBRE</th>
                       <th class="text-center">E-MAIL</th>
                       <th class="text-center">PERFIL</th>
                       <th class="text-center">ROL</th>
                       <th class="text-center">ACCIONES</th>
                   </tr>
                   @foreach($users as $users1)
                   <tr>
                       <td>{{ $users1->id }}</td>
                       <td>{{ $users1->name }}</td>
                       <td>{{ $users1->email }}</td>
                       <td>{{ $users1->rol }}</td>
                       <td>{{ $users1->estado }}</td>
                       <td>
                           <a href="EditarUsuarios/updateUser/{{$users1->id}}">EDITAR</a>
                       </td>
                       </tr>
                   @endforeach

</table>
{!! $users->render() !!}
                <a class="btn btn-outline-secondary" href="{{URL::to('register')}}">Agregar</a>
</div>
@endsection
