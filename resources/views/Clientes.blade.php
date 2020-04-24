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
                <h2> REGISTRO DE EMPRESAS</h2>
                <div class="form-row">
            </div>
        </div>
    </div>
    <form method="POST" action="{{URL::to('clientes/guardar')}}"> {{ csrf_field() }}
  <div class="form-row">
    <div class="col">
    <label for="">Tipo de Sector de La compañia:</label>
        <select name="ID_SECTOR_EMPRESA_TERCERO" id="ID_SECTOR_EMPRESA_TERCERO" class="form-control">
        <option value="">--Escoja Tipo de Sector de la Empresa--</option>
            @foreach($SectorEmpresas as $SectorEmpresa)
                <option value="{{$SectorEmpresa->NOMBRE_SECTOR_EMPRESA_TERCERO}}">{{$SectorEmpresa->NOMBRE_SECTOR_EMPRESA_TERCERO}}</option>
            @endforeach
        </select>
    </div>
    <div class="col">
    <label>Nombre Completo de la Compañia:</label>
    <input type="text" name="NOMBRE" class="form-control" placeholder="Nombre Completo">
    </div>
  </div>

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
    <label>Pais:</label>
    <input value="COLOMBIA" type="text" name="PAIS" class="form-control" placeholder="Pais" value="COLOMBIA">
    </div>
    <div class="col">
    <label>Ciudad:</label>
    <input type="text" name="CIUDAD" class="form-control" placeholder="Ciudad">
    </div>
  </div>

  <div class="form-row">
    <div class="col">
    <label>Correo Electronico:</label>
    <input type="email" name="CORREO" class="form-control" placeholder="Correo Electronico">
    </div>

    <div class="col">
    <label>Sitio Web:</label>
    <input type="text" name="WEBSITE" class="form-control" placeholder="Sitio Web">
    </div>
  </div>

  <div class="form-row">
    <div class="col">
    <label>NIT de la compañia:</label>
    <input type="text" name="NIT" class="form-control" placeholder="NIT de la compañia">
    </div>

  <div class="col">
    <label>Usuario:</label>
    <input type="email" name="USUARIO" class="form-control" placeholder="Usuario Correo">
  </div>

  <div class="col">
    <label>Contraseña:</label>
    <input type="password" name="CONTRASEÑA" class="form-control" placeholder="PASSWORD">
  </div>
  </div>


  <div class="form-row">
    <div class="col">
    <label for="">Rol del Propietario:</label>
        <select name="ID_ROL" id="ID_ROL" class="form-control">
        <option value="">--Escoja Tipo de Rol--</option>
            @foreach($roles as $rol)
                <option value="{{$rol->NOMBRE_ROL}}">{{$rol->NOMBRE_ROL}}</option>
            @endforeach
        </select>
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
  <div class="form-group">
  <div class="col">
    <label>Observaciones:</label>
    <textarea name="OBSERVACION" class="form-control" placeholder="Escribe tu Observación"></textarea>
  </div>
  </div>
  <div class="form-row">
                    <div class="form-group">
                        <input type="submit" value="Registrar" class="btn btn-primary">
                        <a class="btn btn-outline-secondary" href="{{URL::to('Clientes')}}">Regresar</a>
  </div>
  </div>
</form>
</body>
</html>
@endsection
