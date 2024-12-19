<?php

use App\Http\Controllers\AvaliacoesController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SobreController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('post/listar', [PostController::class, 'index'])->name('post.index');

Route::get('post/criar', [PostController::class, 'create'])->name('post.create');

Route::post('post/salvar', [PostController::class, 'store'])->name('post.store');

Route::get('post/editar/{id}', [PostController::class, 'edit'])->name('post.edit');

Route::put('post/update/{id}', [PostController::class, 'update'])->name('post.update'); // put metodo para editar conteudo do post.

Route::get('post/exibir/{id}', [PostController::class, 'show'])->name('post.show');

Route::delete('post/excluir/{id}', [PostController::class, 'destroy'])->name('post.excluir');

Route::get('/sobre', [SobreController::class,'index'])->name('sobre.sobre');

Route::post('comentario/criar', [ComentarioController::class, 'store'])->name('comentario.store');

Route::post('avaliacao/like', [AvaliacoesController::class, 'incrementar'])->name('avaliacoes.incrementar');

Route::post('avaliacao/deslike', [AvaliacoesController::class, 'decrementar'])->name('avaliacoes.decrementar');

Route::delete('comentario/excluir/{id}', [ComentarioController::class, 'destroy'])->name('comentario.excluir');

Route::put('comentario/update/{id}', [ComentarioController::class, 'update'])->name('comentario.update'); // put metodo para editar conteudo do comentario.

Route::get('comentario/editar/{id}', [ComentarioController::class, 'edit'])->name('comentario.edit');


Route::get('categoria/index', [CategoriaController::class,'index'])->name('categoria.index');


Route::get('categoria/criar', [CategoriaController::class, 'create'])->name('categoria.create');


Route::get('categoria/editar/{id}', [CategoriaController::class, 'edit'])->name('categoria.edit');

Route::get('categoria/exibir/{id}', [CategoriaController::class, 'show'])->name('categoria.show');

Route::post('categoria/salvar', [CategoriaController::class, 'store'])->name('categoria.store');

Route::put('categoria/update/{id}', [CategoriaController::class, 'update'])->name('categoria.update'); // put metodo para editar conteudo do post.

Route::delete('categoria/excluir/{id}', [CategoriaController::class, 'destroy'])->name('categoria.excluir');

Route::get('tag/index', [TagController::class,'index'])->name('tag.listagem');

Route::get('tag/cadastrar', [TagController::class, 'create'])->name('tag.cadastrar');

Route::post('tag/salvar', [TagController::class, 'store'])->name('tag.store');

Route::get('tag/editar/{id}', [TagController::class, 'edit'])->name('tag.editar');

Route::get('tag/visualizar/{id}', [TagController::class, 'show'])->name('tag.visualizar');

Route::put('tag/update/{id}', [TagController::class, 'update'])->name('tag.update'); // put metodo para editar conteudo do post.

Route::delete('tag/excluir/{id}', [TagController::class, 'destroy'])->name('tag.excluir');
