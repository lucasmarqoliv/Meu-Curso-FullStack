<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoria = Categoria::all();

        return response()->json([
                'Mensagem' => 'Categorias listadas com sucesso!',
                'dados' => $categoria
            ],200); // retorna uma resposta HTTP com os dados contidos na variável $categoria no formato JSON e um código de status 200, indicando que a operação de retorno foi bem-sucedida.
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
        $validacao = Validator::make($request->all(),[ //instancia de validação
            'nome' => 'required|string|max:190', // regras de validação
            'descricao' => 'nullable|string|max:190'
        ]);

        if($validacao->fails()){ //verifica se a validação falhou
            return response()->json([
                'mensagem' => 'Erro de validação',
                'erros' => $validacao->errors()//retorna uma coleção de mensagens de erro para cada campo que não passou na validação.
            ], 422); //requisição correta, mas não passou nas verificações.
        }

        $categoria = Categoria::create($request->all());
        return response()->json([
            'mensagem' => 'Categoria cadastrada com sucesso!',
            'dados' => $categoria
            ], 201); //código de status 201, indicando que a operação de criação foi bem-sucedida.
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categoria = Categoria::find($id);
        if(!$categoria) { //verificação de existencia de categoria
            return response()->json([
                'mensagem' => 'Categoria não encontrada'
            ], 404); //recurso não encontrado
        }
        return response()->json([
            'mensagem' => 'Categoria retornada com sucesso!',
            'dados' => $categoria
        ], 200);
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
        $categoria = Categoria::find($id);

        if(!$categoria){
            return response()->json([
                'mensagem' => 'Categoria não encontrada'
            ], 404);
        }

        $validacao = Validator::make($request->all(),[
            'nome' => 'required|string|max:190|filled',
            'descricao' => 'nullable|string|max:190'
        ]);

        if($validacao->fails()){
            return response()->json([
                'mensagem' => 'Erro de validação',
                'erros' => $validacao->errors()
            ], 422);
        }

        $categoria->update([
            'nome' => $request->nome,
            'descricao' => $request->descricao
        ]);

        return response()->json([
            'mensagem' => 'Categoria atualizada com sucesso!',
            'dados' => $categoria
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categoria = Categoria::find($id);
        if(!$categoria){
            return response()->json([
                'mensagem' => 'Categoria não encontrada'
            ], 404);
        }

        $categoria->delete();

        return response()->json([
            'mensagem' =>  'Categoria removida com sucesso!'
        ], 201);
    }
}
