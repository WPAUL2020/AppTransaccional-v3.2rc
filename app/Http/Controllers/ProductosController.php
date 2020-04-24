<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
         /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function Productos()
    {
        return view('Productos');
    }
}
