<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use Illuminate\Support\Facades\Validator;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tag::all();

        return response()->json([
            'mensagem' => 'Tags listadas com sucesso!',
            'dados' => $tags
        ], 200);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validacao = Validator::make($request->all(),[
            'nome' => 'required|string|max:190'
        ]);

        if ($validacao->fails()){
            return response()->json([
                'mensagem' => 'Erro de validação',
                'erros' => $validacao->errors()
            ], 422);
        }

        $tag = Tag::create($request->all());

        return response()->json([
            'mensagem' => 'Tag cadastrada com sucesso!',
            'dados' => $tag
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tag = Tag::find($id);
        if (!$tag){
            return response()->json([
                'mensagem' => 'Tag não encontrada!'
            ], 404);
        }

        return response()->json([
            'mensagem' => 'Tag retornada com sucesso',
            'dados' => $tag
        ], 200);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tag = Tag::find($id);

        if (!$tag){
            return response()->json([
                'mensagem' => 'Tag não encontrada!'
            ], 404);
        }

        $validacao = Validator::make($request->all(),[
            'nome' =>'required|string|max:190'
        ]);

        if($validacao->fails()){
            return response()->json([
                'mensagem' => 'Erro de validação!',
                'erros' => $validacao-> errors()
            ], 422);
        }

        $tag->update($request->all());

        return response()->json([
            'mensagem' => 'Tag atualizada com sucesso!',
            'dados' => $tag
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tag = Tag::find($id);
        if (!$tag){
            return response()->json([
                'mensagem' => 'Tag não encontrada!'
            ], 404);
        }

        $tag->delete();

        return response()->json(['mensagem' => 'Tag removida com sucesso!'], 201);
    }
}
