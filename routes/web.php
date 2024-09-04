<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\EntregadorController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
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

// Definir uma rota para o dashboard
Route::get('/dashboard', function () {
    return view('dashboard'); // Certifique-se de ter a view 'dashboard.blade.php'
})->name('dashboard')->middleware('auth');

// Grupo de rotas protegidas por autenticação
Route::middleware(['auth'])->group(function () {
    // Rota personalizada de exclusão de entregador
    Route::get('delete-entregador/{id}', function ($id) {
        $entregador = App\Models\Entregador::findOrFail($id);
        $entregador->delete();
        return 'Entregador excluído';
    });
});

// Grupo de rotas para o administrador
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard'); // Certifique-se de ter a view 'admin/dashboard.blade.php'
    });

    Route::resource('produtos', ProdutoController::class);
    Route::resource('entregadores', EntregadorController::class);
    Route::resource('funcionarios', FuncionarioController::class);
});

// Grupo de rotas para o funcionário
Route::middleware(['auth', 'role:funcionario'])->group(function () {
    Route::get('/funcionario/dashboard', function () {
        return view('funcionarios.dashboard'); // Certifique-se de ter a view 'funcionario/dashboard.blade.php'
    });

    Route::resource('produtos', ProdutoController::class);
});

// Grupo de rotas para o entregador
Route::middleware(['auth', 'role:entregador'])->group(function () {
    Route::get('/entregador/dashboard', function () {
        return view('entregadores.dashboard'); // Certifique-se de ter a view 'entregador/dashboard.blade.php'
    });

    // Futuramente definir rotas para entregador
});

Route::get('/login/admin', [AuthenticatedSessionController::class, 'createAdmin'])->name('login.admin');
Route::post('/login/admin', [AuthenticatedSessionController::class, 'storeAdmin'])->name('login.admin.store');
Route::get('/login/funcionario', [AuthenticatedSessionController::class, 'createFuncionario'])->name('login.funcionario');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');


//Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);
//});

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');


require __DIR__.'/auth.php';