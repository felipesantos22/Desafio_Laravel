<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    //List
    public function index()
    {
        return Cliente::all();
    }


    //Create
    public function store(Request $request)
    {
        $cliente = Cliente::create([
            'cpf' => $request->input('cpf'),
            'nome' => $request->input('nome'),
            'razao_social' => $request->input('razao_social'),
            'endereco' => $request->input('endereco'),
        ]);
        return $cliente;
    }
}
