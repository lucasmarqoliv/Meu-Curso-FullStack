
<?php
//arquivo onde serão criadas as rotas da api.
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\PostController;

Route::get('/token', function (){ // rota que cria o token para formularios tipo post.
    return csrf_token();
});

Route::get('post/listar', [PostController::class, 'index'])->name('post.index');
Route::post('post/salvar', [PostController::class, 'store'])->name('post.store');
Route::put('post/update/{id}', [PostController::class, 'update'])->name('post.update'); // put metodo para editar conteudo do post.
Route::get('post/exibir/{id}', [PostController::class, 'show'])->name('post.show');
Route::delete('post/excluir/{id}', [PostController::class, 'destroy'])->name('post.excluir');


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
