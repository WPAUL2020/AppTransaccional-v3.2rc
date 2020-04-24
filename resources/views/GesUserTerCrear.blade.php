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
            <div class="col-md-5">
                <h2> REGISTRO DE USUARIOS</h2>
                <div class="form-row">
            </div>
        </div>
    </div>
    <form method="POST" action="{{URL::to('GesUserTerCrear/guardar')}}"> {{ csrf_field() }}
  <div class="form-row">
    <div class="col">
    <label for="">Tipo de Identificaciòn:</label>
        <select name="ID_TIPO_INDENTIFICACION" id="ID_TIPO_INDENTIFICACION" class="form-control">
        <option value="">--Escoja Tipo de Identificacion--</option>
            @foreach($TipoIdents as $TipoIdent)
                <option value="{{$TipoIdent->NOMBRE_TIPO_INDENTIFICACION}}">{{$TipoIdent->NOMBRE_TIPO_INDENTIFICACION}}</option>
            @endforeach
        </select>
    </div>
    <div class="col">
    <label>Numero de Documento:</label>
    <input type="text" name="NUM_DOCUMENTO" class="form-control" placeholder="Numero de Documento">
    </div>
  </div>

  <div class="form-row">
    <div class="col">
    <label>Nombre Completo:</label>
    <input type="text" name="NOMBRE" class="form-control" placeholder="Nombre Completo">
    </div>
    <div class="col">
    <label>Direcciòn de Residencia:</label>
    <input type="text" name="DIRECCION" class="form-control" placeholder="Direcciòn">
    </div>
  </div>

  <div class="form-row">
    <div class="col">
    <label>Telefono:</label>
    <input type="phone" name="TELEFONO" class="form-control" placeholder="Telefono">
    </div>
    <div class="col">
    <label>Pais:</label>
    <input type="text" name="PAIS" class="form-control" placeholder="Pais" value="COLOMBIA">
    </div>
  </div>

  <div class="form-row">
    <div class="col">
    <label>Ciudad:</label>
    <input type="text" name="CIUDAD" class="form-control" placeholder="Ciudad">
    </div>
    <div class="col">
    <label>Correo Electronico:</label>
    <input type="email" name="CORREO" class="form-control" placeholder="Correo Electronico">
    </div>
  </div>

  <div class="form-row">
    <div class="col">
    <label>Telefono Oficina:</label>
    <input type="phone" name="TELEFONO_OFICINA" class="form-control" placeholder="Telefono de Oficina">
    </div>
    <div class="col">
    <label>Extenciòn:</label>
    <input type="phone" name="EXTENSION" class="form-control" placeholder="Extensiòn">
    </div>
  </div>

  <div class="form-row">
    <div class="col">
    <label>Usuario de Registro:</label>
    <input type="email" name="USUARIO" class="form-control" placeholder="Usuario de registro Correo">
    </div>
    <div class="col">
    <label for="inputEmail4">Password:</label>
    <input type="password" name="CONTRASENA" class="form-control" placeholder="Escribir Password">
    </div>
  </div>

  <div class="form-row">
    <div class="col">
    <label for="">Cargo del Funcionario:</label>
        <select name="ID_CARGO" id="ID_CARGO" class="form-control">
        <option value="">--Escoja Tipo de Cargo--</option>
            @foreach($cargos as $cargo)
                <option value="{{$cargo->NOMBRE_CARGO}}">{{$cargo->NOMBRE_CARGO}}</option>
            @endforeach
        </select>
    </div>
    <div class="col">
    <label for="">Rol del Funcionario:</label>
        <select name="ID_ROL" id="ID_ROL" class="form-control">
        <option value="">--Escoja Tipo de Rol--</option>
            @foreach($roles as $rol)
                <option value="{{$rol->NOMBRE_ROL}}">{{$rol->NOMBRE_ROL}}</option>
            @endforeach
        </select>
    </div>
    <div class="col">
    <label for="">Empresa:</label>
        <select name="ID_EMPRESA_TERCERO" id="ID_EMPRESA_TERCERO" class="form-control">
        <option value="">--Escoja la Empresa--</option>
            @foreach($EmpresaTerceros as $EmpresaTercero)
                <option value="{{$EmpresaTercero->ID_EMPRESA_TERCERO}}">{{$EmpresaTercero->NOMBRE}}</option>
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
    <label>Observaciones:</label>
    <textarea name="OBSERVACION" class="form-control" placeholder="Escribe tu Observación"></textarea>
  </div>

  <div class="form-row">
                    <div class="form-group">
                        <input type="submit" value="Registrar" class="btn btn-primary">
                        <a class="btn btn-outline-secondary" href="{{URL::to('UsuariosTercero')}}">Regresar</a>
                    </div>
  </div>

</form>
</body>
</html>
@endsection
