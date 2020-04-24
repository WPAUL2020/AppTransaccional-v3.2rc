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
                <h2> <center>REGISTRO METODO DE PAGO</center></h2>
                <form method="POST" action="{{URL::to('MedioPagoCrear/guardar')}}" class="form-horizontal"> {{ csrf_field() }}
                <div class="form-group">
                <label>Digitar nmetodo de Pago</label>
                    <input type="text" name="METODO_PAGO" class="form-control" placeholder="NOMBRE METODO DE PAGO">
                     </div>
                    <div class="form-group">
                        <input type="submit" value="Registrar" class="btn btn-primary">
                        <a class="btn btn-outline-secondary" href="{{URL::to('MedioPagos')}}">Regresar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
