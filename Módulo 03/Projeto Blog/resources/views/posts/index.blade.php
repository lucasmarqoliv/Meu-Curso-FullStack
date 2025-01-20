@extends('layouts.app') <!-- usado para indicar que essa view esta herdando de layouts.app -->
@section('content') <!-- usado para definir o conteudo de uma seção. -->
<h1 class="text-center mt-3 mb-5">Listagem de posts</h1>
    <div class="row">
        @foreach ($posts as $post) <!-- $posts é definida no método index do controlador. -->
        <div class="col-sm-3 mb-3 mx-0 shadow p-3 mb-3 bg-white rounded">
            <div class="card text-center">
                <img class="card-img-top" src="{{ asset('storage/'.$post->foto) }}" alt="Imagem de capa do card" height="250" width="auto"> <!-- importação da imagem concatenando a pasta com o link da imagem -->
                <div class="card-body">
                    <h3 class="card-title">{{ $post->titulo }}</h3>
                    @if($post->categoria)
                        <h5 class="card-subtitle text-muted">{{ $post->categoria->nome }}</h5>
                    @else
                        <h5 class="card-subtitle text-muted">Categoria não definida</h5>
                    @endif
                    @foreach($post->tags as $tag)
                    <span class="badge badge-pill badge-primary">{{$tag->nome}}</span>
                    @endforeach
                    <p class="card-text">{{ $post->conteudo }}</p>
                    @foreach($post->comentarios as $comentario) <!-- Itera sobre a coleção de comentários associados ao post atual -->
                        <div class="card-text border d-flex justify-content-center mb-3">
                            <div class="font-weight-light mr-1">Comentario:</div>
                                {{ $comentario->texto }}
                            <div>
                                <form action="{{route('comentario.excluir', $comentario->id)}}" method="POST" style="display:inline-block;"> <!-- especifica a rota dentro action para onde vai direcionar o formulario e apos a virgula cita o atributo id, o mesmo que é passado na criação da rota. -->
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm mr-2 px-1 py-0 ml-2" onclick="return confirm('Deseja excluir o comentario selecionado?')"><i class="fa-solid fa-delete-left"></i></button>
                                    <a class="btn btn-sm btn-warning mr-2 py-0" role="button" href="{{ route('comentario.edit', $comentario->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                </form>
                            </div>
                        </div> <!-- exibe o atributo texto que foi definido na tabela -->
                    @endforeach
                    <div class="btn-group" role="group">
                        <a class="btn btn-sm btn-primary mr-2" role="button" href="{{ route('post.show', $post->id) }}"><i class="fa-solid fa-eye"></i></a>
                        <a class="btn btn-sm btn-warning mr-2" role="button" href="{{ route('post.edit', $post->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                        <form action="{{route('post.excluir', $post->id)}}" method="POST" style="display:inline-block;"> <!-- especifica a rota dentro action para onde vai direcionar o formulario e apos a virgula cita o atributo id, o mesmo que é passado na criação da rota. -->
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm mr-2 px-2 py-2" onclick="return confirm('Deseja excluir o post selecionado?')"><i class="fa-solid fa-delete-left"></i></button>
                        </form>
                        <!-- Botão para acionar modal -->
                        <button type="button" class="btn btn-primary px-2" data-toggle="modal" data-target="#ExemploModalCentralizado{{ $post->id }}"> <!-- adiciono ao data-target, id, e ao aria-labelledby o ID do post selecionado para abrir o modal equivalente. para não abrir apenas o mesmo modal quando clicado em outro. -->
                            <i class="fa-solid fa-comments"></i>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="ExemploModalCentralizado{{ $post->id }}" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado{{ $post->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="TituloModalCentralizado{{ $post->id }}">Deixe um comentário</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('comentario.store') }}" method="POST"> <!-- no action passei a rota do metodo store que se encontra no ComentarioController -->
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Digite o comentário</label>
                                            <textarea class="form-control" id="texto_comentario" name="texto" rows="3"></textarea>
                                            <input type="hidden" value="{{ $post->id }}" name="post_id"> <!-- associa o novo comentário ao post correto no backend. Ele permite que o ID do post seja enviado junto com o formulário de comentário, facilitando o processamento e a associação correta no servidor. -->
                                            <button type="submit" class="btn btn-primary mt-3">Salvar mudanças</button> <!-- botão tem que ser do tipo submit para validar o envio. -->
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        @if($post->avaliacoes->isEmpty())
                        <!-- Se não houver avaliações, exibe os botões com valores padrão -->
                        <form action="{{ route('avaliacoes.incrementar') }}" method="POST">
                            @csrf
                            <input type="hidden" name="like">
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <button type="submit" class="btn ml-2" name="like"><i class="fa-solid fa-thumbs-up" style="color: #1c614c;"> 0 </i></button>
                        </form>
                        <form action="{{ route('avaliacoes.decrementar') }}" method="POST">
                            @csrf
                            <input type="hidden" name="like">
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <button type="submit" class="btn ml-2" name="deslike"><i class="fa-solid fa-thumbs-down" style="color: #ce0f68;"> 0 </i></button>
                        </form>
                        @else
                        <!-- Se houver avaliações, itera sobre elas e exibe os botões com os valores corretos -->
                        @foreach($post->avaliacoes as $avaliacao)
                        <form action="{{ route('avaliacoes.incrementar') }}" method="POST">
                            @csrf
                            <input type="hidden" name="like">
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <button type="submit" class="btn ml-2" name="like"><i class="fa-solid fa-thumbs-up" style="color: #63E6BE;"> {{ $avaliacao->like }} </i></button>
                        </form>
                        <form action="{{ route('avaliacoes.decrementar') }}" method="POST">
                            @csrf
                            <input type="hidden" name="deslike">
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <button type="submit" class="btn ml-2" name="deslike"><i class="fa-solid fa-thumbs-down" style="color: #B197FC;"> {{ $avaliacao->deslike }} </i></button>
                        </form>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection <!-- fechamento da seção. -->
