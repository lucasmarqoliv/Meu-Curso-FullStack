<?php

namespace App\Http\Controllers;

use App\Models\Opcao;
use Illuminate\Http\Request;

class OpcoesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $opcoes = Opcao::all();

        return response()->json($opcoes, 201); // retorna uma resposta HTTP com os dados contidos na variável $categoria no formato JSON e um código de status 201, indicando que a operação de criação foi bem-sucedida.
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $opcoes = Opcao::create($request->all());

        return response()->json($opcoes, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $opcoes = Opcao::find($id);
        return response()->json($opcoes, 201);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $opcoes = Opcao::find($id);

        $opcoes->update($request->all());

        return response()->json($opcoes, 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $opcoes = Opcao::find($id);

        $opcoes->delete();

        return response()->json('Opção removida com sucesso!', 201);
    }
}
