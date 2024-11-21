<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="container">
    <h1 class="text-center mt-3 mb-5">Listagem de produtos</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Valor</th>
            <th scope="col">Descrição</th>
            <th scope="col">Data de Validade</th>
            <th scope="col">Opções</th>
        </tr>
        </thead>
        <tbody>
            @foreach($produtos as $produto)
        <tr>
            <td
                scope="row">{{$produto->nome}}
            </td>
            <td>
                R$ {{$produto->valor}}
            </td>
            <td>
                {{$produto->descricao}}
            </td>
            <td>
                {{$produto->data_validade}}
            </td>
            <td>
                <form action="{{ route('produto.delete', $produto->id) }}" method="post"> <!-- link no action se refere ao nome da rota e referencia ao id de produto -->
                    @csrf <!-- evita o ataque de hacker ao formulario -->
                    @method('DELETE') <!-- isso é obrigatorio quando se usa o metodo DELETE, para especificar para o formulario o metodo da rota. -->
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Deseja excluir o produto selecionado?')">Excluir</button> <!-- botão de excluir com um pop up JavaScript para confirmar a exclusão. -->
                </form>
            </td>
        </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
