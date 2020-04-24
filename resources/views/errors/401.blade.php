@extends('layouts.app')

@section('content')

<title>Big Data E-Commerce</title>
                   <a class="btn btn-outline-secondary" href="{{URL::to('GestionUser')}}">MI PERFIL</a>
                   <a class="btn btn-outline-secondary" href="{{URL::to('GestionUser')}}">MENSAJES</a>
                   <a class="btn btn-outline-secondary" href="{{URL::to('appl')}}">REGRESAR</a>
<br>
<BR>
<div class="container">
	<h1><center>Esta pagina no esta permitida para este rol</center></h1>
	<br>
	<br>
	<center><img src="{{ asset('Imagenes/Error401.png')}}" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
</div>
@endsection