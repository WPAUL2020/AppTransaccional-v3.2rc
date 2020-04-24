<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\GestionClientes as clientes;
use App\sector_empresa_tercero as SectorEmpresa;
use App\rol as rol;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected function validator(array $clientes)
    {
        return Validator::make($clientes, [
            'NOMBRE' => ['required', 'string', 'max:255'],
            'DIRECCION' => ['required', 'string', 'max:255'],
            'TELEFONO' => ['required', 'string', 'max:255'],
            'PAIS' => ['required', 'string', 'max:255'],
            'CIUDAD' => ['required', 'string', 'max:255'],
            'CORREO' => ['required', 'string', 'email', 'max:255'],
            'WEBSITE' => ['required', 'string', 'max:255'],
            'NIT' => ['required', 'string', 'max:255','unique:empresa_tercero'],
            'OBSERVACION' => ['required', 'string', 'max:255'],
        ]);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function Clientes()
    {
        if (Auth::check()){
            $clientes = Clientes::paginate(10);
            return view('Clientes') ->with("Clientes",$clientes);
        } else {
            return redirect('/login');
        }
    }

    public function InsertEmpresa()
    {
            $data = DB::select('EXEC InsertEmpresaTercero');
            dump($data);
    }

    public function guardar(Request $clientes)
    {
        $clientes = DB::select(
            'call InsertEmpresaTercero(?,?,?,?,?,?,?,?,?,?,?,?,?,?) ',
            array(
       $clientes -> ID_SECTOR_EMPRESA_TERCERO,
       $clientes -> NOMBRE,
       $clientes -> DIRECCION,
       $clientes -> TELEFONO,
       $clientes -> PAIS,
       $clientes -> CIUDAD,
       $clientes -> CORREO,
       $clientes -> WEBSITE,
       $clientes -> NIT,
       $clientes -> USUARIO,
       bcrypt($clientes -> CONTRASENA),
       $clientes -> ID_ROL,
       $clientes -> ESTADO,
       $clientes -> OBSERVACION));
       return Redirect('Clientes')->with("mensaje" , "Registro Exitoso");
   }

    public function GestionClientes()
    {
        if (Auth::check()) {
            $users1 = \App\GestionClientes::paginate(10);
            return view('GestionClientes')->with("users", $users1);
        } else {
            return redirect('/login');
        }
    }

    public function getFrmInsertEmpresa()
    {
     $roles = rol::all();
     $SectorEmpresas = SectorEmpresa::all();
        return view('clientes')->with(['roles'=>$roles, 'SectorEmpresas'=>$SectorEmpresas]);
    }

    public function changeEmpresa($ID_EMPRESA_TERCERO)
    {
        $clientes=clientes::find($ID_EMPRESA_TERCERO);
        $clientes -> DIRECCION  = $_POST["DIRECCION"];
        $clientes -> TELEFONO = $_POST["TELEFONO"];
        $clientes -> CIUDAD = $_POST["CIUDAD"];
        $clientes -> WEBSITE = $_POST["WEBSITE"];
        $clientes -> CORREO = $_POST["CORREO"];
        $clientes->  ESTADO =$_POST["ESTADO"];
        $clientes->save();
        return redirect('/Clientes')->with("mensaje", "Usuario Actualizado correctamente");
        //return $id;
    }

    public function updateEmpresa($ID_EMPRESA_TERCERO)
    {
        if (Auth::check()) {
            $clientes = clientes::find($ID_EMPRESA_TERCERO);
            $roles = rol::all();
            $rol = rol::all();
            $SectorEmpresa = SectorEmpresa::all();
        return view('GestionClientesEdit')->with(['roles'=>$roles, 'rol'=>$rol, 'clientes' =>$clientes, 'SectorEmpresa'=>$SectorEmpresa]);
    } else{
        return redirect('/GestionClientes');
         }
     }
}
