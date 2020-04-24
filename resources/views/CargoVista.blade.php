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
                       <th class="text-center">NOMBRE_CARGO</th>
                       <th class="text-center">DESCRIPCION</th>
                   </tr>
                   @foreach($cargo as $users1)
                   <tr><td>{{ $users1->ID_CARGO}}</td>
                       <td>{{ $users1->NOMBRE_CARGO}}</td>
                       <td>{{ $users1->DESCRIPCION}}</td>
                       </tr>
                   @endforeach

</table>
{!! $cargo->render() !!}
                <a class="btn btn-outline-secondary" href="{{URL::to('CargoCrear/agregar')}}">Agregar</a>
</div>
@endsection
