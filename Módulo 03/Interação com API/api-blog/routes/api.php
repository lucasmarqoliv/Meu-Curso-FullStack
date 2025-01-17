
<?php
//arquivo onde serão criadas as rotas da api.

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\OpcoesController;
use App\Http\Controllers\AvaliacoesController;


Route::get('/token', function (){ // rota que cria o token para formularios tipo post.
    return csrf_token();
});

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

// As rotas abaixo requerem que o usuário esteja autenticado (token válido)
Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [AuthController::class, 'logout']); // Rota para logout
    Route::get('user', [AuthController::class, 'user']); // Rota para obter dados do usuário autenticado


    Route::get('post/listar', [PostController::class, 'index'])->name('post.index');
    Route::post('post/salvar', [PostController::class, 'store'])->name('post.store');
    Route::put('post/update/{id}', [PostController::class, 'update'])->name('post.update'); // put metodo para editar conteudo do post.
    Route::get('post/exibir/{id}', [PostController::class, 'show'])->name('post.show');
    Route::delete('post/excluir/{id}', [PostController::class, 'destroy'])->name('post.excluir');

    Route::get('comentario/index', [ComentarioController::class, 'index'])->name('comentario.listar');
    Route::get('comentario/exibir/{id}', [ComentarioController::class, 'show']);
    Route::post('comentario/criar', [ComentarioController::class, 'store'])->name('comentario.store');
    Route::delete('comentario/excluir/{id}', [ComentarioController::class, 'destroy'])->name('comentario.excluir');
    Route::put('comentario/update/{id}', [ComentarioController::class, 'update'])->name('comentario.update'); // put metodo para editar conteudo do comentario.


    Route::get('categoria/index', [CategoriaController::class,'index'])->name('categoria.index');
    Route::get('categoria/exibir/{id}', [CategoriaController::class, 'show'])->name('categoria.show');
    Route::post('categoria/salvar', [CategoriaController::class, 'store'])->name('categoria.store');
    Route::put('categoria/update/{id}', [CategoriaController::class, 'update'])->name('categoria.update'); // put metodo para editar conteudo do post.
    Route::delete('categoria/excluir/{id}', [CategoriaController::class, 'destroy'])->name('categoria.excluir');


    Route::get('tag/index', [TagController::class,'index'])->name('tag.listagem');
    Route::post('tag/salvar', [TagController::class, 'store'])->name('tag.store');
    Route::get('tag/visualizar/{id}', [TagController::class, 'show'])->name('tag.visualizar');
    Route::put('tag/update/{id}', [TagController::class, 'update'])->name('tag.update'); // put metodo para editar conteudo do post.
    Route::delete('tag/excluir/{id}', [TagController::class, 'destroy'])->name('tag.excluir');


    Route::get('opcoes/index', [OpcoesController::class,'index'])->name('opcoes.index');
    Route::get('opcoes/exibir/{id}', [OpcoesController::class, 'show'])->name('opcoes.show');
    Route::post('opcoes/salvar', [OpcoesController::class, 'store'])->name('opcoes.store');
    Route::put('opcoes/update/{id}', [OpcoesController::class, 'update'])->name('opcoes.update');
    Route::delete('opcoes/excluir/{id}', [OpcoesController::class, 'destroy'])->name('opcoes.excluir');


    Route::get('avaliacoes/index', [AvaliacoesController::class,'index'])->name('avaliacoes.index');
    Route::get('avaliacoes/exibir/{id}', [avaliacoesController::class, 'show'])->name('avaliacoes.show');
    Route::post('avaliacoes/incrementar', [avaliacoesController::class, 'incrementar'])->name('avaliacoes.incrementar');
    Route::delete('avaliacoes/excluir/{id}', [avaliacoesController::class, 'destroy'])->name('avaliacoes.excluir');
    Route::post('avaliacoes/decrementar', [avaliacoesController::class, 'decrementar'])->name('avaliacoes.decrementar');

});
