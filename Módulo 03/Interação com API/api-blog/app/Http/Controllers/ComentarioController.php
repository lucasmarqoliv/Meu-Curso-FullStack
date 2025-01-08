<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comentario = Comentario::all();
        return response()->json($comentario, 201);
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
        $comentario = Comentario::create($request->all());

        return response()->json($comentario, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comentario = Comentario::find($id);

        return response()->json($comentario, 201);
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
        $comentario = Comentario::find($id);

        $comentario->update($request->all());

        return redirect()->route('post.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    try {
        $comentario = Comentario::find($id);

        if (!$comentario) {
            return redirect()->route('post.index')->with('error', 'Comentário não encontrado.');
        }

        $comentario->delete();
        return response()->json('Comentário removido com sucesso!', 201);
    } catch (\Exception $e) {
        return redirect()->route('post.index')->with('error', 'Ocorreu um erro ao deletar o comentário.');
    }
}

}
