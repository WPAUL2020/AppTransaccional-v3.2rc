@extends('layouts.app')

@section('content')
<title>InstaHunters</title>
<a class="btn btn-outline-secondary" href="{{URL::to('appl')}}">MI PERFIL</a>
                   <a class="btn btn-outline-secondary" href="{{URL::to('appl')}}">MENSAJES</a>
                   <a class="btn btn-outline-secondary" href="{{URL::to('appl')}}">APPL</a>
                   <a class="btn btn-outline-secondary" href="{{URL::to('home')}}">HOME</a>
                   <br>
                   <br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center display-4">InstaHunters <i class="fas fa-spider"></i></div>
                <div class="card-body display-4">
                    <form method="POST" action="{{URL::to('instahunters/instahunters')}}" class="form-horizontal"> {{ csrf_field() }}
                         <div class="form-group row ">
                            <select name="campoSelect" class="form-control">
                                <option class="">Seleccionar..</option>
                                <option value="usuario">@Usuario</option>
                                <option value="hashtag">#Hashtag</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <input type="text" class="form-control form-control-lg" placeholder="Ingrese la palabra clave (username o hashtag)" name="palabraClave" required>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 offset-md-4">
                                <button href="#" type="submit" class="btn btn-outline-secondary pull-right btn-lg" name="buscar">
                                   Buscar <i class="fas fa-search"></i>
                                </button>
                            </form>
                            <a href="{{URL::to('instahunterview')}}" class="btn btn-outline-info pull-right btn-lg">
                                Vista previa <i class="fas fa-eye"></i>
                            </a>
                        </div>
                </div>
            </div>
            <center>
                <!-- Copyright -->
                <div class="footer-copyright text-center py-3">© 2020 Copyright:
                  <a href="https://universitariadecolombia.edu.co/programas/profesionales/ingenieria-de-sistemas/"> Semillero Ingenieria de Sistemas, Universitaria de Colombia. </a>
                </div>
            </center>
        </div>
    </div>
</div>
<footer>
    @if ($data2view!=null)
        <div>
            {!!$success!!}
        </div>
    @else
    <div>
    </div>
    @endif
</footer>
@endsection

