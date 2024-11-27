<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edicao de posts</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="container">
    <h1 class="text-center mt-3 mb-4">Edição de posts</h1>
    <form action="{{route('post.update', $post->id)}}" method="post">
        <div class="form-group">
            @csrf
            @method('PUT') <!-- metodo para atualização do post (editar) -->
            <label for="">Titulo</label>
            <input type="text" name="titulo" class="form-control" value="{{ $post->titulo }}"> <!-- dentro do value eu chamo o atributo referente ao input atraves da variavel $post para que possa ser editado. -->
        </div>
        <div class="form-group">
            <label for="">Conteudo</label>
            <textarea name="conteudo" id="" cols="30" rows="10" class="form-control">{{ $post->conteudo }}</textarea> <!-- no text area eu chamo o atributo dentro do conteudo da tag, porque ela não aceita value. -->
        </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Salvar">
    </form>
</body>
</html>
