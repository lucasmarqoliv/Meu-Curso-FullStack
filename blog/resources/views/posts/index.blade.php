
    @extends('layouts.app') <!-- usado para indicar que essa view esta herdando de layouts.app -->
    @section('content') <!-- usado para definir o conteudo de uma seção. -->
    <h1 class="text-center mt-3 mb-5">Listagem de posts</h1>
    <a href="/post/criar" class="btn btn-primary btn-sm mb-2"><i class="fa-solid fa-square-plus " style="color: #63E6BE;"></i>  Nova Postagem</a>
    <table class="table table-bordered table-hover">
        <thead class="thead-dark text-center">
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Conteudo</th>
            <th>Opções</th>
        </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->titulo}}</td>
                <td>{{$post->conteudo}}</td>
                <td class="btn-group btn-group-sm" role="group">
                    <form action="{{route('post.excluir', $post->id)}}" method="POST"> <!-- especifica a rota dentro action para onde vai direcionar o formulario e apos a virgula cita o atributo id, o mesmo que é passado na criação da rota. -->
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm mr-2 " onclick="return confirm('Deseja excluir o post selecionado?')">Excluir</button>
                    </form>
                        <a class="btn btn-sm btn-warning mr-2" role="button" href="{{ route('post.edit', $post->id) }}">Editar</a>
                        <a class="btn btn-sm btn-primary" role="button" href="{{ route('post.show', $post->id) }}">Visualizar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection <!-- fechamento da seção. -->
