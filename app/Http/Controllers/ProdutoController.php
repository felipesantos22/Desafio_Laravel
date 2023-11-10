<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    //List
    public function index()
    {
        return Produto::all();
    }

    //Create
    public function store(Request $request)
    {
        $produto = Produto::create([
            'nome' => $request->input('nome'),
            'valor' => $request->input('valor'),
        ]);
        return $produto;
    }
}
