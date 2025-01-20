    @extends('layouts.app') <!-- usado para indicar que essa view esta herdando de layouts.app -->
    @section('content') <!-- usado para definir o conteudo de uma seção. -->
    <h1 class="text-center mt-3 mb-4">Criação de posts</h1>
    {{-- @if($errors->any())
    <div class="alert alert-danger" role="alert">
        Não foi possível realizar essa operação!
        <ul class="">
            @foreach($erros->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}
    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data" id="formCadastrarPost" name="formPost"> <!-- rota para direcionamento do formulario que da rota vai chamar o metodo store que salva no banco (store) -->
        <div class="form-group">
            @csrf
            <label class="form-label" for="">Titulo</label>
            <input type="text" name="titulo" class="form-control" id="titulo">
        </div>
        <div class="form-group">
            <label for="">Categoria do post</label>
            <select name="categoria_id" id="categoria_id" class="form-select">
                <option value="">Selecione</option>
                @foreach($categoria as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            @foreach($tags as $tag)
            <input type="checkbox" name="tags[]" id="tag{{ $tag->id }}" value="{{ $tag->id }}">
            <label for="tag{{ $tag->id }}">{{ $tag->nome }}</label>
            @endforeach
        </div>
        <div class="form-group">
            <label for="" class="form-label">Conteudo</label>
            <textarea name="conteudo" id="conteudo" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="" class="form-label">Foto</label>
            <input type="file" id="foto" name="foto">
        </div>
            <button type="submit" id="enviar" name="submit" class="btn btn-success"> <i class="fa-solid fa-paper-plane" style="color: #B197FC;"></i>  Enviar</button>
            <a href="/post/listar" class="btn btn-primary" href=""><i class="fa-solid fa-backward" style="color: #74C0FC;"></i>  Voltar para home</a>
    </form>
    <script> // verificação da foto
        var titulo = document.getElementById('titulo').value;
        var foto = document.getElementById('foto')
        var formCadastrarPost = document.getElementById('formCadastrarPost')

        formCadastrarPost.addEventListener("submit", function(event) {

            if(!foto.files || !foto.files[0]){
                alert('Foto obrigatória!')
                event.preventDefault();
            }
        });
    </script>

    @endsection <!-- fechamento da seção. -->

