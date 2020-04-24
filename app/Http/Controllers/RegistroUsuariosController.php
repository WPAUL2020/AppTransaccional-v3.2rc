<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\GestionUserModel as usuarios;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class RegistroUsuariosController extends Controller
{
    protected function validator(array $usuarios)
    {
        return Validator::make($usuarios, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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
    public function guardar(Request $usuarios)
    {
            $usuarios = new usuarios;
            $usuarios -> name = $_GET['name'];
            $usuarios -> email = $_GET['email'];
            $usuarios -> password = $_GET['password'];
            /**'password' => Hash::make($data['password']),*/
            $usuarios ->save();
            return Redirect('GestionUser')->with("mensaje" , "usuarios $usuarios->NOMBRE Registro Exitoso");
    }

    /**protected function guardar(array $usuarios)
    {
        return User::create([
            'name' => $usuarios['name'],
            'email' => $usuarios['email'],
            'password' => Hash::make($usuarios['password']),
        ]);
    }*/
    public function usuarios()
    {
        if (Auth::check()){
            $usuarios = usuarios::paginate(10);
            return view('Registro') ->with("Registro",$usuarios);
        } else {
            return redirect('/login');
        }
    }

    public function load()
    {
        return view('GestionUser');
    }
}
