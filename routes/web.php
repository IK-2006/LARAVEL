<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;


Route::get('/teste', function(){
    return view('teste');
});

Route::resource('cursos', CursoController::class);

