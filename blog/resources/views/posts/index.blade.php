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
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
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
                <td class="btn-group btn-group-sm" role="group">
                    <form action="{{route('post.excluir', $post->id)}}" method="POST"> <!-- especifica a rota dentro action para onde vai direcionar o formulario e apos a virgula cita o atributo id, o mesmo que é passado na criação da rota. -->
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm mr-2 " onclick="return confirm('Deseja excluir o post selecionado?')">Excluir</button>
                    </form>
                        <a class="btn btn-sm btn-warning mr-2" role="button" href="{{ route('post.edit', $post->id) }}">Editar</a>
                        <a class="btn btn-sm btn-primary" role="button" href="{{ route('post.show', $post->id) }}">Visualizar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
