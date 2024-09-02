<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\EntregadorController;
use App\Http\Controllers\FuncionarioController;

// Rotas para CRUD de Produto
Route::resource('produtos', ProdutoController::class);

// Rotas para CRUD de Entregador
Route::resource('entregadores', EntregadorController::class);

Route::get('delete-entregador/{id}', function ($id) {
    $entregador = App\Models\Entregador::findOrFail($id);
    $entregador->delete();
    return 'Entregador excluído';
});

Route::resource('funcionarios', FuncionarioController::class);


/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
*/