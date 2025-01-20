<?php

namespace App\Http\Controllers;

use App\Models\Avaliacoes;
use App\Models\Categoria;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comentario;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // RENDERIZA O TEMPLETE INDEX
    public function index()
    {
        $posts = Post::with('comentarios', 'avaliacoes', 'categoria', 'tags')->get(); //aqui carrega os posts junto com seus comentarios. e 'comentarios' é o nome do relacionamento no model Post.
        // o get executa a consulta ao banco de dados e retorna todos os registros que correspondem à consulta. O resultado é uma coleção de objetos Post, cada um com seus comentários carregados.

        // dd($posts);
        return view('posts.index', compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     */
    // RENDERIZA O TEMPLETE DE CRIAÇÃO DO POST.
    public function create()
    {
        $categoria = Categoria::all(); // essas variaveis serão usadas para iterar nos templetes.
        $avaliacoes = Avaliacoes::all();
        $tags = Tag::all();
        return view('posts.create', compact('categoria', 'avaliacoes', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    // PROCESSA A CRIAÇÃO E INCLUSÃO DO POST NO BANCO
    public function store(Request $request)
    {
        $foto = $request->foto->store('fotos', 'public');


        $post = Post::create([ //  O array passado para o método create especifica os valores dos atributos do novo registro.
            'titulo' => $request->titulo, // name do input
            'conteudo' => $request->conteudo,
            'foto' => $foto,
            'categoria_id' => $request->categoria_id,
            // Define o valor do campo foto do novo registro com o valor da variável $foto, que contém o caminho do arquivo de imagem armazenado.
        ]);

        $post->tags()->sync($request->tags); // vincula as tags as postagens. ( tags() é a função de relacionamento em post)

        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     */
    // RENDERIZA TEMPLETE PARA VISUALIZAR O POST
    public function show(string $id)
    {
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    // RENDERIZA TEMPLETE DE EDITAR O POST.
    public function edit(string $id)
    {
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    // PROCESSA AÇÃO DE EDITAR O POST.
    public function update(Request $request, string $id)
    {
        $foto = $request->foto->store('fotos', 'public');

        $post = Post::find($id);

        $post->update([
            'titulo' => $request->titulo,
            'conteudo' => $request->conteudo,
            'foto' => $foto
        ]);


        //$post->update($request->all()); // essa linha de código atualiza o registro no banco de dados representado pelo modelo $post com os dados recebidos na requisição HTTP. É uma maneira concisa e eficiente de atualizar registros no banco de dados com os dados fornecidos pelo usuário.

        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $posts = Post::find($id);

        $posts->delete();

        return redirect()->route('post.index');
    }
}
