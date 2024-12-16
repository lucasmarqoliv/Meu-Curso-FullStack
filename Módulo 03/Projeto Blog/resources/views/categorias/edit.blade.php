@extends('layouts.app') <!-- usado para indicar que essa view esta herdando de layouts.app -->
@section('content') <!-- usado para definir o conteudo de uma seção. -->
    <h1 class="text-center">Edição de categoria</h1>
    <form action="{{route('categoria.update', $categoria->id)}}" method="post" enctype="multipart/form-data" id="formCadastrarPost" class="form-group">
        <div class="">
            @csrf
            @method('PUT') <!-- metodo para atualização do post (editar) -->
            <label for="">Nome</label>
            <input type="text" name="nome" class="form-control" value="{{ $categoria->nome }}" id="nome"> <!-- dentro do value eu chamo o atributo referente ao input atraves da variavel $categoria para que possa ser editado. -->
        </div>
        <div class="">
            <label for="">Descrição</label>
            <textarea name="descricao" id="" cols="30" rows="10" class="form-control">{{ $categoria->descricao }}</textarea> <!-- no text area eu chamo o atributo dentro do conteudo da tag, porque ela não aceita value. -->
        </div>
            <input type="submit" name="submit" class="btn btn-primary mt-3" value="Salvar">
    </form>
@endsection
