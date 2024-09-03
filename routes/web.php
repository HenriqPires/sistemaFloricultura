<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\EntregadorController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

// Rota de welcome, sem autenticação
Route::get('/', function () {
    return view('welcome'); // ou qualquer outra view que você deseja exibir
});

// Rotas para o login e logout
Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

// Grupo de rotas protegidas por autenticação
Route::middleware(['auth'])->group(function () {
    Route::resource('produtos', ProdutoController::class);
    Route::resource('entregadores', EntregadorController::class);
    Route::resource('funcionarios', FuncionarioController::class);

    // Rota personalizada de exclusão de entregador
    Route::get('delete-entregador/{id}', function ($id) {
        $entregador = App\Models\Entregador::findOrFail($id);
        $entregador->delete();
        return 'Entregador excluído';
    });
});

// Definir uma rota para o dashboard
Route::get('/dashboard', function () {
    return view('dashboard'); // Certifique-se de ter a view 'dashboard.blade.php'
})->name('dashboard')->middleware('auth');

//Route::middleware(['auth', 'admin'])->group(function () {
    // rotas específicas para admin
  //  Route::resource('produtos', ProdutoController::class);
    //Route::resource('entregadores', EntregadorController::class);
    //Route::resource('funcionarios', FuncionarioController::class);
//});

//Route::middleware(['auth', 'funcionario'])->group(function () {
    // rotas específicas para funcionários
    //Route::resource('produtos', ProdutoController::class);
  //  Route::resource('entregadores', EntregadorController::class);
//});