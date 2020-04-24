<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\sector_empresa_tercero as Sector;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class SectorEmpresaTerceroController extends Controller
{
    public function mostrarSector()
    {
        if (Auth::check()){
            $sector = Sector::paginate(10);
            return view('SectEmprTercVista') ->with("sector",$sector);
        } else {
            return redirect('/login');
        }
    }

    public function AgregarSector()
    {
        if (Auth::check()) {
            $users1 = Sector::paginate(10);
            return view('SectEmprTerCrear')->with("sector", $users1);
        } else {
            return redirect('/login');
        }
    }

    protected function validator(array $Sector)
    {
        return Validator::make($Sector, [
            'NOMBRE_SECTOR_EMPRESA_TERCERO' => ['required', 'string', 'max:255'],
            'DESCRIPCION' => ['required', 'string', 'max:255'],
        ]);
    }

    public function InsertRol()
    {
            $data = DB::select('EXEC InsertSectorEmpresaTercero');
            dump($data);
    }

   public function guardar(Request $Sector)
   {
       $Sector = DB::select(
           'call InsertSectorEmpresaTercero(?,?) ',
           array(
      $Sector -> NOMBRE_SECTOR_EMPRESA_TERCERO,
      $Sector -> DESCRIPCION));
      return Redirect('Sector')->with("mensaje" , "Registro Exitoso");
  }

  public function getFrmInsertSector()
  {
      return view('SectEmprTerCrear');
  }

   public function __construct()
   {
       $this->middleware('auth');
   }
}
