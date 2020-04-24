<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\GestionUserModel as Users;
use App\rol as rol;

class GestionUserController extends Controller
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
    public function GestionUser()
    {
        if (Auth::check()) {
            $users = \App\GestionUserModel::paginate(5);
            return view('GestionUser')->with("users", $users);
        } else {
            return redirect('/login');
        }
    }

    public function show($id)
    {

    }

   public function updateUser($id)
    {
        if (Auth::check()) {
            $users = Users::find($id);
        return view('GestionUserEdit')->with(array("users" =>$users));
    } else{
        return redirect('/GestionUser');
    }
    }

    public function changeUser($id)
    {
        $usuario=Users::find($id);
        $usuario -> name = $_POST["name"];
        $usuario->save();
        return redirect('/GestionUser')->with("mensaje", "Usuario Actualizado correctamente");
        //return $id;
    }

    public function CreateRol()
    {
        $roles = rol::all();
        return view('register', compact('roles'));
    }
 }
