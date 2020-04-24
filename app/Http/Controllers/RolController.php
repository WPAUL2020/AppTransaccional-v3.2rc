<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\role as Rol;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class RolController extends Controller
{

    public function mostrarRol()
    {
        if (Auth::check()){
            $roles = \App\rol::paginate(20);
            return view('RolVista') ->with("roles",$roles);
        } else {
            return redirect('/login');
        }
    }

    public function AgregarRol()
    {
        if (Auth::check()) {
            $users1 = rol::paginate(10);
            return view('RolCrear')->with("roles", $users1);
        } else {
            return redirect('/login');
        }
    }

    protected function validator(array $Rol)
    {
        return Validator::make($Rol, [
            'NOMBRE_ROL' => ['required', 'string', 'max:255'],
            'DESCRIPCION' => ['required', 'string', 'max:255'],
        ]);
    }

    public function InsertRol()
    {
            $data = DB::select('EXEC InsertRol');
            dump($data);
    }

   public function guardar(Request $Rol)
   {
       $Rol = DB::select(
           'call InsertRol(?,?,?) ',
           array(
      $Rol -> NOMBRE_ROL,
      $Rol -> DESCRIPCION,
      $Rol -> DEPENDENCIA));
      return Redirect('Roles')->with("mensaje" , "Registro Exitoso");
  }

   public function __construct()
   {
       $this->middleware('auth');
   }
   public function getFrmInsertRol()
   {
       return view('RolCrear');
   }
}
