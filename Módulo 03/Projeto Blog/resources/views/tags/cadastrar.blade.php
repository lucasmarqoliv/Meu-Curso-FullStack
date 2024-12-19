@extends('layouts.app') <!-- usado para indicar que essa view esta herdando de layouts.app -->
@section('content') <!-- usado para definir o conteudo de uma seção. -->

<h1 class="text-center">Cadastrar Tag</h1>

<form action="{{ route('tag.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" class="form-control" name="nome">
    </div>
    <button class="btn btn-success" type="submit">Salvar</button>
</form>

@endsection
