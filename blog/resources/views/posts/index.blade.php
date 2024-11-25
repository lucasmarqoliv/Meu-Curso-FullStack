<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem de posts</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="container">
    <h1 class="text-center mt-3 mb-5">Listagem de posts</h1>
    <table border="1" class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Conteudo</th>
            <th>Opções</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->titulo}}</td>
                <td>{{$post->conteudo}}</td>
                <td>
                    <form action="{{route('post.excluir', $post->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Deseja excluir o post selecionado?')">Excluir</button>
                        <button class="btn btn-sm btn-warning">Editar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
