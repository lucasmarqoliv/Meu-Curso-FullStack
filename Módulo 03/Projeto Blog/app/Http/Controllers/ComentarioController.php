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
        return view('posts.index', compact('comentario'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $comentario = Comentario::create($request->all());

        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comentario = Comentario::find($id);
        return view('comentarios.edit', compact('comentario'));
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
        return redirect()->route('post.index')->with('success', 'Comentário deletado com sucesso.');
    } catch (\Exception $e) {
        return redirect()->route('post.index')->with('error', 'Ocorreu um erro ao deletar o comentário.');
    }
}

}
