@extends('layouts.app') <!-- usado para indicar que essa view esta herdando de layouts.app -->
@section('content') <!-- usado para definir o conteudo de uma seção. -->
<h1 class="text-center mt-3 mb-4">Edição de comentário</h1>
<form action="{{route('comentario.update', $comentario->id)}}" method="post" enctype="multipart/form-data" id="formCadastrarPost">
    <div class="form-group">
        @csrf
        @method('PUT') <!-- metodo para atualização do post (editar) -->
        <label for="">Comentário</label>
        <input type="text" name="comentario" class="form-control" value="{{ $comentario->texto }}" id="comentario"> <!-- dentro do value eu chamo o atributo referente ao input atraves da variavel $post para que possa ser editado. -->
    </div>

        <input type="submit" name="submit" class="btn btn-primary" value="Salvar">
</form>

@endsection <!-- fechamento da seção. -->

