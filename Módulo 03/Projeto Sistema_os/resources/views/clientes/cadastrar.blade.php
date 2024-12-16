
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="container">
    <h3 class="text-center mt-3 mb-4">Cadastro de Clientes</h3>
    <form action="{{ route('clientes.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Data de Nascimento</label>
            <input type="date" name="data_nascimento" id="data_nascimento" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Foto</label>
            <input type="file" name="foto" id="foto" class=".form-control-file" accept="image/*">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</body>
