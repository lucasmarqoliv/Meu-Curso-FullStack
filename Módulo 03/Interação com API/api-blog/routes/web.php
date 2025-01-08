<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('api') // esse código está configurando um grupo de rotas para uma API.
    ->middleware('api')
    ->group(base_path('routes\api.php'));
