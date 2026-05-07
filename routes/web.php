<?php

use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('produtos.index');
});

Route::resource('produtos', CursoController::class);
Route::resource('categoria', CategoriaController::class);
Route::resource('estrutura', EstruturaController::class);


