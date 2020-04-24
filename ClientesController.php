<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\GestionClientes as clientes;
use Illuminate\Support\Facades\Redirect;

class ClientesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function guardar(Request $r)
     {
        $clientes = new clientes;
        $clientes -> NOMBRE = $_POST["NOMBRE"];
        $clientes -> DIRECCION = $_POST["DIRECCION"];
        $clientes -> TELEFONO = $_POST["TELEFONO"];
        $clientes -> PAIS = $_POST["PAIS"];
        $clientes -> CIUDAD = $_POST["CIUDAD"];
        $clientes -> CORREO = $_POST["CORREO"];
        $clientes -> WEBSITE = $_POST["WEBSITE"];
        $clientes -> NIT = $_POST["NIT"];
        $clientes -> OBSERVACION = $_POST["OBSERVACION"];
        $clientes ->save();
        return Redirect('clientes')->with("mensaje" , "cliente $clientes->customerNOMBRE Registro Exitoso");
    }

    public function Clientes()
    {
        if (Auth::check()){
            $clientes = Clientes::paginate(10);
            return view('Clientes') ->with("Clientes",$clientes);
        } else {
            return redirect('/login');
        }
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
}
