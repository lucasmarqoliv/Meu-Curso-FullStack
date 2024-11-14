<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body> <!-- crição do formulario para receber os dados -->
    <form action="{{route('produto.store')}}" method="post"> <!-- no endereço para onde vão os dados coloquei o nome da rota -->
        @csrf <!-- // token de segurança que evita ataque hacker, obrigatorio em todo formulario. -->
        <label for="">Nome</label>
        <input type="text" name="nome" id="nome">
        <label for="">Valor</label>
        <input type="text" name="valor" id="valor">
        <label for="">Descrição</label>
        <input type="text" name="descricao" id="descricao">
        <label for="">Data de Validade</label>
        <input type="date" name="data_validade" id="data_validade">
        <input type="hidden" name="categoria_id" value="0">
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
