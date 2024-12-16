<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="container"> <!-- crição do formulario para receber os dados -->
    <h3 class="text-center mt-3 mb-4">Cadastro de Produtos</h3>
    <form action="{{route('produto.store')}}" method="post"> <!-- no endereço para onde vão os dados coloquei o nome da rota -->
        @csrf <!-- // token de segurança que evita ataque hacker, obrigatorio em todo formulario. -->
        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Valor</label>
            <input type="text" name="valor" id="valor" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Descrição</label>
            <input type="text" name="descricao" id="descricao" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Data de Validade</label>
            <input type="date" name="data_validade" id="data_validade" class="form-control">
            <input type="hidden" name="categoria_id" value="0" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</body>
</html>
