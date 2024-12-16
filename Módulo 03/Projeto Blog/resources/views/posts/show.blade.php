    @extends('layouts.app') <!-- usado para indicar que essa view esta herdando de layouts.app -->
    @section('content') <!-- usado para definir o conteudo de uma seção. -->
    <h1 class="text-center mb-5 mt-3">Exibição de posts</h1>
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('storage/'.$post->foto) }}" alt="Imagem de capa do card">
            <div class="card-body">
                <h5 class="card-title">{{ $post->titulo }}</h5>
                <p class="card-text">{{ $post->conteudo }}</p>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <a href="{{ route('post.index') }}" class="btn btn-sm btn-primary mt-3 mb-4">Voltar</a>
    </div>
    @endsection <!-- fechamento da seção. -->
