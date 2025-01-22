<?php

namespace App\Http\Controllers;
use App\Models\Avaliacoes;
use App\Models\Categoria;
use App\Models\Tag;
use App\Models\Post;
use App\Models\Comentario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('comentarios', 'avaliacoes', 'categoria', 'tags')->get(); //aqui carrega os posts junto com seus comentarios. e 'comentarios' é o nome do relacionamento no model Post.
        // o get executa a consulta ao banco de dados e retorna todos os registros que correspondem à consulta. O resultado é uma coleção de objetos Post, cada um com seus comentários carregados.

        if ($posts->isEmpty()){ // para verificar se a coleção de posts está vazia.
            return response()->json([
                'mensagem' => 'Não existem posts!'
            ], 404);
        }

        // dd($posts);
        return response()->json([
            'Mensagem' => 'Posts listados com sucesso!',
            'dados' => $posts
            ], 200);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$foto = $request->foto->store('fotos', 'public');
        $foto = null;

        $validacao = Validator::make($request->all(),[
            'titulo' => 'required|string|max:190',
            'conteudo' => 'required|string|max:190',
            'categoria_id' => 'required|integer|exists:categoria,id',
            'tags_id' => 'required|integer|exists:tags,id'
        ]);

        if ($validacao->fails()){
            return response()->json([
                'mensagem' => 'Erro de validação',
                'erros' => $validacao->errors()
            ], 422);
        }

        $post = Post::create([ //  O array passado para o método create especifica os valores dos atributos do novo registro.
            'titulo' => $request->titulo, // name do input
            'conteudo' => $request->conteudo,
            'foto' => $foto,
            'categoria_id' => $request->categoria_id,
            'tags_id' => $request->tags_id
            // Define o valor do campo foto do novo registro com o valor da variável $foto, que contém o caminho do arquivo de imagem armazenado.
        ]);

        $post->tags()->sync($request->tags); // vincula as tags as postagens. ( tags() é a função de relacionamento em post)

        return response()->json([
            'mensagem' => 'Post criado com sucesso!',
            'dados' => $post
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);

        if (!$post) {
            return response()->json([
                'mensagem' => 'Post não encontrado!',
            ], 404);
        }

        return response()->json([
            'mensagem' => 'Post retornado com sucesso!',
            'dados' => $post
        ], 200);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $foto = null;

        $post = Post::find($id);

        if(!$post){
            return response()->json([
                'mensagem' => 'Post não encontrado!'
            ], 404);
        }

        $validacao = Validator::make($request->all(), [
            'titulo' => 'required|string|max:190',
            'conteudo' => 'required|string|max:190'
        ]);

        if ($validacao->fails()){
            return response()->json([
                'mensagem' => 'Erro de validação',
                'erros' => $validacao->errors()
            ], 422);
        }

        $post->update([
            'titulo' => $request->titulo,
            'conteudo' => $request->conteudo,
            'foto' => $foto
        ]);

        return response()->json([
            'mensagem' => 'Post atualizado com sucesso!',
            'dados' => $post
        ], 200);


        //$post->update($request->all()); // essa linha de código atualiza o registro no banco de dados representado pelo modelo $post com os dados recebidos na requisição HTTP. É uma maneira concisa e eficiente de atualizar registros no banco de dados com os dados fornecidos pelo usuário.
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $posts = Post::find($id);
        if (!$posts){
            return response()->json([
                'mensagem' => 'Post não encontrado!'
            ], 404);
        }

        $posts->delete();

        return response()->json([
            'mensagem' => 'Post removido com sucesso!',
        ], 201);
    }
}
