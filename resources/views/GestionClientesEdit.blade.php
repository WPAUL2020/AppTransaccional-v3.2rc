@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="es_DO">
<head>
    <meta charset="UTF-8">
<title>Pagina de Contacto</title>
                   <br>
                   <br>
</head>

<body>
<div class="container">
    <div class="row">
            <div class="">
                <h2> EDITAR EMPRESA</h2>
                <div class="form-row">
            </div>
        </div>
    </div>
    <form method="POST" action="{{ URL:: to("GestionClientes/changeEmpresa/$clientes->ID_EMPRESA_TERCERO") }}"> {{ csrf_field() }}
  <div class="form-row">
    <div class="col">
    <label>Direcciòn de la Compañia:</label>
    <input type="text" name="DIRECCION" class="form-control" placeholder="Direcciòn">
    </div>
    <div class="col">
    <label>Telefono de la Compañia</label>
    <input type="phone" name="TELEFONO" class="form-control" placeholder="Telefono">
    </div>
  </div>

  <div class="form-row">
    <div class="col">
    <label>Ciudad:</label>
    <input type="text" name="CIUDAD" class="form-control" placeholder="Ciudad">
    </div>
    <div class="col">
    <label>Sitio Web:</label>
    <input type="text" name="WEBSITE" class="form-control" placeholder="Sitio Web">
    </div>
    <div class="col">
    <label>Correo Electronico:</label>
    <input type="email" name="CORREO" class="form-control" placeholder="Correo Electronico">
    </div>
    <div class="col">
    <label>Estado:</label>
    <select name="ESTADO"class="form-control">
    <option value="">--Escoja Estado--</option>
            <option value="ACTIVO">ACTIVO</option>
            <option value="DESACTIVADO">DESACTIVADO</option>
    </select>
  </div>
  </div>
<br>
  <div class="form-row">
                    <div class="col">
                        <input type="submit" value="Guardar" class="btn btn-primary">
                        <a class="btn btn-outline-secondary" href="{{URL::to('Clientes')}}">Regresar</a>
  </div>
  </div>
</form>
</body>
</html>
@endsection
