<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Servicio as Servicio;
use App\Categoria as Categoria;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ServicioController extends Controller
{
    public function mostrarServicio()
    {
        if (Auth::check()){
            $Servicios = \App\Servicio::paginate(20);
            return view('ServicioVista') ->with("Servicios",$Servicios);
        } else {
            return redirect('/login');
        }
    }

    public function AgregarServicio()
    {
        if (Auth::check()) {
            $users1 = Servicio::paginate(10);
            return view('ServicioCrear')->with("Servicios", $users1);
        } else {
            return redirect('/login');
        }
    }

    protected function validator(array $Servicio)
    {
        return Validator::make($Servicio, [
            'NOMBRE_CATEGORIA' => ['required', 'string', 'max:255'],
        ]);
    }

    public function InsertServicio()
    {
            $data = DB::select('EXEC InsertServicio');
            dump($data);
    }

   public function guardar(Request $Servicios)
   {
       $Servicios = DB::select(
           'call InsertServicio(?,?,?) ',
           array(
      $Servicios -> ID_CATEGORIA,
      $Servicios -> NOMBRE_PRODUCTO,
      $Servicios -> PRECIO_UNITARIO ));
      return Redirect('Servicios')->with("mensaje" , "Registro Exitoso");
  }

   public function __construct()
   {
       $this->middleware('auth');
   }
   public function getFrmInsertServicio()
   {
       $Categorias = Categoria::all();
       return view('ServicioCrear')->with(['Categorias'=>$Categorias]);
   }
}
