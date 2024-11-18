
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('clientes.store') }}" method="post">
        @csrf
        <label for="">Nome</label>
        <input type="text" name="nome" id="nome">
        <label for="">Data de Nascimento</label>
        <input type="date" name="data_nascimento" id="data_nascimento">
        <label for="">Foto</label>
        <input type="text" name="foto" id="foto">
        <button type="submit">Salvar</button>
    </form>
</body>
