<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;

Route::get("/cadastro", [CadastroController::class, "index"]);
Route::Post("/cadastro", [CadastroController::class, "salvar"]);
Route::Get("/cadastro/excluir/{id}", [CadastroController::class, "excluir"]);

Route::get('/', [CadastroController::class, "index"]);

