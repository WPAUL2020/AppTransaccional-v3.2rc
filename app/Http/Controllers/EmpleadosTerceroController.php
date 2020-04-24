<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\EmpleadosTercero as EmpleadosTercero;
use App\rol as rol;
use App\cargo as cargo;
use App\EmpresaTercero as EmpresaTercero;
use App\TipoIdentificacion as TipoIdent;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class EmpleadosTerceroController extends Controller
{
    public function mostrarEmpleadosTer()
    {
        if (Auth::check()){
            $empleados = EmpleadosTercero::paginate(10);
            return view('GesUserTerVista') ->with("empleados",$empleados);
        } else {
            return redirect('/login');
        }
    }

    public function InsertEmpleadoTercerorEmpleadosTer()
    {
            $data = DB::select('EXEC InsertEmpleadoTercero');
            dump($data);
    }

    protected function validator(array $EmpleadosTercero)
    {
        return Validator::make($EmpleadosTercero, [
            'TIPO_DOCUMENTO' => ['required', 'string', 'max:255'],
            'NUM_DOCUMENTO' => ['required', 'string', 'max:255'],
            'NOMBRE' => ['required', 'string', 'max:255'],
            'DIRECCION' => ['required', 'string', 'max:255'],
            'TELEFONO' => ['required', 'string', 'max:255'],
            'PAIS' => ['required', 'string', 'max:255'],
            'CIUDAD' => ['required', 'string', 'max:255'],
            'CORREO' => ['required', 'string', 'email', 'max:255'],
            'TELEFONO_OFICINA' => ['required', 'string', 'max:255'],
            'EXTENSION' => ['required', 'string', 'max:255'],
            'USUARIO' => ['required', 'string', 'max:255','unique:empresa_tercero'],
            'CONTRASENA' => ['required', 'string', 'max:255'],
            'ID_CARGO' => ['required', 'string', 'max:255'],
            'ID_ROL' => ['required', 'string', 'max:255'],
            'OBSERVACION' => ['required', 'string', 'max:255'],
        ]);
    }

    public function guardar(Request $EmpleadosTercero)
    {
        $EmpleadosTercero = DB::select(
            'call InsertEmpleadoTercero(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ',
            array(
       $EmpleadosTercero -> ID_TIPO_INDENTIFICACION,
       $EmpleadosTercero -> NUM_DOCUMENTO,
       $EmpleadosTercero -> NOMBRE,
       $EmpleadosTercero -> DIRECCION ,
       $EmpleadosTercero -> TELEFONO ,
       $EmpleadosTercero -> PAIS,
       $EmpleadosTercero -> CIUDAD,
       $EmpleadosTercero -> CORREO,
       $EmpleadosTercero -> TELEFONO_OFICINA,
       $EmpleadosTercero -> EXTENSION,
       $EmpleadosTercero -> OBSERVACION,
       $EmpleadosTercero -> USUARIO,
       bcrypt($EmpleadosTercero ->CONTRASENA),
       $EmpleadosTercero -> ESTADO,
       $EmpleadosTercero -> ID_CARGO,
       $EmpleadosTercero -> ID_ROL,
       $EmpleadosTercero -> ID_EMPRESA_TERCERO));
       return Redirect('UsuariosTercero')->with("mensaje" , "Registro Exitoso");
   }

   public function getFrmInsertTercero()
   {
    $roles = rol::all();
    $cargos = cargo::all();
    $TipoIdents = TipoIdent::all();
    $EmpresaTerceros = EmpresaTercero::all();
       return view('GesUserTerCrear')->with(['roles'=>$roles, 'cargos'=>$cargos, 'TipoIdents'=>$TipoIdents, 'EmpresaTerceros'=>$EmpresaTerceros]);
   }

   public function changeUser($ID_EMPLEADO_TERCERO)
   {
       $EmpleadosTercero=EmpleadosTercero::find($ID_EMPLEADO_TERCERO);
       $EmpleadosTercero -> DIRECCION  = $_POST["DIRECCION"];
       $EmpleadosTercero -> TELEFONO = $_POST["TELEFONO"];
       $EmpleadosTercero -> CIUDAD = $_POST["CIUDAD"];
       $EmpleadosTercero -> CORREO = $_POST["CORREO"];
       $EmpleadosTercero -> TELEFONO_OFICINA = $_POST["TELEFONO_OFICINA"];
       $EmpleadosTercero -> EXTENSION = $_POST["EXTENSION"];
       $EmpleadosTercero -> ID_CARGO = $_POST["ID_CARGO"];
       $EmpleadosTercero -> ID_ROL = $_POST["ID_ROL"];
       $EmpleadosTercero -> OBSERVACION = $_POST["OBSERVACION"];
       $EmpleadosTercero->save();
       return redirect('/UsuariosTercero')->with("mensaje", "Usuario Actualizado correctamente");
       //return $id;
   }

   public function updateUser($ID_EMPLEADO_TERCERO)
   {
       if (Auth::check()) {
           $EmpleadosTercero = EmpleadosTercero::find($ID_EMPLEADO_TERCERO);
           $roles = rol::all();
           $cargos = cargo::all();
           $TipoIdents = TipoIdent::all();
       return view('GesUserTerEdit')->with(['roles'=>$roles, 'cargos'=>$cargos, 'TipoIdents'=>$TipoIdents, 'EmpleadosTercero' =>$EmpleadosTercero]);
   } else{
       return redirect('/GesUserTerVista');
        }
    }
}
