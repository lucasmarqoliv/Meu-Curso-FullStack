@extends('layouts.app') <!-- usado para indicar que essa view esta herdando de layouts.app -->
@section('content') <!-- usado para definir o conteudo de uma seção. -->

<h1 class="text-center">Listagem de Tags</h1>
<table class="table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Opções</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tags as $tag)
        <tr>
            <td>{{ $tag->nome }}</td>
            <td><a href="{{ route('tag.visualizar', $tag->id) }}"><i class="fa-solid fa-eye"></i></a></td>
            <td><a href="{{ route('tag.editar', $tag->id) }}"><i class="fa-solid fa-pen-to-square"></i></a></td>
            <td>
                <form action="{{route('tag.excluir', $tag->id)}}" method="POST" style="display:inline-block;"> <!-- especifica a rota dentro action para onde vai direcionar o formulario e apos a virgula cita o atributo id, o mesmo que é passado na criação da rota. -->
                    @csrf
                    @method('DELETE')
                    <a class="mr-2 px-2 py-2 text-primary" onclick="return confirm('Deseja excluir a tag selecionada?')"><i class="fa-solid fa-delete-left"></i></a>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>












@endsection <!-- fechamento da seção. -->
