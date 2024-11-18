<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('produto/listar',[ProdutoController::class,'index'])->name('produto.index'); //get porque vai renderizar na tela (templete)
Route::get('produto/cadastrar',[ProdutoController::class,'cadastrar']); // criação da ROTA para acessar o templete do formulario.
Route::post('produto/salvar',[ProdutoController::class,'store'])->name('produto.store'); // criação da rota e nome da rota: (para colocar no action do formulario). POST porque vai receber os dados submetidos.

Route::get('/clientes/listar',[ClientesController::class,'index'])->name('clientes.index');

Route::get('clientes/cadastrar',[ClientesController::class,'cadastrar']);

Route::post('/clientes/salvar',[ClientesController::class,'store'])->name('clientes.store');



