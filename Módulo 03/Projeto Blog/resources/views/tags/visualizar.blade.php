@extends('layouts.app') <!-- usado para indicar que essa view esta herdando de layouts.app -->
@section('content') <!-- usado para definir o conteudo de uma seção. -->

<h1 class="text-center">Visualizar Tag</h1>

<table class="table">
    <thead>
        <tr>
            <th>Nome</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $tag->nome }}</td>
        </tr>
    </tbody>
</table>
<a class="btn btn-primary" href="{{ route('tag.listagem') }}">Voltar</a>

@endsection

