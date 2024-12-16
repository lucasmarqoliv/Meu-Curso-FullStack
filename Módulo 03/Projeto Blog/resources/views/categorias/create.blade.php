@extends('layouts.app') <!-- usado para indicar que essa view esta herdando de layouts.app -->
@section('content') <!-- usado para definir o conteudo de uma seção. -->
    <h1 class="text-center">Formulario de criação de categoria</h1>
    <form action="{{ route('categoria.store') }}" method="post" class="form-group">
        @csrf
        <label for="" class="">Nome</label>
        <input type="text" name="nome" class="form-control">
        <label for="" class="">Descrição</label>
        <input type="text" name="descricao" class="form-control">
        <button type="submit" class="btn btn-success mt-3">Salvar</button>
    </form>
@endsection
