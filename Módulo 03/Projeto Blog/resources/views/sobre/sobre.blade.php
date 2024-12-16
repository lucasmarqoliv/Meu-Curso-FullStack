@extends('layouts.app') <!-- usado para indicar que essa view esta herdando de layouts.app -->
@section('content') <!-- usado para definir o conteudo de uma seção. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sobre</title>
</head>
<body class="container">
    <h1 class="text-center">Página Sobre meu Blog</h1>
    <h3 class="mt-3">Sobre o autor</h3>
    <div class="">
        <div class="row">
            <div class="col-sm-6">
                <p class=" mt-5">Meu nome é Lucas Marques, sou aluno do curso Tecnico em Informática para Internet no SENAI-PI.</p>
                <p class="text-left">Esse blog é direcionado as ultimas noticias sobre a área TECH, com o intuito de deixar o leitor mais informado, e esclarecer determinados temas sobre tecnologias modernas para publicos alvos.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, distinctio sunt! Architecto aperiam eum minus aliquam dolor, hic optio exercitationem magnam placeat excepturi maxime similique vel impedit fugit quidem quod?</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore quisquam, neque nobis eum quaerat officiis aliquid ad similique dolorem beatae quae. Amet, beatae sint minus rem reiciendis labore eum possimus.</p>
            </div>
                <div class="col-sm-6 mt-5">
                    <form>
                        <div class="form-group">
                        <strong><label for="exampleInputEmail1">Artigos por E-mail</label></strong>
                        <label for="">Digite seu endereço de email para acompanhar esse site e receber notificações de novos artigos por email.</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                        <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                    <div class="mt-5">
                        <address>
                            <h4>Entre em contato comigo</h4>
                            <strong>Lucas Marques</strong><br>
                            1234 Example Street<br>
                            Antartica, Example 0987<br>
                            <abbr title="Phone">Telefone:</abbr> (123) 456-7890
                        </address>

                        <address>
                            <strong>E-mail</strong><br>
                            <a href="mailto:#">lucasmarques@example.com</a>
                        </address>
                    </div>
                </div>
        </div>
    </div>
    <a href="{{ route('post.index') }}" class="btn btn-sm btn-primary">Voltar</a>
</body>
</html>
@endsection
