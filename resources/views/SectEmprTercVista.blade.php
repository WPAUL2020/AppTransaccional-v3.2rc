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
                       <th class="text-center">SECTOR DE LA EMPRESA</th>
                       <th class="text-center">DESCRIPCION</th>
                   </tr>
                   @foreach($sector as $users1)
                   <tr><td>{{ $users1->ID_SECTOR_EMPRESA_TERCERO}}</td>
                       <td>{{ $users1->NOMBRE_SECTOR_EMPRESA_TERCERO}}</td>
                       <td>{{ $users1->DESCRIPCION}}</td>
                       </tr>
                   @endforeach

</table>
{!! $sector->render() !!}
                <a class="btn btn-outline-secondary" href="{{URL::to('SectEmprTerCrear/agregar')}}">Agregar</a>
</div>
@endsection
