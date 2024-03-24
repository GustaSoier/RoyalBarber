<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\CortesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SobreController;
use Faker\Guesser\Name;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/sobre', [SobreController::class, 'index'])->name('sobre');


//CORTES
Route::get('/cortes', [CortesController::class, 'index'])->name('cortes');
Route::get('/servicos/barba', [CortesController::class, 'barba'])->name('barba');
Route::get('/servicos/coloracao', [CortesController::class, 'coloracao'])->name('coloracao');
Route::get('/servicos/cuidados', [CortesController::class, 'cuidados'])->name('cuidados');
Route::get('/servicos/tratamento', [CortesController::class, 'tratamento'])->name('tratamento');


//LOGIN
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class, 'autenticar'])->name('login');
Route::get('/cadastrar', [LoginController::class, 'cadastrar'])->name('cadastrar');


// CONTATO
Route::get('/contato', [ContatoController::class, 'index'])->name('contato');
Route::get('/contato/enviar', [ContatoController::class, 'salvarNoBanco'])->name('contato.enviar');
Route::get('/contato/enviarnew', [ContatoController::class, 'salvarEmail'])->name('contato.enviarnew');
