<?php

use App\Http\Controllers\ProjetoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::apiResource('/projetos', ProjetoController::class);
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
