<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ClienteController extends Controller
{

    //List
    public function index()
    {
        $cliente = Cliente::all();
        return view('welcome', compact('cliente'));
    }


    //Create
    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'cpf' => 'unique:cliente',
                'razao_social' => 'unique:cliente'
            ], [
                'cpf.unique' => 'O CPF já está em uso.',
                'razao_social.unique' => 'A Razão Social já está em uso.'
            ]);

            $cliente = Cliente::create($request->all());
            return $cliente;
        } catch (ValidationException $e) {
            return response()->json(['errors' => $e->validator->errors()], 422);
        }
    }


    //Delete
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        if ($cliente) {
            $cliente->delete();
            return redirect('/');
        }
        return view('welcome', compact('cliente'));
    }
}
