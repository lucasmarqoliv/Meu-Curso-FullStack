    @extends('layouts.app') <!-- usado para indicar que essa view esta herdando de layouts.app -->
    @section('content') <!-- usado para definir o conteudo de uma seção. -->
    <h1 class="text-center mt-3 mb-4">Edição de posts</h1>
    <form action="{{route('post.update', $post->id)}}" method="post" enctype="multipart/form-data">
        <div class="form-group">
            @csrf
            @method('PUT') <!-- metodo para atualização do post (editar) -->
            <label for="">Titulo</label>
            <input type="text" name="titulo" class="form-control" value="{{ $post->titulo }}"> <!-- dentro do value eu chamo o atributo referente ao input atraves da variavel $post para que possa ser editado. -->
        </div>
        <div class="form-group">
            <label for="">Conteudo</label>
            <textarea name="conteudo" id="" cols="30" rows="10" class="form-control">{{ $post->conteudo }}</textarea> <!-- no text area eu chamo o atributo dentro do conteudo da tag, porque ela não aceita value. -->
        </div>
        <div class="form-group">
            <label for="" class="form-label">Foto</label>
            <input type="file" id="foto" name="foto">
        </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Salvar">
    </form>
    @endsection <!-- fechamento da seção. -->

