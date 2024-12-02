@extends('layouts.app') <!-- usado para indicar que essa view esta herdando de layouts.app -->
@section('content') <!-- usado para definir o conteudo de uma seção. -->
<h1 class="text-center mt-3 mb-5">Listagem de posts</h1>
    <div class="row">
        @foreach ($posts as $post)
        <div class="col-sm-6 mb-4">
            <div class="card text-center" style="height:auto">
                <img class="card-img-top" src="{{ asset('storage/'.$post->foto) }}" alt="Imagem de capa do card"> <!-- importação da imagem concatenando a pasta com o link da imagem -->
                <div class="card-body">
                    <h5 class="card-title">{{ $post->titulo }}</h5>
                    <p class="card-text">{{ $post->conteudo }}</p>
                    <div class="btn-group" role="group">
                        <a class="btn btn-sm btn-primary mr-2" role="button" href="{{ route('post.show', $post->id) }}">Visualizar</a>
                        <a class="btn btn-sm btn-warning mr-2" role="button" href="{{ route('post.edit', $post->id) }}">Editar</a>
                        <form action="{{route('post.excluir', $post->id)}}" method="POST" style="display:inline-block;"> <!-- especifica a rota dentro action para onde vai direcionar o formulario e apos a virgula cita o atributo id, o mesmo que é passado na criação da rota. -->
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm mr-2 " onclick="return confirm('Deseja excluir o post selecionado?')">Excluir</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection <!-- fechamento da seção. -->
