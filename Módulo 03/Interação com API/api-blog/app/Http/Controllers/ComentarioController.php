<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comentario = Comentario::all();

        if ($comentario->isEmpty()){ // para verificar se a coleção de comentarios está vazia.
            return response()->json([
                'mensagem' => 'Não existem comentarios!'
            ], 404);
        }

        return response()->json([
            'mensagem' => 'Comentarios retornados com sucesso!',
            'dados' => $comentario
        ], 200);

        
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validacao = Validator::make($request->all(),[
            'texto' => 'required|string|max:190',
            'post_id' => 'required|integer|exists:post,id' // exists:posts,id: Esta regra de validação verifica se o valor do campo post_id existe na coluna id da tabela posts.
        ]);

        if($validacao->fails()){
            return response()->json([
                'mensagem' => 'Erro de validação',
                'erros' => $validacao->errors()
            ], 422);
        }

        $comentario = Comentario::create($request->all());

        return response()->json([
            'mensagem' => 'Comentário cadastrado com sucesso!',
            'dados' => $comentario
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comentario = Comentario::find($id);

        if(!$comentario) {
            return response()->json([
                'mensagem' => 'Comentário não encontrado!',
                'dados' => $comentario
            ], 404);
        }

        return response()->json([
            'mensagem' => 'Comentário retornado com sucesso!',
            'dados' => $comentario
        ], 200);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $comentario = Comentario::find($id);

        if(!$comentario){
            return response()->json([
                'mensagem' => 'Comentário não encontrado!'
            ], 404);
        }

        $validacao = Validator::make($request->all(),[
            'texto' => 'required|string|max:190',
        ]);

        if($validacao->fails()){
            return response()->json([
                'mensagem' => 'Erro de validação',
                'erros' => $validacao->errors()
            ], 422);
        }

        $comentario->update([
            'texto' => $request->texto,
        ]);

        return response()->json([
            'mensagem' => 'Comentário retornado com sucesso!',
            'dados' => $comentario
        ], 200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
        $comentario = Comentario::find($id);

        if (!$comentario) {
            return response()->json([
                'mensagem' => 'Comentário não encontrado!'
            ], 404);
        }

        $comentario->delete();
        return response()->json([
            'mensagem' => 'Comentário removido com sucesso!'
        ], 200);
}
}
