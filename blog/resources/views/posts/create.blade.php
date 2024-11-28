    @extends('layouts.app') <!-- usado para indicar que essa view esta herdando de layouts.app -->
    @section('content') <!-- usado para definir o conteudo de uma seção. -->
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
            <button type="submit" name="submit" class="btn btn-success"> <i class="fa-solid fa-paper-plane" style="color: #B197FC;"></i>  Enviar</button>
            <a href="/post/listar" class="btn btn-primary" href=""><i class="fa-solid fa-backward" style="color: #74C0FC;"></i>  Voltar para home</a>
    </form>
    @endsection <!-- fechamento da seção. -->

