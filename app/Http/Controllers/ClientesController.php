<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function nuevo()
    {
        return view('sistema.cliente.new_cliente');
    }
    public function lista()
    {
        $cliente=DB::table('clientes')->get();

        return view('sistema.cliente.lista_cliente',['cliente' => $cliente]);
    }
}
