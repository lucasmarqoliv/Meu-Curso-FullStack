
<!-- templete Pai -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- ATUALIZAÇÃO DO JQUERY PARA USO DO AJAX -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/53ca253668.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <ul class="navbar-nav">
                <li class="nav-item active">
                <a class="nav-link" href="{{ route('post.index') }}">Home <span class="sr-only">(Página atual)</span></a>
                </li>
                <li class="nav-item active">
                <a class="nav-link" href="{{ route('post.create') }}">Criar</a>
                </li>
            </ul>
        </nav>
    </div>
    <h1 class="text-center mt-3">Bem vindo ao meu blog</h1>
    <div class="container-fluid">
        @yield('content') <!-- Usado para exibir o conteudo de uma seção -->
    </div>
    <footer class="text-center">
        <p>{{ date('Y') }} - Meu Blog &#169;</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn" crossorigin="anonymous"></script> <!-- AJAX DO JQUERY -->
</body>
</html>
