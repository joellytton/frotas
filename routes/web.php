<?php

use App\Http\Controllers\Administracao\VeiculoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administracao\CategoriaVeiculoController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('/categoriaVeiculo', CategoriaVeiculoController::class);
    Route::resource('/veiculo', VeiculoController::class);

});

require __DIR__ . '/auth.php';
