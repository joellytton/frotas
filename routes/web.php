<?php

use App\Http\Controllers\Administracao\MotoristaController;
use App\Http\Controllers\Administracao\VeiculoController;
use App\Http\Controllers\AgendamentoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administracao\CategoriaVeiculoController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('/agendamento', AgendamentoController::class);
    Route::resource('/categoriaVeiculo', CategoriaVeiculoController::class);
    Route::resource('/veiculo', VeiculoController::class);
    Route::resource('/motorista', MotoristaController::class)->parameters(['motorista' => 'motorista']);

});

require __DIR__ . '/auth.php';
