<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\ContatoController;

// Rota para exibir o formulário
Route::get('/', function () {
    return view('contato');
});

// Rota para processar o envio do formulário
Route::post('/cadastrar', [ContatoController::class, 'cadastrar']);
