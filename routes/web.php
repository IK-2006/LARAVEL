<?php

use App\Http\Controllers\EstruturaController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('estrutura.index');
});

Route::resource('cursos', CursoController::class);
Route::resource('alunos', AlunoController::class);
Route::resource('estrutura', EstruturaController::class);


