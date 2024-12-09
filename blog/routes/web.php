<?php

use App\Http\Controllers\AvaliacoesController;
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
