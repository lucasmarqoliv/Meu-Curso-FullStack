@extends('layouts.app') <!-- usado para indicar que essa view esta herdando de layouts.app -->
@section('content') <!-- usado para definir o conteudo de uma seção. -->

<h1 class="text-center">Editar Tag</h1>

<form action="{{ route('tag.update', $tag->id) }}" class="form-group" method="POST">
    @csrf
    @method('PUT')
    <label for="">Nome</label>
    <input type="text" name="nome" value="{{ $tag->nome }}" class="form-control">
    <button type="submit" class="btn btn-primary mt-3">Salvar</button>
</form>

@endsection
