<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Cargo as Cargo;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class CargoController extends Controller
{
    public function mostrarCargo()
    {
        if (Auth::check()){
            $cargo = Cargo::paginate(10);
            return view('CargoVista') ->with("cargo",$cargo);
        } else {
            return redirect('/login');
        }
    }

    public function AgregarCargo()
    {
        if (Auth::check()) {
            $users1 = Cargo::paginate(10);
            return view('CargoCrear')->with("cargo", $users1);
        } else {
            return redirect('/login');
        }
    }

    protected function validator(array $Cargo)
    {
        return Validator::make($Cargo, [
            'NOMBRE_CARGO' => ['required', 'string', 'max:255'],
            'DESCRIPCION' => ['required', 'string', 'max:255'],
            'DEPENDENCIA' => ['required', 'string', 'max:255'],
        ]);
    }

    public function InsertCargo()
    {
            $data = DB::select('EXEC InsertCargo');
            dump($data);
    }

   public function guardar(Request $Cargo)
   {
       $Cargo = DB::select(
           'call InsertCargo(?,?,?) ',
           array(
      $Cargo -> NOMBRE_CARGO,
      $Cargo -> DESCRIPCION,
      $Cargo -> DEPENDENCIA));
      return Redirect('Cargos')->with("mensaje" , "Registro Exitoso");
  }

   public function __construct()
   {
       $this->middleware('auth');
   }
   public function getFrmInsertCargo()
   {
       return view('CargoCrear');
   }
}
