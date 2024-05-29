<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function cadastrar(Request $request)
    {
        $dados = $request->all();
        return view('contato', ['dados' => $dados]);
    }
}
