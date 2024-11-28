    @extends('layouts.app') <!-- usado para indicar que essa view esta herdando de layouts.app -->
    @section('content') <!-- usado para definir o conteudo de uma seção. -->
    <h1 class="text-center mb-5 mt-3">Exibição de posts</h1>
    <table class="table">
        <thead class="thead-light text-center">
            <tr>
                <th>Titulo</th>
                <th>Conteudo</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr>
                <td>{{ $post->titulo }}</td>
                <td>{{ $post->conteudo }}</td>
            </tr>
        </tbody>
    </table>
    <a href="{{ route('post.index') }}" class="btn btn-sm btn-primary">Voltar</a>
    @endsection <!-- fechamento da seção. -->
