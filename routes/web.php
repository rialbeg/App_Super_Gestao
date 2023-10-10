<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedoresController;

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

Route::get('/', [HomeController::class, 'index'])->name('site.index');
Route::get('/sobrenos', [SobreNosController::class, 'index'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class, 'index'])->name('site.contato');
Route::get('/login', [ContatoController::class, 'index'])->name('site.login');

Route::prefix('app')->group(function () {
    Route::get('/clientes', [ContatoController::class, 'index'])->name('app.clientes');
    Route::get('/fornecedores', [FornecedoresController::class, 'index'])->name('app.fornecedores');
    Route::get('/produtos', [ContatoController::class, 'index'])->name('app.produtos');
});

Route::fallback(function () {
    echo 'Página não existe. <a href="'.route('site.index').'">Clique aqui</a> para retornar para a página inicial.';
});
