<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;
use Illuminate\Routing\RouteGroup;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/sobrenos', [SobreNosController::class, 'index']);
Route::get('/contato', [ContatoController::class, 'index']);
Route::get('/login', [ContatoController::class, 'index']);

Route::prefix('app')->group(function () {
    Route::get('/clientes', [ContatoController::class, 'index']);
    Route::get('/fornecedores', [ContatoController::class, 'index']);
    Route::get('/produtos', [ContatoController::class, 'index']);
});
