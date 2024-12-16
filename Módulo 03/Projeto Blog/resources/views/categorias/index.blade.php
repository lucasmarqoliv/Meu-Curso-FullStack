@extends('layouts.app') <!-- usado para indicar que essa view esta herdando de layouts.app -->
@section('content') <!-- usado para definir o conteudo de uma seção. -->
    <h1 class="text-center">Lista de categorias</h1>
    <table class="table text-center">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categoria as $categoria)
            <tr>
                <td>{{ $categoria->nome }}</td>
                <td>{{ $categoria->descricao }}</td>
                <td><button class="btn btn-primary"><a class="text-dark" href="{{ route('categoria.edit', $categoria->id) }}"><i class="fa-solid fa-pen-to-square"></i></a></button></td>
                <div>
                    <form action="{{route('categoria.excluir', $categoria->id)}}" method="POST" style="display:inline-block;"> <!-- especifica a rota dentro action para onde vai direcionar o formulario e apos a virgula cita o atributo id, o mesmo que é passado na criação da rota. -->
                        @csrf
                        @method('DELETE')
                        <td><button class="btn btn-danger" onclick="return confirm('Deseja excluir a categoria selecionada?')"><i class="fa-solid fa-trash"></i></button></td>
                    </form>
                    <td><button class="btn btn-success"><a href="{{ route('categoria.show', $categoria->id) }}"><i class="fa-solid fa-eye"></i></button></a></td>
                </div>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
