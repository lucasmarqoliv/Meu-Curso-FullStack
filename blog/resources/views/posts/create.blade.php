<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criacao de posts</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="container">
    <h1 class="text-center mt-3 mb-4">Criação de posts</h1>
    <form action="{{route('post.store')}}" method="post"> <!-- rota para direcionamento do formulario que da rota vai chamar o metodo store que salva no banco (store) -->
        <div class="form-group">
            @csrf
            <label for="">Titulo</label>
            <input type="text" name="titulo" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Conteudo</label>
            <textarea name="conteudo" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
            <input type="submit" name="submit" class="btn btn-primary">
    </form>
</body>
</html>
