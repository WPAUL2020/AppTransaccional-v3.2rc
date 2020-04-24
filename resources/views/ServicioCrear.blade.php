@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="es_DO">
<head>
    <meta charset="UTF-8">
<title>Pagina de Contacto</title>
<title>Pagina de Contacto</title>
                   <br>
                   <br>
</head>

<body>
    <div class="container">
        <div class="row justify-content-sm-center">
            <div class="col-md-5">
                <h2> REGISTRO DE SERVICIOS</h2>
                <div class="form-row">
            </div>
        </div>
    </div>
    <form method="POST" action="{{URL::to('ServicioCrear/guardar')}}" class="form-horizontal"> {{ csrf_field() }}
  <div class="form-row">
    <div class="col">
    <label for="">Categoria:</label>
        <select name="ID_CATEGORIA" id="ID_CATEGORIA" class="form-control">
            @foreach($Categorias as $Categoria)
                <option value="{{$Categoria->ID_CATEGORIA}}">{{$Categoria->NOMBRE_CATEGORIA}}</option>
            @endforeach
        </select>
    </div>
    <div class="col">
    <label>Nombre del Servicio:</label>
    <input type="text" name="NOMBRE_PRODUCTO" class="form-control" placeholder="Nombre Servicio">
    </div>
    <div class="col">
    <label>Precio Unitario:</label>
    <input type="text" name="PRECIO_UNITARIO" class="form-control" placeholder="Precio Unitario">
    </div>
  </div>
  <br>
<div class="form-group">
                        <input type="submit" value="Registrar" class="btn btn-primary">
                        <a class="btn btn-outline-secondary" href="{{URL::to('Servicios')}}">Regresar</a>
                        </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
@endsection

