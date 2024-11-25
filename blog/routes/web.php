<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('post/listar', [PostController::class, 'index'])->name('post.index');

Route::get('post/criar', [PostController::class, 'create'])->name('post.create');

Route::post('post/salvar', [PostController::class, 'store'])->name('post.store');

Route::get('post/editar', [PostController::class, 'edit'])->name('post.edit');

Route::get('post/exibir', [PostController::class, 'show'])->name('post.show');

Route::delete('post/excluir/{id}', [PostController::class, 'destroy'])->name('post.excluir');
