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
        <div class="row justify-content-sm-center">
            <div class="col-md-5">
                <h2> <center>REGISTRO DE CARGOS</center></h2>
                <form method="POST" action="{{URL::to('CargoCrear/guardar')}}" class="form-horizontal"> {{ csrf_field() }}
                <div class="col">
                <div class="form-group">
                    <label>Cargo a Registrar</label>
                    <input type="text" name="NOMBRE_CARGO" class="form-control" placeholder="Nombre del Cargo">
                     </div>
                    <div class="form-group">
                    <label>Dependencia del Cargo</label>
                        <select type="" name="DEPENDENCIA" class="form-control">
                                <option></option>
                                <option>TIC</option>
                                <option>ADMINISTRACION</option>
                                <option>OPERACION</option>
                                <option>DIRECCION</option>
                       </select>
                    </div>
                    <div class="form-group">
                    <label>Descripciòn:</label>
                    <input type="text" name="DESCRIPCION" class="form-control" placeholder="Descripciòn">
                     </div>
                    <div class="form-group">
                        <input type="submit" value="Registrar" class="btn btn-primary">
                        <a class="btn btn-outline-secondary" href="{{URL::to('Cargos')}}">Regresar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
