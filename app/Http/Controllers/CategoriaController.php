<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Categoria as Categoria;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{
    public function mostrarCategoria()
    {
        if (Auth::check()){
            $Categorias = \App\Categoria::paginate(20);
            return view('CategoriaVista') ->with("Categorias",$Categorias);
        } else {
            return redirect('/login');
        }
    }

    public function AgregarCategoria()
    {
        if (Auth::check()) {
            $users1 = Categoria::paginate(10);
            return view('CategoriaCrear')->with("Categorias", $users1);
        } else {
            return redirect('/login');
        }
    }

    protected function validator(array $Categoria)
    {
        return Validator::make($Categoria, [
            'NOMBRE_CATEGORIA' => ['required', 'string', 'max:255'],
        ]);
    }

    public function InsertCategoria()
    {
            $data = DB::select('EXEC InsertCategoria');
            dump($data);
    }

   public function guardar(Request $Categoria)
   {
       $Categoria = DB::select(
           'call InsertCategoria(?) ',
           array(
      $Categoria -> NOMBRE_CATEGORIA));
      return Redirect('Categorias')->with("mensaje" , "Registro Exitoso");
  }

   public function __construct()
   {
       $this->middleware('auth');
   }
   public function getFrmInsertCategoria()
   {
       return view('CategoriaCrear');
   }
}
