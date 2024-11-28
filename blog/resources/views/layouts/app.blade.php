
<!-- templete Pai -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/53ca253668.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="text-center">Bem vindo ao meu blog</h1>
    <div class="container">
        @yield('content') <!-- Usado para exibir o conteudo de uma seção -->
    </div>
    <footer class="text-center">
        <p>{{ date('Y') }} - Meu Blog &#169;</p>
    </footer>
</body>
</html>
