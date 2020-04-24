<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\MedioPago as MedioPago;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class MedioPagoController extends Controller
{
    public function mostrarMedioPago()
    {
        if (Auth::check()){
            $MedioPagos = \App\MedioPago::paginate(20);
            return view('MedioPagoVista') ->with("MedioPagos",$MedioPagos);
        } else {
            return redirect('/login');
        }
    }

    public function AgregarMedioPago()
    {
        if (Auth::check()) {
            $users1 = MedioPago::paginate(10);
            return view('MedioPagoCrear')->with("roles", $users1);
        } else {
            return redirect('/login');
        }
    }

    protected function validator(array $MedioPago)
    {
        return Validator::make($MedioPago, [
            'METODO_PAGO' => ['required', 'string', 'max:255'],
        ]);
    }

    public function InsertMedioPago()
    {
            $data = DB::select('EXEC InsertModoPago');
            dump($data);
    }

   public function guardar(Request $MedioPago)
   {
       $MedioPago = DB::select(
           'call InsertModoPago(?) ',
           array(
      $MedioPago -> METODO_PAGO));
      return Redirect('MedioPagos')->with("mensaje" , "Registro Exitoso");
  }

   public function __construct()
   {
       $this->middleware('auth');
   }
   public function getFrmInsertMedioPago()
   {
       return view('MedioPagoCrear');
   }
}
