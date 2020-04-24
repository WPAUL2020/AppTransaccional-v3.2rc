<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\EmpleadosInterno as EmpleadosInterno;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use App\rol as rol;
use App\cargo as cargo;
use App\TipoIdentificacion as TipoIdent;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class EmpleadosInternoController extends Controller
{

    public function Internos(Request $request)
    {
        $request->user()->authorizeRoles('ADMINISTRADOR');

    }

    public function InsertEmpleadoInternooInterno()
    {
         $data = DB::select('EXEC InsertEmpleadoInternoo');
         dump($data);
    }

    public function mostrarEmpleadosInt(Request $request)
    {
            $request->user()->authorizeRoles('ADMINISTRADOR');
            $empleados = EmpleadosInterno::paginate(10);
            return view('GestUserIntVista') ->with("empleados",$empleados);
    }

    public function AgregarEmpleadosInt()
    {
        if (Auth::check()) {
            $users1 = \App\EmpleadosInterno::paginate(10);
            return view('GestUserIntCrear')->with("empleados", $users1);
        } else {
            return redirect('/login');
        }
    }

    protected function validator(array $EmpleadosInterno)
    {
        return Validator::make($EmpleadosInterno, [
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
            'CONTRASENA' => ['required', 'string', 'min:8', 'confirmed'],
            'ID_CARGO' => ['required', 'string', 'max:255'],
            'ID_ROL' => ['required', 'string', 'max:255'],
            'OBSERVACION' => ['required', 'string', 'max:255'],
        ]);
    }

    public function guardar(Request $EmpleadosInterno)
    {
        $EmpleadosInterno = DB::select(
            'call InsertEmpleadoInternoo(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ',
            array(
       $EmpleadosInterno -> ID_TIPO_INDENTIFICACION,
       $EmpleadosInterno -> NUM_DOCUMENTO,
       $EmpleadosInterno -> NOMBRE,
       $EmpleadosInterno -> DIRECCION ,
       $EmpleadosInterno -> TELEFONO ,
       $EmpleadosInterno -> PAIS,
       $EmpleadosInterno -> CIUDAD,
       $EmpleadosInterno -> CORREO,
       $EmpleadosInterno -> TELEFONO_OFICINA,
       $EmpleadosInterno -> EXTENSION,
       $EmpleadosInterno -> USUARIO,
       bcrypt($EmpleadosInterno -> CONTRASENA),
       $EmpleadosInterno -> ID_CARGO,
       $EmpleadosInterno -> ID_ROL,
       $EmpleadosInterno -> OBSERVACION,
       $EmpleadosInterno -> ESTADO,));
       return Redirect('UsuariosInterno')->with('mensaje' , 'Registro Exitoso');
   }

   public function getFrmInsertInterno()
   {
    $roles = rol::all();
    $cargos = cargo::all();
    $TipoIdents = TipoIdent::all();
    return view('GestUserIntCrear')->with(['roles'=>$roles, 'cargos'=>$cargos, 'TipoIdents'=>$TipoIdents]);
   }

   public function changeUser($ID_EMPLEADO_INTERNO)
   {
       $EmpleadosInterno=EmpleadosInterno::find($ID_EMPLEADO_INTERNO);
       $EmpleadosInterno -> DIRECCION  = $_POST["DIRECCION"];
       $EmpleadosInterno -> TELEFONO = $_POST["TELEFONO"];
       $EmpleadosInterno -> CIUDAD = $_POST["CIUDAD"];
       $EmpleadosInterno -> CORREO = $_POST["CORREO"];
       $EmpleadosInterno -> TELEFONO_OFICINA = $_POST["TELEFONO_OFICINA"];
       $EmpleadosInterno -> EXTENSION = $_POST["EXTENSION"];
       $EmpleadosInterno -> ID_CARGO = $_POST["ID_CARGO"];
       $EmpleadosInterno -> ID_ROL = $_POST["ID_ROL"];
       $EmpleadosInterno -> OBSERVACION = $_POST["OBSERVACION"];
       $EmpleadosInterno->save();
       return redirect('/UsuariosInterno')->with("mensaje", "Usuario Actualizado correctamente");
       //return $id;
   }

   public function updateUser($ID_EMPLEADO_INTERNO)
   {
       if (Auth::check()) {
           $EmpleadosInterno = EmpleadosInterno::find($ID_EMPLEADO_INTERNO);
           $roles = rol::all();
           $cargos = cargo::all();
           $TipoIdents = TipoIdent::all();
       return view('GestUserIntEdit')->with(['roles'=>$roles, 'cargos'=>$cargos, 'TipoIdents'=>$TipoIdents, 'EmpleadosInterno' =>$EmpleadosInterno]);
   } else{
       return redirect('/GestUserIntVista');
        }
    }

}
