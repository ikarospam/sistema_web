<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{

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
