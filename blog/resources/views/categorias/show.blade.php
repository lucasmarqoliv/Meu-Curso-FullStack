@extends('layouts.app') <!-- usado para indicar que essa view esta herdando de layouts.app -->
@section('content') <!-- usado para definir o conteudo de uma seção. -->
    <h1 class="text-center">Visualização da categoria</h1>
    <table class="table text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $categoria->id }}</td>
                <td>{{ $categoria->nome }}</td>
                <td>{{ $categoria->descricao }}</td>
            </tr>
        </tbody>
    </table>
    <button class="btn btn-primary mt-3"><a class="text-dark" href="{{ route('categoria.index') }}">Voltar</a></button>
@endsection
