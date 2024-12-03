<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $foto = $request->foto->store('fotos', 'public'); //


        Post::create([ //  O array passado para o método create especifica os valores dos atributos do novo registro.
            'titulo' => $request->titulo, // name do input
            'conteudo' => $request->conteudo,
            'foto' => $foto // Define o valor do campo foto do novo registro com o valor da variável $foto, que contém o caminho do arquivo de imagem armazenado.
        ]);

        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
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
